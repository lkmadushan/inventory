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
                            <a v-link="{ path: '/user/create' }">
                                <i class="fa fa-btn fa-fw fa-lightbulb-o"></i>Create User
                            </a>
                        </li>
                        <li >
                            <a v-link="{ path: '/user/index' }">
                                <i class="fa fa-btn fa-fw fa-list"></i>View Users
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