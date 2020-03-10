<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function flights()
    {
        return view('flights');
    }

    public function showFlights(Request $request)
    {
        if (!isset($_COOKIE['amadeus_token'])) {
            $client = new Client();
            $res = $client->request('POST', 'https://test.api.amadeus.com/v1/security/oauth2/token', [
                'form_params' => [
                    'grant_type' => 'client_credentials',
                    'client_id' => 'yh8Fp5OJyTHzkD90pzhBOUyOuMzHVzVt',
                    'client_secret' => 'fmmh2vcsPWfl3SVW'
                ]
            ]);


            $ress = json_decode($res->getBody(), true);

            // return $ress->type;
            setcookie('amadeus_token', $ress['access_token'], time() + ($ress['expires_in'] - 10), '/');

            $amadeus_token = $ress['access_token'];
        } else {
            $amadeus_token = $_COOKIE['amadeus_token'];
        }

        $client = new Client();
        $res = $client->request('GET', 'https://test.api.amadeus.com/v1/shopping/flight-offers',
            [
                'headers' => [
                    'Authorization' => 'Bearer ' . $amadeus_token
                ],
                'query' => [
                    'origin' => 'NYC',
                    'destination' => 'ACC',
                    'departureDate' => '2020-10-01',
                   /* 'returnDate' => '2020-11-01',*/
                   /* 'arrivalBy' => '',
                    'returnBy' => '',*/
                    'adults' => '1',
                    'children' => '0',
                    'infants' => '0',
                    'seniors' => '0',
                    'travelClass' => 'ECONOMY',
                    /*'includeAirlines' => '',
                    'excludeAirlines' => '',*/
                    'nonStop' => 'false',
                    'currency' => 'USD',
                   /* 'maxPrice' => '',*/
                    'max' => '10'
                ]
            ]);


        $ress = json_decode($res->getBody(), true);


        return view('flights', ['data' => $ress]);

    }
}
