<template>
    <hr>
    <table class="table">
        <thead>
        <tr>
            <th>Item no.</th>
            <th>Location</th>
            <th>Rack no.</th>
            <th>Shelf no.</th>
            <th>Physical stock</th>
        </tr>
        </thead>
        <tbody>
        <tr v-for="item in list">
            <td>{{ item.item_no }}</td>
            <td>{{ item.location }}</td>
            <td>{{ item.rack_no }}</td>
            <td>{{ item.shelf_no }}</td>
            <td>{{ item.physical_stock }}</td>
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