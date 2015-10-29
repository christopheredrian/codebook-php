<?php include( 'includes/header.php'); ?>

<div class="container-fluid">
    <nav class="row navbar navbar-default">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="home.php">CodeBook</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <form class="navbar-form navbar-right">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Email">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-default">Log in</button>
            </form>
        </div>
    </nav>


    <div class="container ">
        <div class="row">
            <!--Left div -->
            <div class="col-sm-6 col-xs-12"></div>

            <!--Right div -->
            <div class="col-sm-6 col-xs-12 well">
                <h1>Sign Up</h1>
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="firstName" class="col-sm-3 control-label">First Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="firstName" placeholder="First Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="lastName" class="col-sm-3 control-label">Last Name</label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="lastName" placeholder="Last Name">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="email" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-9">
                            <input type="email" class="form-control" id="email" placeholder="Email">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="password" class="col-sm-3 control-label">Password</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="password" placeholder="Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="rePassword" class="col-sm-3 control-label">Re-Enter</label>
                        <div class="col-sm-9">
                            <input type="password" class="form-control" id="rePassword" placeholder="Re-Enter Password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-9">
                            <button type="submit" class="btn btn-default">Register</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>

    </div>
</div>

<?php include( 'includes/footer.php'); ?>
