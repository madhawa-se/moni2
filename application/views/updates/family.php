<div id="family" class="tab-pane">

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