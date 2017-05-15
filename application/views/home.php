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
        <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Lato" />
        <link href="<?php echo base_url() ?>css/footer.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/form.css" rel="stylesheet">
        <link href="<?php echo base_url() ?>css/fonts.css" rel="stylesheet">

        <link rel="icon" href="favicon.jpg" type="image/gif" sizes="16x16">



        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="js/bootstrap.min.js"></script>


        <script src="<?php echo base_url() ?>js/angular.js"></script>
        <script>
            var baseurl = "<?php echo base_url(); ?>";
        </script>
        <script src="<?php echo base_url() ?>js/app.js"></script>
        <style>
            #map{
                height:500px;
            }
            .wrap-bg{
                position: relative;
                background-image: url("<?php echo base_url() ?>images/walls/wall (3).jpg");
                background-size:cover;
            }
            .overlay{
                background-color: #ffdfe5b3;
            }
        </style>
    </head>


    <body>


        <!--header starat-->

        <?php echo $header ?>

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
            <div class="wrap-bg">
                <div class="overlay">
                    <article class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="wel">

                                    <h3><b>Welcome to <?php echo $domain ?> ( The largest matrimonial in Sri Lanka )</b></h3>
                                    <p align="justify"><?php echo $domain ?> is an exclusive matrimony portal for Sri Lankans from around the world to find a life partner. We are making a bridge the between you and your life partner no matter where he or she is. Meet singles from around the world to find a life partner.

                                        Best and Most trusted website for the Sri Lankan Marriage Proposals and Matrimonial.
                                        <br><br>
                                        We offer Services that deepen the trust of our members with detailed Manual Screening of every activity.

                                        <?php echo $domain ?> provides a pleasant, satisfying, and superior matchmaking experience to our members while zealously protecting their privacy and security. Every aspect of our site has been constructed with secure matrimonial as the central focus.

                                    </p>
                                </div>
                                <style>
                                    .img3{
                                        vertical-align: middle;
                                    }
                                    /* Portrait tablets and small desktops */
                                    @media (min-width:992px) {
                                        .img3{
                                            /*                                    margin-left: 200px;*/
                                        }
                                    }

                                </style>

