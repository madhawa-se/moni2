<!DOCTYPE html>
<html lang="en" ng-app="myapp">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Registration Successful</title>

        <!-- Bootstrap -->
        <link href="<?php echo base_url() ?>css/bootstrap.css" rel="stylesheet">

        <!-- <link href="css/bootstrap.min.css" rel="stylesheet">-->

        <link href="<?php echo base_url() ?>css/style.css" rel="stylesheet">
        <!--  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">-->

        <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet"> 
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
        <link href="<?php echo base_url() ?>css/footer.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/form.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/fonts.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/status.css" rel="stylesheet">

        <link rel="icon" href="favicon.jpg" type="image/gif" sizes="16x16">



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>
        <script src="<?php echo base_url() ?>js/angular.js"></script>

    </head>


    <body>


        <!--header starat-->

        <?php echo $header ?>

        <div class="container">
            <div class="row text-center">
                <div class="col-sm-6 col-sm-offset-3">
                    <br><br> <h2 style="color:#19c6ba;font-weight: bold;">Success</h2>
                    <div class="centered">
                        <span class="glyicon glyphicon glyphicon-ok"></span>
                    </div>
                    <h3>Dear, <?php echo $name ?></h3>
                    <p style="font-size:18px;color:#5C5C5C;">Your Password is Successfully Reset.<br>You can Login now</p>
                    <p>
                        regards,<br>
                        <?php echo $domain ?>
                    </p>
                    
                    <br><br>
                </div>

            </div>
        </div>

        <?php echo $footer ?>

    </body>
</html>




