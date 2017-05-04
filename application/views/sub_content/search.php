<link href="<?php echo base_url() ?>css/search.css" rel="stylesheet">
<link href="<?php echo base_url() ?>css/flag-icon.min.css" rel="stylesheet">
<div class="container">

    <style>



        .card {
            padding-top: 20px;
            margin: 10px 0 20px 0;
            background-color: rgba(214, 224, 226, 0.2);
            border-top-width: 0;
            border-bottom-width: 2px;
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            -webkit-box-shadow: none;
            -moz-box-shadow: none;
            box-shadow: none;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card .card-heading {
            padding: 0 20px;
            margin: 0;
        }

        .card .card-heading.simple {
            font-size: 20px;
            font-weight: 300;
            color: #777;
            border-bottom: 1px solid #e5e5e5;
        }

        .card .card-heading.image img {
            display: inline-block;
            width: 46px;
            height: 46px;
            margin-right: 15px;
            vertical-align: top;
            border: 0;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
        }

        .card .card-heading.image .card-heading-header {
            display: inline-block;
            vertical-align: top;
        }

        .card .card-heading.image .card-heading-header h3 {
            margin: 0;
            font-size: 14px;
            line-height: 16px;
            color: #262626;
        }

        .card .card-heading.image .card-heading-header span {
            font-size: 12px;
            color: #999999;
        }

        .card .card-body {
            padding: 0 20px;
            margin-top: 20px;
        }

        .card .card-media {
            padding: 0 20px;
            margin: 0 -14px;
        }

        .card .card-media img {
            max-width: 100%;
            max-height: 100%;
        }

        .card .card-actions {
            min-height: 30px;
            padding: 0 20px 20px 20px;
            margin: 20px 0 0 0;
        }

        .card .card-comments {
            padding: 20px;
            margin: 0;
            background-color: #f8f8f8;
        }

        .card .card-comments .comments-collapse-toggle {
            padding: 0;
            margin: 0 20px 12px 20px;
        }

        .card .card-comments .comments-collapse-toggle a,
        .card .card-comments .comments-collapse-toggle span {
            padding-right: 5px;
            overflow: hidden;
            font-size: 12px;
            color: #999;
            text-overflow: ellipsis;
            white-space: nowrap;
        }

        .card-comments .media-heading {
            font-size: 13px;
            font-weight: bold;
        }

        .card.people {
            position: relative;
            display: inline-block;
            width: 170px;
            height: 300px;
            padding-top: 0;
            margin-left: 20px;
            overflow: hidden;
            vertical-align: top;
        }

        .card.people:first-child {
            margin-left: 0;
        }

        .card.people .card-top {
            position: absolute;
            top: 0;
            left: 0;
            display: inline-block;
            width: 170px;
            height: 150px;
            background-color: #ffffff;
        }

        .card.people .card-top.green {
            background-color: #53a93f;
        }

        .card.people .card-top.blue {
            background-color: #427fed;
        }

        .card.people .card-info {
            position: absolute;
            top: 150px;
            display: inline-block;
            width: 100%;
            height: 101px;
            overflow: hidden;
            background: #ffffff;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card.people .card-info .title {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;
            font-size: 16px;
            font-weight: bold;
            line-height: 18px;
            color: #404040;
        }

        .card.people .card-info .desc {
            display: block;
            margin: 8px 14px 0 14px;
            overflow: hidden;
            font-size: 12px;
            line-height: 16px;
            color: #737373;
            text-overflow: ellipsis;
        }

        .card.people .card-bottom {
            position: absolute;
            bottom: 0;
            left: 0;
            display: inline-block;
            width: 100%;
            padding: 10px 20px;
            line-height: 29px;
            text-align: center;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .card.hovercard {
            position: relative;
            padding-top: 0;
            overflow: hidden;
            text-align: center;
            background-color: rgba(214, 224, 226, 0.2);
        }

        .card.hovercard .cardheader {
            background: url("http://lorempixel.com/400/200/");
            background-size: cover;
            height: 135px;
        }

        .card.hovercard .avatar {
            position: relative;
            top: -50px;
            margin-bottom: -50px;
        }

        .card.hovercard .avatar img {
            width: 100px;
            height: 100px;
            max-width: 100px;
            max-height: 100px;
            -webkit-border-radius: 50%;
            -moz-border-radius: 50%;
            border-radius: 50%;
            border: 5px solid rgba(255,255,255,0.5);
        }

        .card.hovercard .info {
            padding: 4px 8px 10px;
        }

        .card.hovercard .info .title {
            margin-bottom: 4px;
            font-size: 24px;
            line-height: 1;
            color: #262626;
            vertical-align: middle;
        }

        .card.hovercard .info .desc {
            overflow: hidden;
            font-size: 12px;
            line-height: 20px;
            color: #737373;
            text-overflow: ellipsis;
        }

        .card.hovercard .bottom {
            padding: 0 20px;
            margin-bottom: 17px;
        }

        .btn{ 
            border-radius: 50%; 
            width:32px; 
            height:32px;
            line-height:18px; 
            display: inline-block;
        }

        .color-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: black;
            opacity: 0.0;
        }
        .card.hovercard .cardheader {
            text-align: left;
        }
        .hovercard:hover > .color-overlay{
            opacity: 0.8;
        }
        .color-overlay .list-group-item{
            background-color:none;
            color: #7eff06;
            font-weight: bold;
            font-family: roboto;
        }
        .cardheader .flag-icon{
            width: 60px;
            height: 30px;
        }


        .icon-bar {
            width: 90px;
            background-color: #555;
            height: 100%;
        }

        .icon-bar a {
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
        }

        .icon-bar a:hover {
            background-color: #f00f7e;
        }

        .icon-bar .active {
            background-color: #4CAF50 !important;
        }
    </style>


    <script src="<?php echo base_url() ?>js/search.js"></script>

    <div class="row" ng-controller="searchCTRL">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li <?php
                if (isset($active) && $active == "search") {
                    echo 'class="active"';
                }
                ?> ><a href="#tab_a" data-toggle="pill">Search</a></li>
                <li <?php
                if (isset($active) && $active == "advance_search") {
                    echo 'class="active"';
                }
                ?> ><a href="#tab_b" data-toggle="pill">Advanced Search</a></li>
                <li <?php
                if (isset($active) && $active == "quick_search") {
                    echo 'class="active"';
                }
                ?> ><a href="#tab_c" data-toggle="pill">Quick Search</a></li>
                <li <?php
                if (isset($active) && $active == "short_list") {
                    echo 'class="active"';
                }
                ?> ><a ng-click="loadShortlist()" data-toggle="pill">Short List</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">
                <div class="col-sm-12"> 
                    <div class="col-sm-12">
                        <div class="container">
                            <form id="quick-search" class="form-inline ng-pristine ng-valid" role="form" method="post" action="http://localhost/newleaf/Search/quick_search_submit">
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
                                    <select name="from" class="form-control">
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                    </select>

                                </div>

                                <div class="form-group">
                                    <label for="name"></label><br>to

                                    <select name="to" class="form-control" width="100px">
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                        <option value="32">32</option>
                                        <option value="33">33</option>
                                        <option value="34">34</option>
                                        <option value="35">35</option>
                                        <option value="36">36</option>
                                        <option value="37">37</option>
                                        <option value="38">38</option>
                                        <option value="39">39</option>
                                        <option value="40">40</option>
                                        <option value="41">41</option>
                                        <option value="42">42</option>
                                        <option value="43">43</option>
                                        <option value="44">44</option>
                                        <option value="45">45</option>
                                        <option value="46">46</option>
                                        <option value="47">47</option>
                                        <option value="48">48</option>
                                        <option value="49">49</option>
                                        <option value="50">50</option>
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


                                <br>
                                <button type="submit" class="button4">Search</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 result-pane">
                    <div class="pre-result">
                        <?php
                        if (isset($preset) && isset($search_result)) {
                            echo $search_result;
                        }
                        ?>
                    </div>
                    <div ng-bind-html="quick_result"></div>
                </div>
                <div class="centered">
                    <p>10 of 20</p>
                    <button ng-model="sds" class="button-x button3" ng-click="loadQuick()">Load More</button>
                </div>


            </div>

        </div>

    </div>


</div>
</div>



</style>