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
								<i class="fa fa-btn fa-fw fa-lightbulb-o"></i>&nbsp;Create Inventory Item</span>
							</a>
						</li>
						<li >
							<a v-link="{ path: '/inventories' }">
								<i class="fa fa-btn fa-fw fa-list"></i>&nbsp;View Inventory</span>
							</a>
						</li>
						<li >
							<a v-link="{ path: '/inventories/verify' }">
								<i class="fa fa-btn fa-fw fa-thumbs-up"></i>&nbsp;Inventory Verification </span>
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