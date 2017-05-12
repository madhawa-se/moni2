<form id="quick-search" class="form-inline ng-pristine ng-valid" role="form" method="post" action="<?php echo site_url('Search/quick_search_submit') ?>">
    <div class="form-group">
        <label for="name">Looking For</label><br>
        <div class="radio radio-info radio-inline">
            <input size="12" id="inlineRadio1" value="1" name="gender" checked="" type="radio">
            <label for="inlineRadio1"> Groom </label>
        </div>
        <div class="radio radio-inline">
            <input id="inlineRadio2" value="2" name="gender" type="radio">
            <label for="inlineRadio2"> Bride </label>
        </div>
    </div>&nbsp;&nbsp;&nbsp;&nbsp;

    <div class="form-group">
        <label for="name">Age</label><br>
        <rzslider rz-slider-model="priceSlider"></rzslider>

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
        <select id="country" name="country" class="form-control">
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


    <br>
    <button type="submit" class="button4">Search</button>
</form>

