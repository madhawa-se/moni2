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
        <link href="<?php echo base_url() ?>css/menu.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/profile.css" rel="stylesheet">

        <link rel="icon" href="favicon.jpg" type="image/gif" sizes="16x16">



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->

        <script src="<?php echo base_url() ?>js/bootstrap.min.js" type="text/javascript"></script>

        <script src="<?php echo base_url() ?>js/angular.js"></script>
        <script src="<?php echo base_url() ?>js/angular-route.min.js"></script>
        <script>
            var baseurl = "<?php echo base_url(); ?>";
        </script>

        <script src="<?php echo base_url() ?>js/app2.js"></script>
        <script src="<?php echo base_url() ?>js/filereader.js"></script>
        <script>
<?php
if (isset($jsondata)) {
    echo "var jsonData=$jsondata";
}
?>
        </script>

        <style>
            .tabs{
                margin: 0;
                padding: 0;
                list-style-type: none;

            }
            .tabs.verticle-tabs li{
                padding: 20px;
                background-color: rgb(255, 255, 255);
                margin-bottom: 10px;
                border-radius: 4px;
                color: #FF9800;
                text-align: center;
            }

            /*   bootstrap overide  */
            .nav-pills > li.active > a, .nav-pills > li.active > a:hover, .nav-pills > li.active > a:focus {
                background-color: rgba(233, 30, 99, 0.73);
            }
            /* - bootstrap overide  */

            .round-button{
                display: inline-block;
                height: 60px;
                width: 60px;
                background-color: #38cec5;
                text-align: center;
                line-height: 60px;
                border-radius: 50%;
                margin-bottom: 20px;
                color:white;
                text-decoration: none;
                box-shadow: 8px 10px 20px 0px rgba(46,61,73,0.15);
                transition: box-shadow 0.3s ease;
                border: 1px solid rgba(0,0,0,0);
            }
            .round-button:hover{
                box-shadow: 2px 4px 8px 0px rgba(46,61,73,0.2);
            }
            label {
                display: inline-block;
                max-width: 100%;
                margin-bottom: 5px;
                font-weight: 500;
                color: #7b7b7b;
                font-size: 14px;
            }
        </style>
    </head>


    <body>


        <!--header starat-->

        <?php echo $header; ?>

        <!--header end-->





        <!--content para-->			
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




                <style>
                    .button2 {
                        color: #FFF;
                        background-color: #7140bc;
                        width:150px;
                        height:40px;

                    }

                    .button2:hover {
                        background-color: #dd3175; 
                        color: white;
                    }	

                </style>



            </article>




            <!--search form start-->
            <style>
                .well2 {
                    min-height: 20px;
                    padding: 19px;
                    margin-bottom: 0px;
                    background-color: #ed7ebd;
                    color: #fff;

                    border: 1px solid #e3e3e3;
                    border-radius: 0px;
                    -webkit-box-shadow: inset 0 1px 1px rgba(0,0,0,.05);
                    box-shadow: inset 0 1px 1px rgba(0,0,0,.05);


                </style>




                <!--search form end-->


                <!--cities list -->
                <style>
                    .well8 {


                        background-color: #fff;
                        color: #000;




                    </style>



                


                    <div class="well8">
                        <div class="container">

                            <nav class="navbar navbar-custom">
                                <div class="container-fluid">
                                    <div class="navbar-header">
                                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                    </div>
                                    <div class="collapse navbar-collapse" id="myNavbar">
                                        <ul class="nav navbar-nav">
                                            <li class="active"><a href="#">Home</a></li>
                                            <li><a href="<?php echo site_url('profile/message'); ?>"><span class="glyphicon glyphicon-envelope"></span> Inbox</a></li>
                                            <li><a href="<?php echo site_url('profile/edit'); ?>"><span class="glyphicon glyphicon-pencil"></span> Edit profile</a></li>
                                            <li><a href="#"><span class="glyphicon glyphicon-search"></span> Search</a></li>
                                        </ul>
                                        <ul class="nav navbar-nav navbar-right">
                                            <li>


                                                <a href="#">
                                                    <!--
                                                    <span class="glyphicon glyphicon-user"></span>
                                                    <?php // echo $uname ?> 
                                                    -->
                                                    <img class="img-circle profile-pic" src="<?php echo $pic ?>" />
                                                </a>

                                            </li>
                                            <li><a href="<?php echo site_url('user/logout') ?>"><span class="glyphicon  glyphicon-off"></span> Logout</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </nav>


                        </div>
                    </div>

                </div>
                <!--brides list end-->

                <!--groom list end-->


                <!--city list end-->




                <style>

                    hr{ 
                        display: block;
                        margin-top: 0.5em;
                        margin-bottom: 0.0em;
                        margin-left: auto;
                        margin-right: auto;
                        color:#f842a8;
                        background-color: #f00;
                        border-style: inset;
                        border-width: 3px;
                        border-color:#f0359e;
                    }

                </style>




                <style>
                    .well4 {


                        margin-bottom: 0px;
                        background-color: #fff0f5;
                        color: #000;




                    </style>
                    <?php if (isset($sub_content)) { echo $sub_content;}?>
                      

                            <div class="well4">
                                <div class="container">
                                    <h4><b>Browse Matrimoney profile by</b></h4>

                                    <div class="wel">
                                        <div class="col-md-6">
                                            <h5><b>Religion :</b></h5>
                                            Hindu : <a href="">Hindu Brides</a> | <a href="">Hindu Grooms</a><br>
                                            Muslim : <a href="">Muslim Brides</a> | <a href="">Muslim Grooms</a><br>
                                            Christian : <a href="">Christian Brides</a> | <a href="">Christian Grooms</a><br>
                                            Buddhist : <a href="">Buddhist Brides</a> | <a href="">Buddhist Grooms</a>

                                        </div>

                                        <div class="col-md-6">
                                            <h5><b>Language :</b></h5>
                                            Sinhala : <a href="">Sinhala Brides</a> | <a href="">Sinhala Grooms</a><br>
                                            Tamil : <a href="">Tamil Brides</a> | <a href="">Tamil Grooms</a><br>
                                            Malay : <a href="">Malay Brides</a> | <a href="">Malay Grooms</a><br>


                                            <h5><b>Lives in:</b></h5>
                                            <a href="">Sri Lanka</a> | <a href="">UAE</a>
                                            <a href="">UK</a> | <a href="">Qatar</a>
                                            <a href="">India</a> | <a href="">Saudi Arabia</a> | <a href="">Australia</a><br>


                                        </div>


                                    </div>

                                </div>
                            </div>
                        </div></div>


                    <br>
                    <style>
                        .well9 {


                        margin-bottom: 0px;
                        background-color: #fff;
                        color: #000;

                    }


                </style>


                <!--footer-->

                <footer>
                    <?php echo $footer ?>
                </footer>




            </body>
        </html>