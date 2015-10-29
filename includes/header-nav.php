<?php include('header.php'); ?>
    <nav class="col-xs-12 navbar navbar-default navbar-fixed-top navigation-cs">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="home.php">CodeBook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <a href="#">
                        <button type="submit" class="btn btn-default"><span class="glyphicon glyphicon-search"></span></button>
                    </a>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="home.php" >Home</a></li>
                    <li><a href="groups.php" >Groups</a></li>
                    <li><a href="profile.php" >Profile</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            <span class="glyphicon glyphicon-option-vertical"></span>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="account.php">Account Settings</a></li>
                            <li role="separator" class="divider"></li>
                            <li><a href="#" data-href="bye.html">Sign Out</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
    <div class="bottom-pane">
    