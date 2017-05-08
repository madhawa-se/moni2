<div id="basic" class="tab-pane">
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