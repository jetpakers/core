<template>
    <div>
        <b>{{ item.city }}({{item.iata}} - {{item.name}} )</b>
        <span>{{ item.country.name }}</span>
    </div>
</template>

<script>
    export default {
        props: {
            item: { required: true },
        }
    }
</script>
