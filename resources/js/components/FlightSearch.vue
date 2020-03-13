<template>

    <div class="search-widget">
        <form method="POST" action="">

            <div class="checkbox-form d-flex flex-wrap">
                <div class="checkbox-area">
                    <input type="radio" v-model="roundTrip" v-bind:value="false"  name="triptype">
                    <label>One Way</label>
                </div>
                <div class="checkbox-area">
                    <input checked type="radio" v-model="roundTrip" v-bind:value="true"  name="triptype">
                    <label>Round Trip</label>
                </div>
                 <div class="checkbox-area">
                <input type="checkbox" v-model="nonStop">
                <label>Non Stop</label>
            </div>
            </div>
            <div class="rt-input-group rt-input-group--style">
                <div class="single-input  col-rt-in-3">
                    <!-- <input type="text" v-model="origin"  v-on:keyup="okeypress" placeholder="form:">-->
                    <vue-suggestion :items="items"
                                    v-model="origin"
                                    :setLabel="setLabel"
                                    :itemTemplate="itemTemplate"
                                    @changed="inputChange"
                                    @selected="itemSelected"
                                    placeholder="form:">
                    </vue-suggestion>
                    <span class="input-iconbadge"><img src="assets/images/icon-1.png" alt="" draggable="false"></span>
                    <span class="input-iconbadge-right"><img src="assets/images/icon-5.png" alt=""
                                                             draggable="false"></span>
                </div>
                <div class="single-input  col-rt-in-3">
                    <vue-suggestion :items="items2"
                                    v-model="destination"
                                    :setLabel="setLabel2"
                                    :itemTemplate="itemTemplate"
                                    @changed="inputChange2"
                                    @selected="itemSelected2"
                                    placeholder="to:">
                    </vue-suggestion>
                    <span class="input-iconbadge"><img src="assets/images/icon-1.png" alt="" draggable="false"></span>
                </div>

            </div>
            <div class="rt-input-group rt-input-group--style">

                <div class="single-input  col-rt-in-3">
                    <input type='date' v-model="depart"  name="booking_date_from" class='ddatepicker-here' data-language='en'
                           placeholder="depart">
                    <span class="input-iconbadge"><img src="assets/images/icon-2.png" alt="" draggable="false"></span>
                </div>
                <div v-if="roundTrip" class="single-input  col-rt-in-3">
                    <input type='date' v-model="returnn" name="booking_date_from" class='ddatepicker-here' data-language='en'
                           placeholder="return">
                    <span class="input-iconbadge"><img src="assets/images/icon-2.png" alt="" draggable="false"></span>
                </div>
                <div class="single-input  col-rt-in-2">
                    <button type="button" v-on:click="search" class="cmn-btn" value="search">Search</button>
                </div>
            </div>
            <div class="rt-input-group rt-input-group--style">
                <div class="single-input  col-rt-in-3">
                    <select v-model="adults"  class="select-bar">
                        <option data-display="1 Adult Passenger" selected value="1">1</option>
                        <option data-display="2 Adult Passengers" value="2">2</option>
                        <option data-display="3 Adult Passengers" value="3">3</option>
                        <option data-display="4 Adult Passengers" value="4">4</option>
                        <option data-display="5 Adult Passengers" value="5">5</option>
                    </select>
                    <span class="input-iconbadge"><img src="assets/images/icon-3.png" alt="" draggable="false"></span>
                </div>
                <div class="single-input  col-rt-in-3">
                    <select name="class" class="select-bar" v-model="travelClass">
                        <option selected  value="ECONOMY"> ECONOMY</option>
                        <option value="PREMIUM_ECONOMY"> PREMIUM_ECONOMY</option>
                        <option value="BUSINESS"> BUSINESS</option>
                        <option value="FIRST"> FIRST</option>
                    </select>
                    <span class="input-iconbadge"><img src="assets/images/icon-4.png" alt="" draggable="false"></span>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    import {autocomplete, single} from 'air-port-codes-node';
    import itemTemplate from './AirportCityItem';

    const apca = autocomplete({
        key: '5272a6c9e3',
        secret: 'ecfab4058be711a', // Your API Secret Key: use this if you are not connecting from a web server
        limit: 15
    });

    const getAirport = single({
        key: '5272a6c9e3',
        secret: 'ecfab4058be711a', // Your API Secret Key: use this if you are not connecting from a web server
    });
    const getAirport2 = single({
        key: '5272a6c9e3',
        secret: 'ecfab4058be711a', // Your API Secret Key: use this if you are not connecting from a web server
    });

    export default {
        components: {},
        data() {
            return {
                origin: null,
                destination: null,
                item: null,
                items: [],
                items2: [],
                itemTemplate,
                depart: null,
                returnn: null,
                travelClass: 'ECONOMY',
                adults: '1',
                children: '0',
                infants: '0',
                seniors: '0',
                nonStop:false,
                roundTrip: true,

            }
        },
        watch: {},
        mounted() {
            if (this.getParameterByName('origin') !== null) {


                this.origin = this.getParameterByName('originLocationCode')
                this.destination = this.getParameterByName('destination')
                this.returnn =  this.getParameterByName('returnDate')
                this.depart =  this.getParameterByName('departureDate')
                this.adults = this.getParameterByName('adults')
                this.travelClass = this.getParameterByName('travelClass')
                this.nonStop = this.getParameterByName('nonStop')

                getAirport.request(this.getParameterByName('originLocationCode'));
                // SUCCESS we found some airports
                getAirport.onSuccess = (data) => {
                    this.origin = data.airport
                };

                getAirport2.request(this.getParameterByName('destination'));
                // SUCCESS we found some airports
                getAirport2.onSuccess = (data) => {
                    this.destination = data.airport
                };


            }
        },
        methods: {
            search() {
                //console.log(window.location.origin)
                let search = window.location.origin + '/flights?';
                search += 'originLocationCode=' + this.origin.iata;
                search +=  '&destinationLocationCode=' + this.destination.iata;
                search +=  '&departureDate=' + this.depart;
                search +=  '&returnDate=' + this.returnn;
                search +=  '&adults=' + this.adults;
                search +=  '&children=' + this.children;
                search +=  '&infants=' +this.infants;
                search +=  '&travelClass=' + this.travelClass;
                search +=  '&nonStop=' + this.nonStop;
                search +=  '&currencyCode=USD';
                search +=  '&max=16';
                window.location =  search
               // window.location = window.location.origin + '/flights?origin=' + this.origin.iata + '&destination=' + this.destination.iata + '&departureDate=2020-10-01&returnDate=2020-11-01&adults=1&children=0&infants=0&seniors=0&travelClass=ECONOMY&nonStop=false&currency=USD&max=16'
            },
            itemSelected(item) {
                this.origin = item
            },
            setLabel(item) {
                if (this.origin === null) {
                    return '';
                } else {
                    return this.origin.city + '(' + this.origin.iata + '-' + this.origin.name + ')';
                }


            },
            inputChange(text) {

                apca.request(text);
                // SUCCESS we found some airports
                apca.onSuccess = (data) => {
                    console.log(data.airports)
                    this.items = data.airports
                };
// FAIL no airports found
                apca.onError = (data) => {
                    console.log('onError', data.message);
                };

                // your search method
                // this.items = this.list.filter(item => item.name.indexOf(text) >= 0);
                // now `items` will be showed in the suggestion list

            },
            itemSelected2(item) {
                this.destination = item
            },
            setLabel2(item) {
                if (this.destination === null) {
                    return '';
                } else {
                    return this.destination.city + '(' + this.destination.iata + '-' + this.destination.name + ')';
                }


            },
            inputChange2(text) {

                apca.request(text);
                // SUCCESS we found some airports
                apca.onSuccess = (data) => {
                    console.log(data.airports)
                    this.items2 = data.airports
                };
// FAIL no airports found
                apca.onError = (data) => {
                    console.log('onError', data.message);
                };

                // your search method
                // this.items = this.list.filter(item => item.name.indexOf(text) >= 0);
                // now `items` will be showed in the suggestion list

            },
            getParameterByName(name, url) {
                if (!url) url = window.location.href;
                name = name.replace(/[\[\]]/g, '\\$&');
                var regex = new RegExp('[?&]' + name + '(=([^&#]*)|&|#|$)'),
                    results = regex.exec(url);
                if (!results) return null;
                if (!results[2]) return '';
                return decodeURIComponent(results[2].replace(/\+/g, ' '));
            }
        }
    }
</script>
<style scope>
    .vue-suggestion .vs__list {
        width: 100%;
        text-align: left;
        border: none;
        border-top: none;
        max-height: 400px;
        overflow-y: auto;
        border-bottom: 1px solid #023d7b;
        position: relative;
        z-index: 100000;
    }

    .vue-suggestion .vs__list .vs__list-item {
        background-color: #fff;
        padding: 10px;
        border-left: 1px solid #023d7b;
        border-right: 1px solid #023d7b;
    }

    .vue-suggestion .vs__list .vs__list-item:last-child {
        border-bottom: none;
    }

    .vue-suggestion .vs__list .vs__list-item:hover {
        background-color: #eee !important;
    }

    .vue-suggestion .vs__list,
    .vue-suggestion .vs__loading {
        position: absolute;
    }

    .vue-suggestion .vs__list .vs__list-item {
        cursor: pointer;
    }

    .vue-suggestion .vs__list .vs__list-item.vs__item-active {
        background-color: #f3f6fa;
    }
</style>
