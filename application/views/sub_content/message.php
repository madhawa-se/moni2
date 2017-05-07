<div class="container">
    <style>
        .unread{
            background-color: #f69abe80;
        }
        .mail-box {
            border-collapse: collapse;
            border-spacing: 0;
            display: table;
            table-layout: fixed;
            width: 100%;
        }
        .mail-box aside {
            display: table-cell;
            float: none;
            height: 100%;
            padding: 0;
            vertical-align: top;
        }
        .mail-box .sm-side {
            background: none repeat scroll 0 0 #e5e8ef;
            border-radius: 4px 0 0 4px;
            width: 25%;
        }
        .mail-box .lg-side {
            background: none repeat scroll 0 0 #fff;
            border-radius: 0 4px 4px 0;
            width: 75%;
        }
        .mail-box .sm-side .user-head {
            background: none repeat scroll 0 0 #00a8b3;
            border-radius: 4px 0 0;
            color: #fff;
            min-height: 80px;
            padding: 10px;
        }
        .user-head .inbox-avatar {
            float: left;
            width: 65px;
        }
        .user-head .inbox-avatar img {
            border-radius: 4px;
        }
        .user-head .user-name {
            display: inline-block;
            margin: 0 0 0 10px;
        }
        .user-head .user-name h5 {
            font-size: 14px;
            font-weight: 300;
            margin-bottom: 0;
            margin-top: 15px;
        }
        .user-head .user-name h5 a {
            color: #fff;
        }
        .user-head .user-name span a {
            color: #87e2e7;
            font-size: 12px;
        }
        a.mail-dropdown {
            background: none repeat scroll 0 0 #80d3d9;
            border-radius: 2px;
            color: #01a7b3;
            font-size: 10px;
            margin-top: 20px;
            padding: 3px 5px;
        }
        .inbox-body {
            padding: 20px;
        }
        .btn-compose {
            background: none repeat scroll 0 0 rgba(128, 90, 195, 0.67);
            color: #fff;
            padding: 12px 0;
            text-align: center;
            width: 100%;
            display: inline-block;
        }
        .btn-compose:hover {
            background: none repeat scroll 0 0 #f55c82;;
            color: #fff;
        }
        ul.inbox-nav {
            display: inline-block;
            margin: 0;
            padding: 0;
            width: 100%;
        }
        .inbox-divider {
            border-bottom: 1px solid #d5d8df;
        }
        ul.inbox-nav li {
            display: inline-block;
            line-height: 45px;
            width: 100%;
        }
        ul.inbox-nav li a {
            color: #6a6a6a;
            display: inline-block;
            line-height: 45px;
            padding: 0 20px;
            width: 100%;
        }
        ul.inbox-nav li a:hover, ul.inbox-nav li.active a, ul.inbox-nav li a:focus {
            background: none repeat scroll 0 0 #d5d7de;
            color: #6a6a6a;
        }
        ul.inbox-nav li a i {
            color: #6a6a6a;
            font-size: 16px;
            padding-right: 10px;
        }
        ul.inbox-nav li a span.label {
            margin-top: 13px;
        }
        ul.labels-info li h4 {
            color: #5c5c5e;
            font-size: 13px;
            padding-left: 15px;
            padding-right: 15px;
            padding-top: 5px;
            text-transform: uppercase;
        }
        ul.labels-info li {
            margin: 0;
        }
        ul.labels-info li a {
            border-radius: 0;
            color: #6a6a6a;
        }
        ul.labels-info li a:hover, ul.labels-info li a:focus {
            background: none repeat scroll 0 0 #d5d7de;
            color: #6a6a6a;
        }
        ul.labels-info li a i {
            padding-right: 10px;
        }
        .nav.nav-pills.nav-stacked.labels-info p {
            color: #9d9f9e;
            font-size: 11px;
            margin-bottom: 0;
            padding: 0 22px;
        }
        .inbox-head {
            background: none repeat scroll 0 0 #2895AD;
            border-radius: 0 4px 0 0;
            color: #fff;
            min-height: 80px;
            padding: 20px;
        }
        .inbox-head h3 {
            display: inline-block;
            font-weight: 300;
            margin: 0;
            padding-top: 6px;
        }
        .inbox-head .sr-input {
            border: medium none;
            border-radius: 4px 0 0 4px;
            box-shadow: none;
            color: #8a8a8a;
            float: left;
            height: 40px;
            padding: 0 10px;
        }
        .inbox-head .sr-btn {
            background: none repeat scroll 0 0 #F8B195;
            border: medium none;
            border-radius: 0 4px 4px 0;
            color: #fff;
            height: 40px;
            padding: 0 20px;
        }
        .table-inbox {
            border: 1px solid #d3d3d3;
            margin-bottom: 0;
        }
        .table-inbox tr td {
            padding: 12px !important;
        }
        .table-inbox tr td:hover {
            cursor: pointer;
        }
        .table-inbox tr td .fa-star.inbox-started, .table-inbox tr td .fa-star:hover {
            color: #f78a09;
        }
        .table-inbox tr td .fa-star {
            color: #d5d5d5;
        }
        .table-inbox tr.unread td {
            background: none repeat scroll 0 0 #f7f7f7;
            font-weight: 600;
        }
        ul.inbox-pagination {
            float: right;
        }
        ul.inbox-pagination li {
            float: left;
        }
        .mail-option {
            display: inline-block;
            margin-bottom: 10px;
            width: 100%;
        }
        .mail-option .chk-all, .mail-option .btn-group {
            margin-right: 5px;
        }
        .mail-option .chk-all, .mail-option .btn-group a.btn {
            background: none repeat scroll 0 0 #fcfcfc;
            border: 1px solid #e7e7e7;
            border-radius: 3px !important;
            color: #afafaf;
            display: inline-block;
            padding: 5px 10px;
        }
        .inbox-pagination a.np-btn {
            background: none repeat scroll 0 0 #fcfcfc;
            border: 1px solid #e7e7e7;
            border-radius: 3px !important;
            color: #afafaf;
            display: inline-block;
            padding: 5px 15px;
        }
        .mail-option .chk-all input[type="checkbox"] {
            margin-top: 0;
        }
        .mail-option .btn-group a.all {
            border: medium none;
            padding: 0;
        }
        .inbox-pagination a.np-btn {
            margin-left: 5px;
        }
        .inbox-pagination li span {
            display: inline-block;
            margin-right: 5px;
            margin-top: 7px;
        }
        .fileinput-button {
            background: none repeat scroll 0 0 #eeeeee;
            border: 1px solid #e6e6e6;
        }
        .inbox-body .modal .modal-body input, .inbox-body .modal .modal-body textarea {
            border: 1px solid #e6e6e6;
            box-shadow: none;
        }
        .btn-send, .btn-send:hover {
            background: none repeat scroll 0 0 #00a8b3;
            color: #fff;
        }
        .btn-send:hover {
            background: none repeat scroll 0 0 #009da7;
        }
        .modal-header h4.modal-title {
            font-family: "Open Sans",sans-serif;
            font-weight: 300;
        }
        .modal-body label {
            font-family: "Open Sans",sans-serif;
            font-weight: 400;
        }
        .heading-inbox h4 {
            border-bottom: 1px solid #ddd;
            color: #444;
            font-size: 18px;
            margin-top: 20px;
            padding-bottom: 10px;
        }
        .sender-info {
            margin-bottom: 20px;
        }
        .sender-info img {
            height: 30px;
            width: 30px;
        }
        .sender-dropdown {
            background: none repeat scroll 0 0 #eaeaea;
            color: #777;
            font-size: 10px;
            padding: 0 3px;
        }
        .view-mail a {
            color: #ff6c60;
        }
        .attachment-mail {
            margin-top: 30px;
        }
        .attachment-mail ul {
            display: inline-block;
            margin-bottom: 30px;
            width: 100%;
        }
        .attachment-mail ul li {
            float: left;
            margin-bottom: 10px;
            margin-right: 10px;
            width: 150px;
        }
        .attachment-mail ul li img {
            width: 100%;
        }
        .attachment-mail ul li span {
            float: right;
        }
        .attachment-mail .file-name {
            float: left;
        }
        .attachment-mail .links {
            display: inline-block;
            width: 100%;
        }

        .fileinput-button {
            float: left;
            margin-right: 4px;
            overflow: hidden;
            position: relative;
        }
        .fileinput-button input {
            cursor: pointer;
            direction: ltr;
            font-size: 23px;
            margin: 0;
            opacity: 0;
            position: absolute;
            right: 0;
            top: 0;
            transform: translate(-300px, 0px) scale(4);
        }
        .fileupload-buttonbar .btn, .fileupload-buttonbar .toggle {
            margin-bottom: 5px;
        }
        .files .progress {
            width: 200px;
        }
        .fileupload-processing .fileupload-loading {
            display: block;
        }
        * html .fileinput-button {
            line-height: 24px;
            margin: 1px -3px 0 0;
        }
        * + html .fileinput-button {
            margin: 1px 0 0;
            padding: 2px 15px;
        }
        @media (max-width: 767px) {
            .files .btn span {
                display: none;
            }
            .files .preview * {
                width: 40px;
            }
            .files .name * {
                display: inline-block;
                width: 80px;
                word-wrap: break-word;
            }
            .files .progress {
                width: 20px;
            }
            .files .delete {
                width: 60px;
            }
        }
        ul {
            list-style-type: none;
            padding: 0px;
            margin: 0px;
        }

    </style>
    <div class="mail-box" ng-controller="mailCTRL">
        <aside class="sm-side">

            <div class="inbox-body">
                <a href="#myModal" data-toggle="modal"  title="Compose"    class="btn btn-compose">
                    Compose
                </a>
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
                </div><!-- /.modal -->
            </div>
            <ul class="inbox-nav inbox-divider">
                <li class="active">
                    <a href="" ng-click="loadMessages('inbox')"><i class="fa fa-inbox"></i> Inbox <span class="label label-danger pull-right">2</span></a>

                </li>
                <li>
                    <a href=""  ng-click="loadMessages('outbox')"><i class="fa fa-envelope-o"></i> Sent Mail</a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-bookmark-o"></i> Important</a>
                </li>
                <li>
                    <a href="#"><i class=" fa fa-external-link"></i> Drafts <span class="label label-info pull-right">30</span></a>
                </li>
                <li>
                    <a href="#"><i class=" fa fa-trash-o"></i> Trash</a>
                </li>
            </ul>


        </aside>
        <aside class="lg-side">
            <div class="inbox-head">
                <h3>Inbox</h3>
                <form action="#" class="pull-right position">
                    <div class="input-append">
                        <input type="text" class="sr-input" placeholder="Search Mail">
                        <button class="btn sr-btn" type="button"><i class="fa fa-search"></i></button>
                    </div>
                </form>
            </div>
            <div class="inbox-body">
                <div class="mail-option">
                    <div class="chk-all">
                        <input type="checkbox" class="mail-checkbox mail-group-checkbox">
                        <div class="btn-group">
                            <a data-toggle="dropdown" href="#" class="btn mini all" aria-expanded="false">
                                All
                                <i class="fa fa-angle-down "></i>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="#"> None</a></li>
                                <li><a href="#"> Read</a></li>
                                <li><a href="#"> Unread</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="btn-group">
                        <a data-original-title="Refresh" data-placement="top" data-toggle="dropdown" href="#" class="btn mini tooltips">
                            <i class=" fa fa-refresh"></i>
                        </a>
                    </div>
                    <div class="btn-group hidden-phone">
                        <a data-toggle="dropdown" href="#" class="btn mini blue" aria-expanded="false">
                            More
                            <i class="fa fa-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        </ul>
                    </div>
                    <div class="btn-group">
                        <a data-toggle="dropdown" href="#" class="btn mini blue">
                            Move to
                            <i class="fa fa-angle-down "></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li><a href="#"><i class="fa fa-pencil"></i> Mark as Read</a></li>
                            <li><a href="#"><i class="fa fa-ban"></i> Spam</a></li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="fa fa-trash-o"></i> Delete</a></li>
                        </ul>
                    </div>

                    <ul class="unstyled inbox-pagination">
                        <li><span>1-50 of 234</span></li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-left  pagination-left"></i></a>
                        </li>
                        <li>
                            <a class="np-btn" href="#"><i class="fa fa-angle-right pagination-right"></i></a>
                        </li>
                    </ul>
                </div>
                <table class="table table-inbox table-hover">
                    <tbody>
                        <tr class="unread" ng-repeat="email in message.emails">
                            <td class="inbox-small-cells">
                                <input type="checkbox" class="mail-checkbox" ng-model="message.emails[email]">
                            </td>
                            <td class="inbox-small-cells"><i class="fa fa-star"></i></td>
                            <td class="view-message dont-show"><p>{{email.msg}}</p></td>
                            <td class="view-message">Request from madhawa</td>
                            <td class="view-message inbox-small-cells"></td>
                            <td class="view-message text-right">{{email.date | date :  "MMM d"}}</td>
                        </tr>
                      

                    </tbody>
                </table>
            </div>
        </aside>
    </div>
</div>