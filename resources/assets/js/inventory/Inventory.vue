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
								<i class="fa fa-btn fa-fw fa-lightbulb-o"></i>Create Inventory Item</span>
							</a>
						</li>
						<li >
							<a v-link="{ path: '/inventories' }">
								<i class="fa fa-btn fa-fw fa-list"></i>View Inventory</span>
							</a>
						</li>
						<li >
							<a v-link="{ path: '/inventories/verify' }">
								<i class="fa fa-btn fa-fw fa-thumbs-up"></i>Inventory Verification</span>
							</a>
						</li>
						<li >
							<a v-link="{ path: '/inventories/verifications' }">
								<i class="fa fa-btn fa-fw fa-list"></i>&nbsp;View Inventory Verification</span>
							</a>
						</li>
						<li>
							<a v-link="{ path: '/inventories/transfer-orders/create' }">
								<i class="fa fa-btn fa-fw"></i>Create Transfer Order</span>
							</a>
						</li>
						<li>
							<a v-link="{ path: '/inventories/material_requests/create' }">
								<i class="fa fa-btn fa-fw"></i>Create Material Request</span>
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