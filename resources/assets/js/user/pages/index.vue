<template>
	<div>
		<!--<search :query.sync="query" :callback="fetchUsers"></search>-->
		<table class="table table-hover table-condensed">
			<thead>
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Username</th>
				<th>Department</th>
				<th>Title</th>
				<th>Email</th>
				<th>Employee Status</th>
			</tr>
			</thead>
			<tbody>
			<tr v-for="user in users.data" v-link="{ path: '/users/' + user.id }">
				<td>{{ user.first_name }}</td>
				<td>{{ user.last_name }}</td>
				<td>{{ user.name }}</td>
				<td>{{ user.department }}</td>
				<td>{{ user.title }}</td>
				<td>{{ user.email }}</td>
				<td>{{ (user.employee_status==1) ? 'Active' : 'Inactive' }}</td>
			</tr>
			</tbody>
		</table>
		<div class="pull-right">
			<pagination :pagination="users" :callback="fetchUsers"></pagination>
		</div>
	</div>
</template>

<script>
	import Search from '../../common/Search.vue';
	import Pagination from '../../common/Pagination.vue';
	import UserService from '../../user/services/UserService';

	export default {
		data() {
			return {
				users: {},
				query: {}
			}
		},

		components: { Pagination, Search },

		created() {
			this.fetchUsers();
		},

		methods: {
			fetchUsers(page = 1) {
				var params = this.query;
				params.page = page;

				UserService.take(params).then((data) => {
					this.$set('users', data);
				});
			}
		}
	}
</script>
