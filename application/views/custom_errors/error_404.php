<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
    <head>
        <title>404 Page Not Found</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

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


        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <style type="text/css">

            ::selection { background-color: #E13300; color: white; }
            ::-moz-selection { background-color: #E13300; color: white; }

            body {
                background-color: #fff;
                margin: 40px;
                font: 13px/20px normal Helvetica, Arial, sans-serif;
                color: #4F5155;
            }

            a {
                color: #003399;
                background-color: transparent;
                font-weight: normal;
            }

            h1 {
                color: #444;
                background-color: transparent;
                border-bottom: 1px solid #D0D0D0;
                font-size: 19px;
                font-weight: normal;
                margin: 0 0 14px 0;
                padding: 14px 15px 10px 15px;
            }

            code {
                font-family: Consolas, Monaco, Courier New, Courier, monospace;
                font-size: 12px;
                background-color: #f9f9f9;
                border: 1px solid #D0D0D0;
                color: #002166;
                display: block;
                margin: 14px 0 14px 0;
                padding: 12px 10px 12px 10px;
            }

            #container {
                margin: 10px;
                border: 1px solid #D0D0D0;
                box-shadow: 0 0 8px #D0D0D0;
            }

            p {
                margin: 12px 15px 12px 15px;
            }
        </style>
    </head>
    <body>


        <div class="container">

            <div class="row">
                <div class="col-md-6 col-md-offset-3 text-center">
                    <br>
                    <h4>Bob's Camera Site</h4>
                    <p><img src="https://cdn3.iconfinder.com/data/icons/tango-icon-library/48/camera-photo-128.png" alt=""></p>

                    <h2><i class="fa fa-exclamation-triangle" style="color:red"></i>

                        Page not found <small>404 error</small></h2>
                    <p>Well, this is embarrassing.

                        <br>
                    </p>

                    <p><a href="#">Click here</a> to visit our home page</p>

                    <p>
                        <a href="#">BobsCamera.com</a></p>

                </div>

            </div>
            <p>Best viewed <a href="http://bootsnipp.com/iframe/OeKdM" target="_blank">full screen</a></p>
            <p>
                <a href="http://validator.w3.org/check?uri=http%3A%2F%2Fbootsnipp.com%2Fiframe%2FOeKdM" class="pull-left" target="_blank">
                    <small>HTML</small><sup>5</sup>
                </a>
            </p>

        </div>


        <div id="container">
            <h1><?php echo $heading="hello"; ?></h1>
            <?php echo $message="message"; ?>
        </div>
    </body>
</html>