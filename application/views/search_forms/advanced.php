<form id="advance-search" novalidate="true"  class="form-horizontal" method="post">


    <div class="form-group">
        <label class="col-md-2 control-label" for="">Age</label>


        <div class="col-md-2">
            <input class="form-control" type="text" name="heightfrom"/>
        </div>
        <div class="col-md-1">
            <label class="control-label">to</label>
        </div>
        <div class="col-md-2">
            <input class="form-control" type="text" name="heightto"/>

        </div>


    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="">Height</label>


        <div class="col-md-2">
            <select id="religion" name="religion"  ng-model="religion_list" class="form-control">
                <option value="">--Select--</option>
            </select>
        </div>
        <div class="col-md-1">
            <label class="control-label" for="">To</label>
        </div>
        <div class="col-md-2">
            <select id="religion" name="religion"  ng-model="religion_list" class="form-control">
                <option value="">--Select--</option>
            </select>
        </div>


    </div>
    <div class="form-group">
        <label class="col-md-1 control-label" for="">Marital Status</label>

        <div class="col-md-10">
            <label class="checkbox-inline">
                <input type="checkbox" value="">Option 1
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" value="">Option 2
            </label>
            <label class="checkbox-inline">
                <input type="checkbox" value="">Option 3
            </label>
        </div>


    </div>
    <div class="form-group">
        <label class="col-md-1 control-label" for="">Marital Status</label>

        <div class="col-md-10">
            <label class="radio-inline">
                <input type="radio" name="optradio">Option 1
            </label>
            <label class="radio-inline">
                <input type="radio" name="optradio">Option 2
            </label>
            <label class="radio-inline">
                <input type="radio" name="optradio">Option 3
            </label>
        </div>


    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="">Religion</label>


        <div class="col-md-2">
            <select id="religion" name="religion"  ng-model="religion_list" class="form-control">
                <option value="">--Select--</option>
            </select>
        </div>

    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="">Mother Tongue</label>


        <div class="col-md-2">
            <select id="religion" name="religion"  ng-model="religion_list" class="form-control">
                <option value="">--Select--</option>
            </select>
        </div>

    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="">Live In</label>


        <div class="col-md-2">
            <select id="religion" name="religion"  ng-model="religion_list" class="form-control">
                <option value="">--Select--</option>
            </select>
        </div>

    </div>
    <div class="form-group">
        <label class="col-md-2 control-label" for="">Education</label>


        <div class="col-md-2">
            <select id="religion" name="religion"  ng-model="religion_list" class="form-control">
                <option value="">--Select--</option>
            </select>
        </div>

    </div>
    <br>
    <button type="button" class="button4" ng-click="fetchSearch()">Search</button>
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
</form>