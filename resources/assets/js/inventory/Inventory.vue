<template>
	<div class="row">
		<div class="col-md-2">
			<div class="panel panel-default panel-flush">
				<div class="panel-heading">
					Actions
				</div>
				<div class="panel-body">

					<ul class="nav app-tabs-stacked">
						<li >
							<a v-link="{ path: '/inventories/create' }">
								<i class="fa fa-btn fa-fw fa-lightbulb-o"></i>Create Inventory Item
							</a>
						</li>
						<li >
							<a v-link="{ path: '/inventories' }">
								<i class="fa fa-btn fa-fw fa-list"></i>View Inventory
							</a>
						</li>
						<hr>
						<li >
							<a v-link="{ path: '/inventories/verify' }">
								<i class="fa fa-btn fa-fw fa-thumbs-up"></i>Inventory Verification
							</a>
						</li>
						<li >
							<a v-link="{ path: '/inventories/verifications' }">
								<i class="fa fa-btn fa-fw fa-list"></i>&nbsp;View Inventory Verification
							</a>
						</li>
						<hr>
						<li>
							<a v-link="{path: '/inventories/transferorders/create'}">
								<i class="fa fa-btn fa-fw"></i>Create Transfer Order
							</a>
						</li>
						<li>
							<a v-link="{path: '/inventories/transferorders'}">
								<i class="fa fa-btn fa-fw"></i>View Transfer Orders
							</a>
						</li>
						<hr>
						<li>
							<a v-link="{path: '/inventories/materialrequests/create'}">
								<i class="fa fa-btn fa-fw"></i>Create Material Request
							</a>
						</li>
						<li>
							<a v-link="{path: '/inventories/materialrequests'}">
								<i class="fa fa-btn fa-fw"></i>View Material Requests
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
		<div class="col-md-10">
			<router-view></router-view>
		</div>
	</div>
</template>