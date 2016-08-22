<template>
	<div>
		<search :query.sync="query" :callback="fetchInventories"></search>
		<table class="table table-hover table-condensed">
			<thead>
			<tr>
				<th>Item No</th>
				<th>Name</th>
				<th>Description</th>
				<th>Quantity</th>
			</tr>
			</thead>
			<tbody>
			<tr v-for="item in inventories.data" v-link="{ path: '/inventories/' + item.item_no }">
				<td>{{ item.item_no }}</td>
				<td>{{ item.name }}</td>
				<td>{{ item.description }}</td>
				<td>{{ item.quantity }}</td>
			</tr>
			</tbody>
		</table>
		<div class="pull-right">
			<pagination :pagination="inventories" :callback="fetchInventories"></pagination>
		</div>
	</div>
</template>

<script>
	import Search from '../../common/Search.vue';
	import Pagination from '../../common/Pagination.vue';
	import InventoryService from '../../inventory/services/InventoryService';

	export default {
		data() {
			return {
				inventories: {},
				query: ''
			}
		},

		components: { Pagination, Search },

		created() {
			this.fetchInventories();
		},

		methods: {
			fetchInventories(page = 1) {
				var params = {
					page: page,
					query: this.query
				};

				InventoryService.take(params).then((data) => {
					this.$set('inventories', data);
				});
			}
		}
	}
</script>
