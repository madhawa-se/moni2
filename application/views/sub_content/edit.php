
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
                    <li class="active"><a  data-toggle="pill" href="#/basic">Basic Info</a></li>
                    <!--<li><a data-toggle="pill" href="#/aboutme">About Me</a></li>-->
                    <li><a  href="#/home">Life Style</a></li>
                    <li><a  href="#/family">Family</a></li>
                    <li><a  href="#">My Partner</a></li>
                    <li><a  href="#/photos">Photos</a></li>
                    <li><a  href="#/horoscope">Horoscope</a></li>
                    <li><a  href="#">Alerts</a></li>
                    <li><a  href="#/hide">Delete</a></li>
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
                            
                            <div ng-view class="tab-pane fade in active"></div>
        
                        

                        </div>
                    </div>

                </div>
            </div>
        </div>


    </div>
