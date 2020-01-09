<!DOCTYPE html>
<html lang="en" dir="rtl">

<head>
<meta charset="utf-8" />
<title> لوحة التحكم  @yield('title')</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <meta content="Preview page of Metronic Admin RTL Theme #1 for blank page layout" name="description" />
    <meta content="" name="author" />
    <!-- BEGIN GLOBAL MANDATORY STYLES -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet" type="text/css" />
    <link href="/Metronic/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="/Metronic/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet" type="text/css" />
    <link href="/Metronic/assets/global/plugins/bootstrap/css/bootstrap-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="/Metronic/assets/global/plugins/bootstrap-switch/css/bootstrap-switch-rtl.min.css" rel="stylesheet" type="text/css" />
    <!-- END GLOBAL MANDATORY STYLES -->
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="/Metronic/assets/global/css/components-rtl.min.css" rel="stylesheet" id="style_components" type="text/css" />
    <link href="/Metronic/assets/global/css/plugins-rtl.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME GLOBAL STYLES -->
    <!-- BEGIN THEME LAYOUT STYLES -->
    <link href="/Metronic/assets/layouts/layout/css/layout-rtl.min.css" rel="stylesheet" type="text/css" />
    <link href="/Metronic/assets/layouts/layout/css/themes/darkblue-rtl.min.css" rel="stylesheet" type="text/css" id="style_color" />
    <link href="/Metronic/assets/layouts/layout/css/custom-rtl.min.css" rel="stylesheet" type="text/css" />
    <!-- END THEME LAYOUT STYLES -->
    <link rel="shortcut icon" href="favicon.ico" />

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


    @yield('css')
