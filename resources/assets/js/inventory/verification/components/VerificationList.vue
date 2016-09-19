<template>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Item no.</th>
            <th>Location</th>
            <th>Colour</th>
            <th>Rack no.</th>
            <th>Shelf no.</th>
            <th>Physical stock</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="verification in list">
            <td>{{ verification.item_no }} - {{ verification.item.name }}</td>
            <td>{{ verification.location ? verification.location.location : 'N/A' }}</td>
            <td>{{ verification.colour ? verification.colour.ral_no : 'N/A' }}</td>
            <td>{{ verification.rack_no }}</td>
            <td>{{ verification.shelf_no }}</td>
            <td>{{ verification.physical_stock }}</td>
        </tr>
        </tbody>
    </table>
</template>

<script>
    export default {
        props: {
            list: {
                required: true,
                type: Array
            }
        }
    }
</script>