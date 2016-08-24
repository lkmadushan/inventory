<template>
    <div>
        <div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" rel="home" href="/" title="Aahan Krish's Blog - Homepage">ELSTEEL</a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav">
                        <li><a v-link="{ path: '/inventories' }">Inventory</a></li>
                        <li><a v-link="{  }">Sales</a></li>
                        <li><a v-link="{  }">Purchases</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true">
                                <i class="fa fa-user" aria-hidden="true"></i>&nbsp; Admin <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="/logout">Logout</a></li>
                            </ul>
                        </li>
                    </ul>

                    <div class="col-sm-2 col-md-2 pull-right">
                        <form class="navbar-form" role="search">
                            <div class="input-group">
                                <input type="text" class="form-control" placeholder="Search" name="srch-term" id="srch-term">
                                <div class="input-group-btn">
                                    <button class="btn btn-default" type="submit"><i class="glyphicon glyphicon-search"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>




