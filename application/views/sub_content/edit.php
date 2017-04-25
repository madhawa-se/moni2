
<style>
    .well8 {
        min-height: 20px;
        padding: 19px;
        margin-bottom: 20px;

        background-color:#fff;
        border: 1px solid @well-border;
        border-radius: @border-radius-base;
        .box-shadow(inset 0 1px 1px rgba(0,0,0,.05));
        blockquote {
            border-color: #ddd;
            border-color: rgba(0,0,0,.15);
        }
    }

</style>


<!-- form -->
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <div>
                <ul class="nav nav-pills nav-stacked">
                    <li class="active"><a  data-toggle="pill" href="#basic">Basic Info</a></li>
                    <li><a data-toggle="pill" href="#aboutme">About Me</a></li>
                    <li><a  data-toggle="pill" href="#home">Life Style</a></li>
                    <li><a  data-toggle="pill" href="#family">Family</a></li>
                    <li><a  data-toggle="pill" href="#">My Partner</a></li>
                    <li><a  data-toggle="pill" href="#photos">Photos</a></li>
                    <li><a  data-toggle="pill" href="#horoscope">Horoscope</a></li>
                    <li><a  data-toggle="pill" href="#">Alerts</a></li>
                    <li><a  data-toggle="pill" href="#delete">Delete</a></li>
                </ul>




            </div>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-12">
                    <style>
                        /*mad */
                        .radio-inline , .checkbox-inline {
                            margin-top: 0;
                            margin-left: 10px;
                        }
                    </style>
                    <div class="well8">

                        <div class="tab-content">
                            <button class="round-button"><span class="glyphicon glyphicon-pencil"></span></button>
                            <span> edit profile</span>
                            <style>
                                .tab-pane h4,  .tab-pane .h4 {
                                    font-size: 18px;
                                    border-top: 4px solid rgb(255, 162, 193);
                                    padding: 10px;
                                    color: black;
                                    /* border-radius: 5px; */
                                    background-color: rgba(202, 197, 158, 0.26);
                                }
                                .tab-pane{
                                    margin-bottom: 40px;
                                }
                            </style>
                            <div id="basic" class="tab-pane fade in active">
                                <form ng-cloak ng-validate="true" enctype="multipart/form-data" action="<?php echo site_url('profile/register'); ?>" novalidate="true"  class="form-horizontal" method="post" name="regform" ng-controller="formController" ng-submit="submitForm($event, regform.$valid)">

                                    <?php if (isset($update_errors)) echo $update_errors; ?>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" >Profile for</label>
                                        <div class="col-md-9">
                                            <select id="profile" name="profilefor" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">my self</option>
                                                <option value="2">friends</option>
                                                <option value="3">siblings</option>
                                                <option value="3">relatives</option>

                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="name" align="left">Name</label>
                                        <div class="col-md-9">
                                            <input id="name" ng-model="name" name="name" type="text" placeholder="Your Name" class="form-control input-md" required="">
                                            <p ng-show="regform.name.$invalid && (!regform.name.$pristine || submitted)" class="help-danger help">You name is required.</p>
                                        </div>

                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="notifymode">Gender</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control" ng-model="gender"  ng-options="c.id as c.name  for c in genders track by c.id" required >
                                                <option value="">--select--</option>
                                                <option value="1">male</option>
                                                <option value="2">female</option>
                                            </select>
                                            <p ng-show="regform.gender.$invalid && (!regform.gender.$pristine || submitted)" class="help-danger help">please select your gender</p>

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
                                            <select name="day" class = "form-control" ng-model="day">
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
                                                <option value="2001">2001</option><option value="2002">2002</option><option value="2003">2003</option><option value="2004">2004</option>
                                                <option value="2005">2005</option><option value="2006">2006</option><option value="2007">2007</option><option value="2008">2008</option>
                                                <option value="2009">2009</option><option value="2010">2010</option><option value="2011">2011</option><option value="2012">2012</option>
                                                <option value="2013">2013</option>
                                            </select>
                                        </div>

                                    </div>





                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="threshold">Religion</label>
                                        <div class="col-md-9">
                                            <select id="religion" name="religion"  ng-model="religion_list" class="form-control" ng-options="c.id as c.name  for c in religionList track by c.id" required>
                                                <option value="">--select--</option>
                                            </select>
                                            <p ng-show="regform.religion.$invalid && (regform.religion.$touched || submitted)" class="help-danger help">select your religion</p>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="threshold">Mother Tongue</label>
                                        <div class="col-md-9">
                                            <select id="mothertongue" name="mothertongue" ng-model="lan_list" class="form-control" ng-options="c.id as c.name  for c in lanList track by c.id" required>
                                                <option value="">--select--</option>
                                            </select>
                                            <p ng-show="regform.mothertongue.$invalid && (regform.mothertongue.$touched || submitted)" class="help-danger help">select your language</p>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="textinput">Email</label>
                                        <div class="col-md-9">
                                            <input  name="email" ng-model="email" type="text" placeholder="your email address" class="form-control input-md" required/>
                                            <p ng-show="regform.email.$invalid && (!regform.email.$pristine || submitted)" class="help-danger help">You mail is required.</p>

                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="threshold">Living In</label>
                                        <div class="col-md-9">
                                            <select id="livein" name="livein" class="form-control" ng-model="country_list" ng-change="updateCountry(country_list)"
                                                    ng-options="c.id as c.name  for c in countryList track by c.id" required>

                                                <option data-country_code="00" value="">--select--</option>

                                                <!-- <option ng-repeat="country in countryList" data-country_code="{{country.code}}" value="{{country.id}}">{{country.name}}</option>-->

                                            </select>
                                            <p ng-show="regform.livein.$invalid && (regform.livein.$touched || submitted)" class="help-danger help">country is required.</p>
                                        </div>
                                    </div>



                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="textinput">Phone</label>
                                        <div class="col-md-3">
                                            <input id="isd" name="countrycode" ng-model="countrycode" type="text" placeholder="code" class="form-control input-md" required="" readonly="true" value="{{country_list}}">
                                        </div>


                                        <div class="col-md-6">
                                            <input id="fnumber" name="fnumber" ng-model="fnumber" type="number" placeholder="number" class="form-control input-md" required="">
                                        </div>
                                    </div>


                                    <div class="form-group" ng-controller="UploadController">
                                        <label class="col-md-5 control-label" >Profile Image</label>
                                        <div class="col-md-7">
                                            <div class="profile-img" >
                                                <img ng-src="{{imageSrc}}" class="img-responsive img-circle" style="max-width:100px" />
                                            </div>
                                        </div>
                                        <input type="file" name="profile_pic" value="upload" ng-file-select="onFileSelect($files)" ng-model="imageSrc"/>

                                    </div>


                                    <div class="span3">
                                        <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                    </div>


                                </form>
                            </div>

                            <div id="family" class="tab-pane fade">

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" >Family Value</label>
                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Orthodox
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Traditional
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Moderate
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Liberal
                                        </label>
                                    </div>
                                </div>


                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" >Family Type</label>
                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Joint family
                                        </label>
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Nuclear family
                                        </label>

                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="threshold">Family Status</label>
                                    <div class="col-md-9">
                                        <select id="family_status">
                                            <option value="">--select--</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="threshold">Ancestral / Family Origin</label>
                                    <div class="col-md-9">
                                        <select id="family_status">
                                            <option value="">--select--</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="threshold">Ethnicity</label>
                                    <div class="col-md-9">
                                        <select id="family_status">
                                            <option value="">--select--</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="textinput" align="left">Mother's Occupation</label>
                                    <div class="col-md-9">
                                        <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                    </div>

                                </div>
                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="textinput" align="left">Father's Occupation</label>
                                    <div class="col-md-9">
                                        <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                    </div>

                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="textinput" align="left">No. of Brothers</label>
                                    <div class="col-md-9">
                                        <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                    </div>

                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="textinput" align="left">Brothers Married</label>
                                    <div class="col-md-9">
                                        <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                    </div>

                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="textinput" align="left">No. of Sisters</label>
                                    <div class="col-md-9">
                                        <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                    </div>

                                </div>

                                <div class="form-group clearfix">
                                    <label class="col-md-3 control-label" for="textinput" align="left">Sisters Married</label>
                                    <div class="col-md-9">
                                        <input id="name" ng-model="name" name="name" type="text" placeholder="your name" class="form-control input-md" required="">
                                    </div>

                                </div>
                                <div class="span3">
                                    <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                </div>
                            </div>
                            <div id="photos" class="tab-pane fade">
                                <p>Did you know that profiles with photos get 20 times more response?
                                    Add upto 10 photos and see the difference.</p>
                                <div>
                                    <img style="max-width: 100px" src="https://assets.materialup.com/uploads/9b911507-494a-4534-bdfb-81bb68bf6495/512x512.png" class="img-responsive"/>
                                </div>
                                <button >Upload Images</button>
                                <br>
                                <small>
                                    Note that you can add up to 10 photos to your profile. As a free member, you can view only 1 photo posted by members. To view all the photographs the members have posted, you must become a premium member. Click here to PAY NOW.
                                </small>
                                <div class="span3">
                                    <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                </div>
                            </div>
                            <div id="horoscope" class="tab-pane fade" ng-controller="formController">

                                <div>
                                    <img style="max-width: 100px" src="https://assets.materialup.com/uploads/9b911507-494a-4534-bdfb-81bb68bf6495/512x512.png" class="img-responsive"/>
                                </div>
                                <button >Upload Horoscope</button>
                                <br>
                                <div class="span3">
                                    <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                </div>
                            </div>

                            <div id="delete" class="tab-pane fade">
                                <p>Hide your profile</p>
                                <p>
                                    Want to take a short break from your life partner search? You can still use all of the site's features, but other members will not be able to see you.
                                    Yes, I want to hide my profile </p>
                                <div class="form-group clearfix">
                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Yes, I want to hide my profile
                                        </label>

                                    </div>
                                </div>

                                <p>Permanently delete your profile</p>
                                <p>
                                    This action is permanent. Profile once deleted cannot be restored.
                                    Yes, I want to delete my profile
                                </p>

                                <div class="form-group clearfix">
                                    <div class="col-md-9">
                                        <label class="radio-inline">
                                            <input type="radio" name="optradio">Yes, I want to delete my profile
                                        </label>

                                    </div>
                                </div>
                                <div class="span3">
                                    <input name="update" type="submit" value="Update" class="button2" ng-click="submitted = true">
                                </div>

                            </div>

                            <div id="aboutme" class="tab-pane fade" ng-controller="formController">
                                <form id="aboutme" name="aboutme">
                                    <h4>About me</h4>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="notifymode">Marital Status</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">unmarried</option>
                                                <option value="2">female</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="notifymode">Weight</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input  type="text" class="form-control" ng-model="formModels.weight.value" name="weight" placeholder="weight">
                                                <span class="input-group-addon">Kg</span>
                                            </div>
                                            <p ng-show="formModels.weight.error.state" class="help-danger help ng-hide">{{formModels.weight.error.msg}}</p>
                                        </div>

                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-3 control-label" for="notifymode">Height</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <input  type="email" class="form-control" ng-model="formModels.height.value"  name="height" placeholder="Height">
                                                <span class="input-group-addon">cm</span>
                                            </div>
                                            <p ng-show="(aboutme.height.$invalid && (aboutme.height.$touched))" class="help-danger help ng-hide">hmm</p>
                                        </div>

                                    </div>


                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" >Body Type</label>
                                        <div class="col-md-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Slim
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Athletic
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Average
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Heavy
                                            </label>
                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" >Complexion</label>
                                        <div class="col-md-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Very Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Fair
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Wheatish brown
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Dark
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" >Physical Status</label>
                                        <div class="col-md-9">
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">Normal
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="optradio">NormalPhysically challenged
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Mother Tongue</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">Sinhala</option>
                                                <option value="2">English</option>
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Spoken Languages</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">Sinhala</option>
                                                <option value="2">English</option>
                                            </select>

                                        </div>
                                    </div>
                                    <br><br>
                                    <h4>
                                        current background
                                    </h4>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">religion</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">Buddhism</option>
                                                <option value="2">Muslim</option>
                                                <option value="3">cathalic</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Education Level</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="0">--- Select ---</option><option value="1">High School</option><option value="2">Trade School</option><option value="3">Diploma</option><option value="4" selected="">Bachelors</option><option value="5">Masters</option><option value="6">Doctorate</option>		
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Field of Education</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="0">--- Select ---</option><option value="1" selected="">Arts</option><option value="2">Accountancy</option><option value="3">Architecture</option><option value="4">Business Administration</option><option value="5">Business Management</option><option value="6">Civil</option><option value="7">Commerce</option><option value="8">Computer Science (hardware)</option><option value="9">Computer Science (software)</option><option value="10">Economics</option><option value="11">Education</option><option value="12">Engineering</option><option value="13">Information Technology</option><option value="14">Journalism</option><option value="15">Law</option><option value="16">Library Science</option><option value="17">Mathematics</option><option value="18">Medicine</option><option value="19">Mechanical</option><option value="20">Music</option><option value="21">Nursing/Health Science</option><option value="22">Pharmacy</option><option value="23">Public Administration</option><option value="24">Science</option><option value="9997">Others</option>	
                                            </select>

                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Occupation Level</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">Buddhism</option>
                                                <option value="2">Muslim</option>
                                                <option value="3">cathalic</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Annual income</label>
                                        <div class="col-md-9">
                                            <div class="input-group">
                                                <span class="input-group-addon">LKR</span>
                                                <input type="number" class="form-control" aria-label="Amount (to the nearest dollar)">
                                                <span class="input-group-addon">.00</span>
                                            </div>

                                        </div>
                                    </div>

                                    <br><br>
                                    <h4>
                                        Location
                                    </h4>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Place Of Birth</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="">--select--</option>
                                                <option value="1">Buddhism</option>
                                                <option value="2">Muslim</option>
                                                <option value="3">cathalic</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Country Living in</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="0">--- Select ---</option>
                                                <option value="98">India</option>
                                                <option value="222">United States of America</option>
                                                <option value="195" selected="">Sri Lanka</option>
                                                <option value="162">Pakistan</option>
                                                <option value="220">United Arab Emirates</option>
                                                <option value="129">Malaysia</option>
                                                <option value="221">United Kingdom</option>
                                                <option value="13">Australia</option>
                                                <option value="185">Saudi Arabia</option>
                                                <option value="39">Canada</option>
                                                <option value="189">Singapore</option>
                                                <option value="114">Kuwait</option>
                                                <option value="">-------------------------</option>
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">District</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="0">- Select - </option><option value="201">Ampara</option><option value="202">Anuradhapura</option><option value="203">Badulla</option><option value="204">Batticaloa</option><option value="205" selected="">Colombo</option><option value="206">Galle</option><option value="207">Gampaha</option><option value="208">Hambantota</option><option value="209">Jaffna</option><option value="210">Kalutara</option><option value="211">Kandy</option><option value="212">Kegalle</option><option value="213">Kilinochchi</option><option value="214">Kurunegala</option><option value="215">Mannar</option><option value="216">Matale</option><option value="217">Matara</option><option value="218">Monaragala</option><option value="219">Mullaitivu</option><option value="220">Nuwara Eliya</option><option value="221">Polonnaruwa</option><option value="222">Puttalam</option><option value="223">Ratnapura</option><option value="224">Trincomalee</option><option value="225">Vavuniya</option>	
                                            </select>

                                        </div>
                                    </div>

                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Residing City</label>
                                        <div class="col-md-9">
                                            <input id="msg" type="number" class="form-control" name="msg" placeholder="City">
                                        </div>
                                    </div>
                                    <div class="form-group clearfix">
                                        <label class="col-md-3 control-label" for="notifymode">Citizenship</label>
                                        <div class="col-md-9">
                                            <select id="gender" name="gender" class="form-control">
                                                <option value="0">- Select - </option><option value="1" selected="">Citizen</option><option value="2">Permanent resident</option><option value="3">Work permit</option><option value="4">Student visa</option><option value="5">Temporary visa</option><option value="6">Non-Resident</option>		
                                            </select>

                                        </div>
                                    </div>
                                    <div class="span3">
                                        <input name="update" ng-model="update" type="button" value="Update" class="button2" ng-click="updateProfile(2)">
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
