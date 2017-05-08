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

        .icon-bar a ,.icon-bar button{
            display: block;
            text-align: center;
            padding: 16px;
            transition: all 0.3s ease;
            color: white;
            font-size: 36px;
            width: 100%;
            background-color: #ffdead00;
            outline: none;

        }

        .icon-bar a:hover {
            background-color: #f00f7e;
        }

        .icon-bar .active {
            background-color: #4CAF50 !important;
        }
        .pill-btn{
            display: block;
            width: 100%;
            padding: 10px 15px;
            border-radius: 4px;
            background-color: rgba(233, 30, 99, 0.73);
            color: white;
            text-align: left;
            border: 1px solid rgba(233, 30, 99, 0);

        }
        .pill-btn:hover{
            background-color: rgba(128, 90, 195, 0.67) !important;
        }
    </style>


    <script src="<?php echo base_url() ?>js/search.js"></script>
    <script src="<?php echo base_url() ?>js/message.js"></script>


    <div class="row" ng-controller="formViewCtrl">
        <div class="col-md-3">
            <ul class="nav nav-pills nav-stacked">
                <li <?php
                if (isset($active) && $active == "search") {
                    echo 'class="active"';
                }
                ?> ><button ng-click="loadForm('')"  class="pill-btn">Search</button></li>
                <li <?php
                if (isset($active) && $active == "advance_search") {
                    echo 'class="active"';
                }
                ?> ><button ng-click="loadForm('advanced')" class="pill-btn">Advanced Search</button></li>
                <li <?php
                if (isset($active) && $active == "quick_search") {
                    echo 'class="active"';
                }
                ?> ><button ng-click="loadForm('quick')" class="pill-btn">Quick Search</button></li>
                <li <?php
                if (isset($active) && $active == "short_list") {
                    echo 'class="active"';
                }
                ?> ><a ng-click="loadShortlist()" data-toggle="pill">Short List</a></li>
            </ul>
        </div>
        <div class="col-md-9">
            <div class="row">

                <div class="col-sm-12" ng-controller="formViewCtrl">

                    <div class="">
                        <button  class="btn btn-info" type="button" data-toggle="collapse" data-target="#search_panel"><span class="glyphicon glyphicon-search"></span> Search</button>
                    </div>
                    <div id="search_panel">
                        <div id="pre_formview">
                            <?php
                            if (isset($search_form)) {
                                echo $search_form;
                            }
                            ?>
                        </div>
                        <ng-include class="anim-fade" id="post_formview" src="templateUrl()"></ng-include>
                    </div>
                </div>

            </div>
            <div class="col-sm-12 result-pane" ng-controller="mailCTRL">
                <!-- Modal -->
                <div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="myModal" class="modal fade" style="display: none;">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header">
                                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                                <h4 class="modal-title">Compose</h4>
                            </div>
                            <div class="modal-body">
                                <form role="form" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">To</label>
                                        <div class="col-lg-10">
                                            <input type="text" placeholder="" id="inputEmail1" class="form-control" ng-model="message.to">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-2 control-label">Message</label>
                                        <div class="col-lg-10">
                                            <textarea rows="10" cols="30" class="form-control" id="" name="" ng-model="message.content"></textarea>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-offset-2 col-lg-10">
                                            <span class="btn green fileinput-button">
                                                <i class="fa fa-plus fa fa-white"></i>
                                                <span>Attachment</span>
                                                <input type="file" name="files[]" multiple="">
                                            </span>
                                            <button class="btn btn-send" type="button" ng-model="compose_btn" ng-click="message.compose()">Send</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div><!-- /.modal-content -->
                    </div><!-- /.modal-dialog -->
                </div>
                <!-- /.modal -->
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

