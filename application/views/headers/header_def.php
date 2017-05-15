<!--header starat-->
<header>
    <script src="<?php echo base_url() ?>js/login.js" type="text/javascript"></script>
    <div class="container">
        <div class="row">
            <div class="col-sm-6">
                <style>
                    .img2{
                        vertical-align: middle;
                        margin-top: -12px;
                    }

                </style>
                <a href="<?php echo base_url() ?>"><img height="80px" src="<?php echo base_url() ?>images/logo5.png" class="img2"></a>

            </div>
            <div class="col-sm-6 hidden-xs" ng-controller="loginController">
                <div class="row">

                    <form ng-cloak ng-validate="true" action="<?php echo site_url('login'); ?>" novalidate="true"  class="form-horizontal" method="post" name="loginform"  ng-submit="submitLogin($event, loginform.$valid)">

                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Email Address" name="user" ng-model="user" required="">
                                <div class="login-bottom-text checkbox hidden-sm">

                                </div>
                            </div>
                        </div>	
                        <div class="col-sm-5">
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" ng-model="password" name="pass" required="">
                                <div class="login-bottom-text hidden-sm"> <a style="color:white" href="<?php echo site_url("Reset") ?>">Forgotten account?</a> </div>
                            </div>
                        </div>

                        <style>
                            .button3 {
                                color: #FFF;
                                background-color: #7140bc;
                                width:100px;
                                height:30px;
                                border-radius:2px;

                            }

                            .button3:hover {
                                background-color: #dd3175; 
                                color: white;
                            }							


                        </style>

                        <div class="col-sm-2">
                            <div class="form-group">
                                <input type="submit" name="login" value="login" class="button3" ng-model="loginbutton" ng-click="loginSubmitted = true">
                            </div>
                        </div>
                    </form>

                </div>	
                <div class="clearfix" style="color:white">
                    <p ng-show="loginform.user.$invalid && (loginform.user.$touched || loginSubmitted)" class="help">Please Enter Username</p>
                    <p ng-show="loginform.pass.$invalid && (loginform.user.$touched || loginSubmitted)" class="help">Please Enter Password</p>
                    <?php if (isset($login_errors)) echo $login_errors; ?>
                </div>
            </div>
        </div>
    </div>
</header>


<!--header end-->