</head>
<!-- END HEAD -->

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
<div class="page-wrapper">
    <!-- BEGIN HEADER -->
    <div class="page-header navbar navbar-fixed-top">
        <!-- BEGIN HEADER INNER -->
        <div class="page-header-inner ">
            <!-- BEGIN LOGO -->
            <div class="page-logo">
                <a href="index.html">
                    <img src="/Metronic/assets/layouts/layout/img/logo.png" alt="logo" class="logo-default" /> </a>
                <div class="menu-toggler sidebar-toggler">
                    <span></span>
                </div>
            </div>

            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse" data-target=".navbar-collapse">
                <span></span>
            </a>

            <div class="top-menu">
                <ul class="nav navbar-nav pull-right">
                    <li class="dropdown dropdown-extended dropdown-inbox" id="header_inbox_bar">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="icon-envelope-open"></i>
                            <span class="badge badge-default"> 4 </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="external">
                                <h3>You have
                                    <span class="bold">7 New</span> Messages</h3>
                                <a href="app_inbox.html">view all</a>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list scroller" style="height: 275px;" data-handle-color="#637283">
                                    <li>
                                        <a href="#">
                                                    <span class="photo">
                                                        <img src="/Metronic/assets/layouts/layout3/img/avatar2.jpg" class="img-circle" alt=""> </span>
                                            <span class="subject">
                                                        <span class="from"> Lisa Wong </span>
                                                        <span class="time">Just Now </span>
                                                    </span>
                                            <span class="message"> Vivamus sed auctor nibh congue nibh. auctor nibh auctor nibh... </span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!-- END INBOX DROPDOWN -->
                    <!-- BEGIN TODO DROPDOWN -->
                    <!-- DOC: Apply "dropdown-dark" class after below "dropdown-extended" to change the dropdown styte -->
                    <li class="dropdown dropdown-user">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img alt="" class="img-circle" src="{{Auth::user() ->photo ? Auth::user()->photo->file:'http://placehold.it/400x400'}}" />

                            <span class="username username-hide-on-mobile">{{Auth::user()->name}}</span>

                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-default">
                            <li>
                                <a href="">
                                    <i class="icon-user"></i> My Profile </a>
                            </li>

                            <li>
                                <a href="app_inbox.html">
                                    <i class="icon-envelope-open"></i> My Inbox
                                    <span class="badge badge-danger"> 3 </span>
                                </a>
                            </li>

                            <li>
                                <a href="{{ url('/logout') }}">
                                    <i class="icon-key"></i> Log Out </a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown dropdown-quick-sidebar-toggler">
                        <a href="javascript:;" class="dropdown-toggle">
                            <i class="icon-logout"></i>
                        </a>
                    </li>
                    <!-- END QUICK SIDEBAR TOGGLER -->
                </ul>
            </div>
        </div>
        <!-- END HEADER INNER -->
    </div>

    <div class="clearfix"> </div>

    <div class="page-container">
        <!-- BEGIN SIDEBAR -->
        <div class="page-sidebar-wrapper">
            <div class="page-sidebar navbar-collapse collapse">
                <ul class="page-sidebar-menu  page-header-fixed " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200" style="padding-top: 20px">
                    <li class="sidebar-toggler-wrapper hide">
                        <div class="sidebar-toggler">
                            <span></span>
                        </div>
                    </li>
                    <li class="sidebar-search-wrapper">
                        <form class="sidebar-search  sidebar-search-bordered" action="" >


                            <div class="input-group">
                                <input type="text" class="form-control" name="search" id="search" placeholder="ابحث هنا...">
                                <span class="input-group-btn">
                                            <a href="" class="btn submit">
                                                <i class="icon-magnifier" ></i>
                                            </a>

                                    <br>
                                        </span>
                            </div>
                        </form>

                        <!-- END RESPONSIVE QUICK SEARCH FORM -->
                    </li>
                    <li class="nav-item start active open ">
                        <a href="/admin" class="nav-link">
                            <i class="icon-home"></i>
                            <span class="title">لوحة التحكم</span>
                        </a>
                    </li>

                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-layers"></i>
                            <span class="title">المنشورات</span>
                            <span class="selected"></span>
                            <span class="arrow "></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  active open">
                                <a href="{{route('admin.posts.create')}}" class="nav-link ">

                                    <i class="fa fa-comments"></i>
                                    <span class="title">إضافة منشور</span>
                                    <span class="selected"></span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{route('admin.posts.index')}}" class="nav-link ">
                                    <i class="fa fa-comment-alt"></i>
                                    <span class="title">جميع المنشورات</span>
                                </a>

                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="icon-user"></i>
                            <span class="title">التصنيفات</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="admin/order" class="nav-link ">
                                    <i class="icon-list"></i>
                                    <span class="title">عرض جميع التصنيفات</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item  ">
                        <a href="javascript:;" class="nav-link nav-toggle">
                            <i class="fa fa-users"></i>
                            <span class="title">المستخدمين</span>
                            <span class="arrow"></span>
                        </a>
                        <ul class="sub-menu">
                            <li class="nav-item  ">
                                <a href="{{route('admin.users.index')}}" class="nav-link ">
                                    <i class="fa fa-users"></i>
                                    <span class="title">جميع المستخدمين</span>
                                </a>
                            </li>
                            <li class="nav-item  ">
                                <a href="{{route('admin.users.create')}}" class="nav-link ">
                                    <i class="fa fa-user-plus"></i>
                                    <span class="title">انشاء مستخدم</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                </ul>
            </div>
            <!-- END SIDEBAR -->
        </div>

        <div class="page-content-wrapper">

            <div class="page-content">
                <div class="page-bar">

                </div>
                <!-- END PAGE BAR -->
                <!-- BEGIN PAGE TITLE-->
                <h1 class="page-title">@yield('page title')</h1>
            @yield('content')
            <!-- END PAGE TITLE-->
                <!-- END PAGE HEADER-->
            </div>
            <!-- END CONTENT BODY -->
        </div>
        <!-- END CONTENT -->
        <!-- BEGIN QUICK SIDEBAR -->
        <a href="javascript:;" class="page-quick-sidebar-toggler">
            <i class="icon-login"></i>
        </a>
        <div class="page-quick-sidebar-wrapper" data-close-on-body-click="false">
            <div class="page-quick-sidebar">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="javascript:;" data-target="#quick_sidebar_tab_1" data-toggle="tab"> Users
                            <span class="badge badge-danger">2</span>
                        </a>
                    </li>
                    <li>
                        <a href="javascript:;" data-target="#quick_sidebar_tab_2" data-toggle="tab"> Alerts
                            <span class="badge badge-success">7</span>
                        </a>
                    </li>
                    <li class="dropdown">
                        <a href="javascript:;" class="dropdown-toggle" data-toggle="dropdown"> More
                            <i class="fa fa-angle-down"></i>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-bell"></i> Alerts </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-info"></i> Notifications </a>
                            </li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-speech"></i> Activities </a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="javascript:;" data-target="#quick_sidebar_tab_3" data-toggle="tab">
                                    <i class="icon-settings"></i> Settings </a>
                            </li>
                        </ul>
                    </li>
                </ul>

            </div>
        </div>
        <!-- END QUICK SIDEBAR -->
    </div>

    <div class="page-footer">
        <div class="page-footer-inner"> {{date('y/m/d')}} &copy; جميع الحقوق محفوظة
        </div>
        <div class="scroll-to-top">
            <i class="icon-arrow-up"></i>
        </div>
    </div>
    <!-- END FOOTER -->
</div>

<!-- BEGIN QUICK NAV -->
<div class="quick-nav-overlay"></div>
<!-- END QUICK NAV -->
<!--[if lt IE 9]>
<script src="/Metronic/assets/global/plugins/respond.min.js"></script>
<script src="/Metronic/assets/global/plugins/excanvas.min.js"></script>
<script src="/Metronic/assets/global/plugins/ie8.fix.min.js"></script>
<![endif]-->
<!-- BEGIN CORE PLUGINS -->
<script src="/Metronic/assets/global/plugins/jquery.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/global/plugins/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/global/plugins/js.cookie.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/global/plugins/jquery.blockui.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!-- END CORE PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="/Metronic/assets/global/scripts/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN THEME LAYOUT SCRIPTS -->
<script src="/Metronic/assets/layouts/layout/scripts/layout.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/layouts/layout/scripts/demo.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/layouts/global/scripts/quick-sidebar.min.js" type="text/javascript"></script>
<script src="/Metronic/assets/layouts/global/scripts/quick-nav.min.js" type="text/javascript"></script>

<![endif]-->
<!-- BEGIN CORE PLUGINS -->

<!-- END THEME LAYOUT SCRIPTS -->
@yield('js')
</body>

 </html>




 }