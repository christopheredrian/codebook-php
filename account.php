<?php include('includes/header-nav.php'); ?>

<style type="text/css">
    /*#account-details{*/
    /*    border: 1px solid #D3D3D3;*/
    /*    border-radius: 20px;*/
    /*    padding: 3%;*/
    /*}*/
    /*#confirmation {*/
    /*    border: 1px solid #D3D3D3;*/
    /*    border-radius: 20px;*/
    /*    padding: 3%;*/
    /*}*/
</style>
<div class="container well">
    <div id="account-details" class="well col-md-6">
        <form>
        <fieldset>
            <legend><h3>Account Settings</h3></legend>
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" value="Mike Smith" />
            </div>
            <div class="form-group">
                <label for="email">Email Address/Username</label>
                <input type="email" class="form-control" id="email" value="hello@example.com" readonly/>
            </div>
            <hr>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" />
            </div>
            <div class="form-group">
                <label for="confirm-password">Re-Enter Password</label>
                <input type="password" class="form-control" id="confirm-password" />
            </div>
            <hr>
            <div id="confirmation">
                <div class="form-group">
                    <p>Please enter current password to confirm changes</p>
                    <label for="confirm-password">Current Password</label>
                    <input type="password" class="form-control" id="confirm-password" />
                </div>
            </div>
            <hr>
            <button type="submit" class="btn btn-info">Submit</button>
        </fieldset>
    </form>
    </div>
    <div class="col-md-6">
        <h3>Accounts</h3>
        <hr>
        <div class="form-group">
            <label for="googleplus">Google+</label>
            <input type="url" class="form-control" id="googleplus" placeholder="https://plus.google.com/+myusername/">
            <!--TODO: Validation here -->
        </div>
        <div class="form-group">
            <label for="facebook">Facebook+</label>
            <input type="url" class="form-control" id="facebook" placeholder="https://www.facebook.com/myusername">
            <!--TODO: Validation here -->
        </div>
        <div class="form-group">
            <label for="twitter">Twitter</label>
            <input type="url" class="form-control" id="twitter" placeholder="https://twitter.com/myuserid">
            <!--TODO: Validation here -->
        </div>
        <div class="form-group">
            <label for="github">Github</label>
            <input type="url" class="form-control" id="github" placeholder="https://github.com/myusername">
            <!--TODO: Validation here -->
        </div>
    </div>


</div>

<?php include('includes/footer-nav.php'); ?>