<!--                        <img id="" class="img3 img-responsive" style="max-height:450px !important" src="<?php echo base_url() ?>images/map4.png" align="center"/>-->
                                <div id="map" class="img3" style="max-height:450px !important" align="center"></div>

                                </div>


                                <!--content para end-->



                                <!--content form start -->
                                <br>


                                <style>
                                    .well8 {
                                    min-height: 20px;
                                    padding: 19px;
                                    margin-bottom: 20px;

                                    background-color:#f2b7cf;
                                    border: 1px solid @well-border;
                                    border-radius: @border-radius-base;
                                    .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
                                    blockquote {
                                        border-color: #ddd;
                                        border-color: rgba(0,0,0,.15);
                                    }
                                }

                            </style>

                            <div class="col-sm-6">
                                <style>
                                    h2{
                                        font-size: 20px;
                                        line-height: 1.5;
                                        font-weight: normal;
                                    }
                                    </style>
                                    <h2 align="center">  An Exclusive Matrimoney Portal for <br>SriLankans around the world </h2>
                                    <div class="well8">


                                        <form ng-cloak ng-validate="true" action="<?php echo site_url('register'); ?>" novalidate="true"  class="form-horizontal" method="post" name="regform" ng-controller="formController" ng-submit="submitForm($event, regform.$valid)">

                                            <?php if (isset($reg_errors)) echo $reg_errors; ?>

                                            <legend><font color="#de3075" size="6px" >Register Free</font></legend>

                                            <div class="form-group">
                                                <label class="col-md-3 control-label" >Profile for</label>
                                                <div class="col-md-9">
                                                    <select id="profile" name="profile" ng-model="profile" class="form-control" ng-options="c.id as c.name  for c in profileForList track by c.id" required>
                                                        <option value="">--Select--</option>
                                                    </select>
                                                    <p ng-show="regform.profile.$invalid && (!regform.profile.$pristine || submitted)" class="help-danger help">Profile for is required.</p>

                                                </div>
                                            </div>




                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textinput" align="left">Name</label>
                                                <div class="col-md-9">
                                                    <input id="name" ng-model="name" name="name" type="text" placeholder="Your Name" class="form-control input-md" required="">
                                                    <p ng-show="regform.name.$invalid && (!regform.name.$pristine || submitted)" class="help-danger help">Your name is required.</p>
                                                </div>

                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="notifymode">Gender</label>
                                                <div class="col-md-9">
                                                    <select id="gender" name="gender" class="form-control" ng-model="gender"  ng-options="c.id as c.name  for c in genders track by c.id" required >
                                                        <option value="">--Select--</option>
                                                    </select>
                                                    <p ng-show="regform.gender.$invalid && (!regform.gender.$pristine || submitted)" class="help-danger help">Please select your gender</p>

                                                </div>
                                            </div>


                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="notifymode">Date of Birth</label>


                                                <div class="col-md-2">
                                                    <select name="month" class = "form-control">
                                                        <option value="01">Jan</option><option value="02">Feb</option><option value="03">Mar</option>
                                                        <option value="04">Apr</option><option value="05">May</option><option value="06">Jun</option>
                                                        <option value="07">Jul</option><option value="08">Aug</option><option value="09">Sep</option>
                                                        <option value="10">Oct</option><option value="11">Nov</option><option value="12">Dec</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <select name="day" class = "form-control">
                                                        <option value="1">1</option><option value="2">2</option><option value="3">3</option><option value="4">4</option>
                                                        <option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option>
                                                        <option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option>
                                                        <option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option>
                                                        <option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="21">21</option>
                                                        <option value="22">22</option><option value="23">23</option><option value="24">24</option><option value="25">25</option>
                                                        <option value="26">26</option><option value="27">27</option><option value="28">28</option><option value="29">29</option>
                                                        <option value="30">30</option><option value="31">31</option>
                                                    </select>
                                                </div>
                                                <div class="col-md-2">
                                                    <select name="year" class = "form-control">
                                                        <?php
                                                        if (isset($year_offset)) {
                                                            for ($i = 0; $i < 100; $i++) {
                                                                ?>
                                                                <option value="<?php
                                                                $year = ($year_offset - $i);
                                                                echo $year
                                                                ?>"><?php echo $year ?></option>
                                                                        <?php
                                                                    }
                                                                }
                                                                ?>
                                                    </select>
                                                </div>

                                            </div>





                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="threshold">Religion</label>
                                                <div class="col-md-9">
                                                    <select id="religion" name="religion"  ng-model="religion_list" class="form-control" ng-options="c.id as c.name  for c in religionList track by c.id" required>
                                                        <option value="">--Select--</option>
                                                    </select>
                                                    <p ng-show="regform.religion.$invalid && (regform.religion.$touched || submitted)" class="help-danger help">Select your religion</p>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="threshold">Mother Tongue</label>
                                                <div class="col-md-9">
                                                    <select id="mothertongue" name="mothertongue" ng-model="lan_list" class="form-control" ng-options="c.id as c.name  for c in lanList track by c.id" required>
                                                        <option value="">--Select--</option>
                                                    </select>
                                                    <p ng-show="regform.mothertongue.$invalid && (regform.mothertongue.$touched || submitted)" class="help-danger help">Select your language</p>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textinput">Email</label>
                                                <div class="col-md-9">
                                                    <input  name="email" ng-model="email" type="email" placeholder="Your Email Address" class="form-control input-md" required/>
                                                    <p ng-show="regform.email.$error.required && (!regform.email.$pristine || submitted)" class="help-danger help">Your Email is required.</p>
                                                    <p ng-show="(!regform.email.$error.required && regform.email.$invalid) && (!regform.email.$pristine || submitted)" class="help-danger help">Enter a valid email</p>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="threshold">Living In</label>
                                                <div class="col-md-9">
                                                    <select id="livein" name="livein" class="form-control" ng-model="country_list" ng-change="updateCountry(country_list)"
                                                            ng-options="c.id as c.name  for c in countryList track by c.id" required>

                                                        <option data-country_code="00" value="">--Select--</option>

                                                        <!-- <option ng-repeat="country in countryList" data-country_code="{{country.code}}" value="{{country.id}}">{{country.name}}</option>-->

                                                    </select>
                                                    <p ng-show="regform.livein.$invalid && (regform.livein.$touched || submitted)" class="help-danger help">Country is required.</p>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textinput">Phone</label>
                                                <div class="col-md-3">
                                                    <input id="isd" name="countrycode" ng-model="countrycode" type="text" placeholder="Code" class="form-control input-md" required="" readonly="true">
                                                </div>


                                                <div class="col-md-6">
                                                    <input id="fnumber" ng-model="fnumber" name="fnumber" type="number" placeholder="Number" class="form-control input-md" required ng-maxlength="12">
                                                    <p ng-show="regform.fnumber.$invalid && (regform.fnumber.$touched || submitted)" class="help-danger help">Enter a valid phone number</p>
                                                </div>
                                            </div>



                                            <div class="form-group">
                                                <label class="col-md-3 control-label" for="textinput">Password</label>
                                                <div class="col-md-9">
                                                    <input id="password" ng-model="password" name="password" type="password" placeholder="Password" class="form-control input-md" ng-minlength="5" required>
                                                    <p ng-show="regform.password.$error.required && (regform.password.$touched || submitted)" class="help-danger help">Enter password</p>
                                                    <p ng-show="regform.password.$error.minlength && (regform.password.$touched || submitted)" class="help-danger help">Password should be at least 5 character</p>
                                                </div>

                                            </div>


                                            <div class="span3">
                                                <label><input type="checkbox" ng-model="terms" name="terms" required=""> I agree with the <a href="#">Terms and Conditions</a>.</label>
                                                <p ng-show="regform.terms.$invalid && (regform.terms.$touched || submitted)" class="help-danger help">Accept the terms & conditions to proceed further</p>

                                                <input name="register" type="submit" value="Sign up" class="button2" ng-click="submitted = true">
                                            </div>
                                        </form>
                                    </div>
                                </div>

                            </div>



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

                            <!--
                   <button id="button2" name="submitButton" align="right" width="200px" class="button2"><b>Register</b></button>
                            -->


                        </article>
                    </div>
                </div>
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


                    <div class="well2" >
                        <div class="container">
                            <form class="form-inline" role="form" method="post" action="<?php echo site_url("Search/quick_search_submit") ?>">

                                <h1>Find the one who completes you </h1>

                                <div class="form-group">
                                    <label for="name">Looking For</label><br>
                                    <div class="radio radio-info radio-inline">
                                        <input type="radio" size="12" id="inlineRadio1" value="1" name="gender" checked="">
                                        <label for="inlineRadio1"> Groom </label>
                                    </div>
                                    <div class="radio radio-inline">
                                        <input type="radio" id="inlineRadio2" value="2" name="gender">
                                        <label for="inlineRadio2"> Bride </label>
                                    </div>
                                </div>&nbsp;&nbsp;&nbsp;&nbsp;

                                <div class="form-group">
                                    <label for="name">Age</label><br>
                                    <select name="from" class = "form-control">
                                        <?php for ($i = 18; $i < 50; $i++) { ?>
                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="name"></label><br>to

                                    <select name="to" class = "form-control" width="100px">
                                        <?php for ($i = 19; $i <= 50; $i++) { ?>
                                            <option value="<?php echo $i ?>"><?php echo $i ?></option>
                                        <?php } ?>
                                    </select>  &nbsp;&nbsp;&nbsp;&nbsp;
                                </div>



                                <div class="form-group">
                                    <label for="name">Religion</label><br>
                                    <select id="religion" name="religion" class="form-control">
                                        <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --Select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
                                        <option value="1">Buddhisum</option>
                                        <option value="2">Cristian</option>
                                        <option value="3">Muslim</option>
                                        <option value="4">Hindu</option>
                                    </select>
                                </div>

                                <div class="form-group">

                                    <label for="email">Mother Tongue</label><br>
                                    <select id="mothertongue" name="mothertongue" class="form-control">
                                        <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --Select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
                                        <option value="1">Sinhala</option>
                                        <option value="2">Tamil</option>
                                        <option value="1">English</option>
                                        <option value="2">Others</option>
                                    </select>
                                </div>
                                <div class="form-group">

                                    <label for="pwd">Country Living In</label><br>
                                    <select id="livein" name="livein" class="form-control">
                                        <option value="">  &nbsp; &nbsp;&nbsp;&nbsp; --Select-- &nbsp; &nbsp;&nbsp;&nbsp; </option>
                                        <option value="1">Srilanka</option>
                                        <option value="2">India</option>
                                        <option value="3">Colombo</option>
                                        <option value="4">Jaffna</option>
                                    </select>
                                </div>
                                &nbsp;&nbsp;&nbsp;


                                <style>
                                    .button4 {
                                        color: #FFF;
                                        background-color: #7140bc;
                                        width:100px;
                                        height:40px;

                                    }

                                    .button4:hover {
                                        background-color: #dd3175;
                                        color: white;
                                    }

                                </style>



                                <button type="submit" class="button4">Search</button>
                            </form>
                        </div>
                    </div>
                </div>

                <!--search form end-->


                <!--cities list -->
                <style>
                    .well8 {


                        background-color: #f8f8f8e6;
                        color: #000;
                        border-radius: 4px;
                        border: 4px solid white;


                    }

                </style>
                <div class="well8">
                    <div class="container" ng-controller="formController">
                        <div class="row">
                            <div class="col-md-4">

                                <h1><b>District</b></h1>
                                <div class="col-md-4 locations">

                                    <a href="" ng-click="loadBrides($event)">Colombo</a><br>
                                    <a href="" ng-click="loadBrides($event)">Jaffna</a><br>
                                    <a href="" ng-click="loadBrides($event)">Galle</a><br>
                                    <a href="" ng-click="loadBrides($event)">Ampara</a><br>
                                    <a href="" ng-click="loadBrides($event)">Matale</a><br>
                                    <a href="" ng-click="loadBrides($event)">Badulla</a><br>
                                    <a href="" ng-click="loadBrides($event)">Batticaloa</a><br>
                                    <a href="" ng-click="loadBrides($event)">Hambantota</a><br>
                                    <a href="" ng-click="loadBrides($event)">Kalutara</a><br>
                                    <a href="" ng-click="loadBrides($event)">Kegalle</a><br>
                                    <a href="" ng-click="loadBrides($event)">Trincomale</a>

                                </div>


                                <div class="col-md-4 locations" >

                                    <a href=""ng-click="loadBrides($event)">Killinochi</a><br>
                                    <a href=""ng-click="loadBrides($event)">Kurunagala</a><br>
                                    <a href=""ng-click="loadBrides($event)">Mannar</a><br>
                                    <a href=""ng-click="loadBrides($event)">Moneragala</a><br>
                                    <a href=""ng-click="loadBrides($event)">Mulaitivu</a><br>
                                    <a href=""ng-click="loadBrides($event)">Nuwara Eliya</a><br>
                                    <a href=""ng-click="loadBrides($event)">Polonnaruwa</a><br>
                                    <a href=""ng-click="loadBrides($event)">Puttalam</a><br>
                                    <a href=""ng-click="loadBrides($event)">Ratnapura</a><br>
                                    <a href=""ng-click="loadBrides($event)">Vavuniya</a><br>

                                    <a href="">Anuradhapura</a></li>
                                </div>
                            </div>



                            <div class="row">
                                <div class="col-md-7 locations">


                                    <h2><b>Featured Profiles in<font color="red"> {{selectedLoc}}</font> District</b></h2>
                                    <div class="col-md-6">


                                        <!--groom list -->
                                        <style>
                                            .button5{
                                                color: #FFF;
                                                background-color: #dd3175;
                                                width:100%;
                                                height:40px;

                                            }

                                            .button5:hover {
                                                background-color: #7140bc;
                                                color: white;
                                            }

                                        </style>



                                        <h4><b><button class="button5" >Groom</button></b></h4>


                                        <div class="col-md-6" ng-repeat="x in brideList.grooms track by $index">
                                            <img ng-src="<?php echo base_url() ?>images/profiles/grooms/p ({{x.id}}).jpg" class="img-circle" alt="{{x.name}}" width="100" height="100">
                                            <div class="caption">

                                                <p>{{x.name}}<br>{{x.age}}, {{x.country}}</p>
                                            </div>
                                        </div>



                                    </div>







                                    <!--brides list -->

                                    <div class="col-md-6">

                                        <h4><b> <button class="button5" >Brides</button></b></h4>

                                        <div class="col-md-6" ng-repeat="x in brideList.brides track by $index">
                                            <img ng-src="<?php echo base_url() ?>images/profiles/brides/p ({{x.id}}).jpg" class="img-circle" alt="{{x.name}}" width="100" height="100">
                                            <div class="caption">

                                                <p>{{x.name}}<br>{{x.age}}, {{x.country}}</p>
                                            </div>
                                        </div>

                                    </div>
                                </div>

                                <bR><bR>





                            </div>
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
                    <div class="well4">
                        <div class="container">
                            <h4><b>Browse Matrimoney profile by</b></h4>

                            <div class="wel">
                                <div class="row">
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
                    </div>
                </div></div>


            <br>
            <style>
                .well9 {


                    margin-bottom: 0px;
                    background-color: #fff;
                    color: #000;




                </style>
                <div class="well9">
                    <!--footer-->
                    <?php echo $footer ?>
                </div>


                <script>
                    //map code
                    var map;
                    function initMap() {
                    map = new google.maps.Map(document.getElementById('map'),
                    {
                    zoom:8,
                            center: new google.maps.LatLng(7.847174, 80.654391),
                            backgroundColor: 'hsla(0, 0%, 0%, 0)',
                            styles:[
                            { //hide all fills
                            elementType: 'geometry.fill',
                                    stylers: [
                                    { visibility: 'off' }
                                    ]
                            }, {
                            featureType: 'landscape.natural.landcover',
                                    elementType: 'geometry.fill',
                                    stylers: [
                                    { visibility: 'on' },
                                    ]
                            }
                            ]

                    });
                    // Create a <script> tag and set the USGS URL as the source.
                    var script = document.createElement('script');
                    // This example uses a local copy of the GeoJSON stored at
                    // http://earthquake.usgs.gov/earthquakes/feed/v1.0/summary/2.5_week.geojsonp
                    script.src = 'https://developers.google.com/maps/documentation/javascript/examples/json/earthquake_GeoJSONP.js';
                    document.getElementsByTagName('head')[0].appendChild(script);
                    }

                    // Loop through the results array and place a marker for each
                    // set of coordinates.
                    var image = 'marker.png';
                    window.eqfeed_callback = function (results) {
                    for (var i = 0; i < results.features.length; i++) {
                    var coords = results.features[i].geometry.coordinates;
                    var latLng = new google.maps.LatLng(coords[1], coords[0]);
                    var marker = new google.maps.Marker({
                    position: latLng,
                            map: map,
                            icon: image
                    });
                    }
                    }

                </script>
                <script async defer
                        src="https://maps.googleapis.com/maps/api/js?sensor=false&amp;language=en&region=UK&key=AIzaSyBH-6gXTaMmeqAhyVcdlkTbePb6nqSn0Kw&callback=initMap">
                </script>
                <script>
                    /*
                     var rotate = false;
                     function setbackground(){
                     window.setTimeout("setbackground()", 5000);
                     newImage = rotate ? 'url(pict1.jpg)' : 'url(pict2.jpg)';
                     rotate = !rotate;
                     document.getElementById('change').style.backgroundImage = newImage;
                     }
                     */
                </script>

            </body>
        </html>
