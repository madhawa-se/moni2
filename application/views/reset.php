
<!DOCTYPE html>
<html lang="en" ng-app="myapp">
    <head>
        <title>Matrimone.com</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Bootstrap 101 Template</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet">

        <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link href="<?php echo base_url() ?>css/footer.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/form.css" rel="stylesheet">


        <link rel="icon" href="favicon.jpg" type="image/gif" sizes="16x16">



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>js/angular.js"></script>


        <script src="<?php echo base_url() ?>js/angular.js"></script>
        <script>
            var baseurl = "<?php echo base_url(); ?>";
        </script>
        <script src="<?php echo base_url() ?>js/reset.js?id=4"></script>
    </head>


    <body>
        <!--header starat-->

        <?php echo $header ?>

        <!--header end-->


        <style>
            .well3 {
                min-height: 20px;
                padding: 19px;
                margin-bottom: 20px;
                background-color: #fff;
                color: #000;
                height: 280px;
                border: 1px solid #e3e3e3;
                border-radius: 0px;
                -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                box-shadow: inset 0 1px 1px rgba(0,0,0,.05);


            </style>

            <article class="container">
                <div class="row">


                    <style>
                        .well8 {
                            min-height: 20px;
                            padding: 19px;
                            margin-bottom: 20px;

                            background-color: rgb(253, 253, 253);
                            border: 1px solid @well-border;
                            border-radius: @border-radius-base;
                            .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
                            blockquote {
                                border-color: #ddd;
                                border-color: rgba(0,0,0,.15);
                            }
                        }
                        .button2 {
                            color: #FFF;
                            background-color: #7140bc;
                            width: 150px;
                            height: 40px;
                        } 
                    </style>

                    <div class="col-sm-6">
                        <h3 align="center"><b> Reset Password</b> </h3>
                        <div class="well8">


                            <form ng-cloak ng-validate="true" action="<?php echo site_url('reset'); ?>" novalidate="true"  class="form-horizontal" method="post" name="regform" ng-controller="formResetController" ng-submit="submitForm($event, regform.$valid)">

                                <?php echo validation_errors() ?>


                                <div class="form-group">
                                    <label class="col-md-3 control-label" for="textinput" align="left">Email</label>
                                    <div class="col-md-9">
                                        <input  name="email" ng-model="email" type="email" placeholder="Your email address" class="form-control input-md" required/>
                                        <p ng-show="regform.email.$error.required && (!regform.email.$pristine || submitted)" class="help-danger help">You Email is required.</p>
                                        <p ng-show="(!regform.email.$error.required && regform.email.$invalid) && (!regform.email.$pristine || submitted)" class="help-danger help">Enter a valid email</p>
                                    </div>

                                    <div class="span3">
                                        <br>
                                        <input name="reset" type="submit" value="Reset Password" class="button2" ng-click="submitted = true">
                                    </div>

                                </div>

                            </form>
                        </div>
                    </div>


                </div>
            </article>
            <div class="container-fluid">

                <?php echo $footer ?>

            </div>

        </body>
    </html>

