<div id="aboutme" class="tab-pane">
    <div>
        <?php print_script("var user_aboutme_data=$aboutme_data") ?>
    </div>
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
                    <input  type="text" class="form-control" ng-model="weight" name="weight" placeholder="weight">
                    <span class="input-group-addon">Kg</span>
                </div>
<!--                <p ng-show="formModels.weight.error.state" class="help-danger help ng-hide">{{formModels.weight.error.msg}}</p>-->
            </div>

        </div>
        <div class="form-group">
            <label class="col-md-3 control-label" for="notifymode">Height</label>
            <div class="col-md-9">
                <div class="input-group">
                    <input  type="email" class="form-control" ng-model="height"  name="height" placeholder="Height">
                    <span class="input-group-addon">cm</span>
                </div>
<!--                <p ng-show="(aboutme.height.$invalid && (aboutme.height.$touched))" class="help-danger help ng-hide">hmm</p>-->
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