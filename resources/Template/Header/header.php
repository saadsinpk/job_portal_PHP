<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admindek | Admin Template</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Favicon icon -->
    <link rel="icon" href="files/assets/images/favicon.ico" type="image/x-icon">
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:500,700" rel="stylesheet">
    <!-- Required Fremwork -->
    <link rel="stylesheet" type="text/css" href="files/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- waves.css -->
    <link rel="stylesheet" href="files/assets/pages/waves/css/waves.min.css" type="text/css" media="all">
    <!-- feather icon -->
    <link rel="stylesheet" type="text/css" href="files/assets/icon/feather/css/feather.css">
    <!-- font-awesome-n -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/font-awesome-n.min.css">
    <!-- Chartlist chart css -->
    <link rel="stylesheet" href="files/bower_components/chartist/css/chartist.css" type="text/css" media="all">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="files/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="files/assets/css/widget.css">
</head>
<body>
     <!-- [ Pre-loader ] start -->
     <!-- <div class="loader-bg">
        <div class="loader-bar"></div>
    </div> -->
    <!-- [ Pre-loader ] end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">
            <!-- [ Header ] start -->
            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">
                    <div class="navbar-logo">
                        <a href="index.html">
                            <img class="img-fluid" src="files/assets/images/logo.png" alt="Theme-Logo" />
                        </a>
                        <a class="mobile-menu" id="mobile-collapse" href="#!">
                            <i class="feather icon-menu icon-toggle-right"></i>
                        </a>
                        <a class="mobile-options waves-effect waves-light">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>
                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-prepend search-close">
										<i class="feather icon-x input-group-text"></i>
									</span>
                                        <input type="text" class="form-control" placeholder="Enter Keyword">
                                        <span class="input-group-append search-btn">
										<i class="feather icon-search input-group-text"></i>
									</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="javascript:toggleFullScreen()" class="waves-effect waves-light">
                                <i class="full-screen feather icon-maximize"></i>
                            </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-bell"></i>
                                        <span class="badge bg-c-red">5</span>
                                    </div>
                                    <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <h6>Notifications</h6>
                                            <label class="label label-danger">New</label>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">John Doe</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Joseph William</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="media">
                                                <img class="img-radius" src="files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="media-body">
                                                    <h5 class="notification-user">Sara Soudein</h5>
                                                    <p class="notification-msg">Lorem ipsum dolor sit amet, consectetuer elit.</p>
                                                    <span class="notification-time">30 minutes ago</span>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                            <li class="header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="displayChatbox dropdown-toggle" data-toggle="dropdown">
                                        <i class="feather icon-message-square"></i>
                                        <span class="badge bg-c-green">3</span>
                                    </div>
                                </div>
                            </li>
                            <li class="user-profile header-notification">

                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="files/assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                        <span>John Doe</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        <li>
                                            <a href="#!">
                                            <i class="feather icon-settings"></i> Settings

                                        </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                            <i class="feather icon-user"></i> Profile

                                        </a>
                                        </li>
                                        <li>
                                            <a href="email-inbox.html">
                                            <i class="feather icon-mail"></i> My Messages

                                        </a>
                                        </li>
                                        <li>
                                            <a href="auth-lock-screen.html">
                                            <i class="feather icon-lock"></i> Lock Screen

                                        </a>
                                        </li>
                                        <li>
                                            <a href="auth-sign-in-social.html">
                                            <i class="feather icon-log-out"></i> Logout

                                        </a>
                                        </li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <!-- [ chat user list ] start -->
            <div id="sidebar" class="users p-chat-user showChat">
                <div class="had-container">
                    <div class="p-fixed users-main">
                        <div class="user-box">
                            <div class="chat-search-box">
                                <a class="back_friendlist">
                                    <i class="feather icon-x"></i>
                                </a>
                                <div class="right-icon-control">
                                    <div class="input-group input-group-button">
                                        <input type="text" id="search-friends" name="footer-email" class="form-control" placeholder="Search Friend">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-search"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-friend-list">
                                <div class="media userlist-box waves-effect waves-light" data-id="1" data-status="online" data-username="Josephin Doe">
                                    <a class="media-left" href="#!">
                                                <img class="media-object img-radius img-radius" src="files/assets/images/avatar-3.jpg" alt="Generic placeholder image ">
                                                <div class="live-status bg-success"></div>
                                            </a>
                                    <div class="media-body">
                                        <div class="chat-header">Josephin Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="2" data-status="online" data-username="Lary Doe">
                                    <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="live-status bg-success"></div>
                                            </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Lary Doe</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="3" data-status="online" data-username="Alice">
                                    <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="files/assets/images/avatar-4.jpg" alt="Generic placeholder image">
                                                <div class="live-status bg-success"></div>
                                            </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alice</div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="4" data-status="offline" data-username="Alia">
                                    <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="files/assets/images/avatar-3.jpg" alt="Generic placeholder image">
                                                <div class="live-status bg-default"></div>
                                            </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Alia<small class="d-block text-muted">10 min ago</small></div>
                                    </div>
                                </div>
                                <div class="media userlist-box waves-effect waves-light" data-id="5" data-status="offline" data-username="Suzen">
                                    <a class="media-left" href="#!">
                                                <img class="media-object img-radius" src="files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                                <div class="live-status bg-default"></div>
                                            </a>
                                    <div class="media-body">
                                        <div class="f-13 chat-header">Suzen<small class="d-block text-muted">15 min ago</small></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ chat user list ] end -->

            <!-- [ chat message ] start -->
            <div class="showChat_inner">
                <div class="media chat-inner-header">
                    <a class="back_chatBox">
                                <i class="feather icon-x"></i> Josephin Doe
                            </a>
                </div>
                <div class="main-friend-chat">
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                                        <img class="media-object img-radius img-radius m-t-5" src="files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">I'm just looking around. Will you tell me something about yourself?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <div class="media-body chat-menu-reply">
                            <div class="">
                                <p class="chat-cont">Ohh! very nice</p>
                            </div>
                            <p class="chat-time">8:22 a.m.</p>
                        </div>
                    </div>
                    <div class="media chat-messages">
                        <a class="media-left photo-table" href="#!">
                                        <img class="media-object img-radius img-radius m-t-5" src="files/assets/images/avatar-2.jpg" alt="Generic placeholder image">
                                    </a>
                        <div class="media-body chat-menu-content">
                            <div class="">
                                <p class="chat-cont">can you come with me?</p>
                            </div>
                            <p class="chat-time">8:20 a.m.</p>
                        </div>
                    </div>
                </div>
                <div class="chat-reply-box">
                    <div class="right-icon-control">
                        <div class="input-group input-group-button">
                            <input type="text" class="form-control" placeholder="Write hear . . ">
                            <div class="input-group-append">
                                <button class="btn btn-primary waves-effect waves-light" type="button"><i class="feather icon-message-circle"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- [ chat message ] end -->


            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!-- [ navigation menu ] start -->
                    <nav class="pcoded-navbar">
                        <div class="nav-list">
                            <div class="pcoded-inner-navbar main-menu">
                                <div class="pcoded-navigation-label">Navigation</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu active pcoded-trigger">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
            								<span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                            <span class="pcoded-mtext">Dashboard</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="active">
                                                <a href="index.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Default</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/dashboard-crm.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">CRM</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/dashboard-analytics.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Analytics</span>
                                                    <span class="pcoded-badge label label-info ">NEW</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                            <span class="pcoded-micon"><i class="feather icon-sidebar"></i></span>
                                            <span class="pcoded-mtext">Page layouts</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Vertical</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="default/menu-static.html" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="default/menu-header-fixed.html" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Header Fixed</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="default/menu-compact.html" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Compact</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="default/menu-sidebar.html" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Sidebar Fixed</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" pcoded-hasmenu">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Horizontal</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="default/menu-horizontal-static.html" target="_blank" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Static Layout</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="default/menu-horizontal-fixed.html" target="_blank" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Fixed layout</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="default/menu-horizontal-icon.html" target="_blank" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Static With Icon</span>
                                                        </a>
                                                    </li>
                                                    <li class="">
                                                        <a href="default/menu-horizontal-icon-fixed.html" target="_blank" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Fixed With Icon</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="default/menu-bottom.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Bottom Menu</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="default/navbar-light.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-menu"></i>
        									</span>
                                            <span class="pcoded-mtext">Navigation</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-layers"></i>
        									</span>
                                            <span class="pcoded-mtext">Widget</span>
                                            <span class="pcoded-badge label label-danger">100+</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/widget-statistic.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Statistic</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/widget-data.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Data</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/widget-chart.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Chart Widget</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">UI Element</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-box"></i>
        									</span>
                                            <span class="pcoded-mtext">Basic</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/alert.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Alert</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/breadcrumb.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Breadcrumbs</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/button.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Button</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/box-shadow.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Box-Shadow</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/accordion.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Accordion</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/generic-class.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Generic Class</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/tabs.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Tabs</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/color.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Color</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/label-badge.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Label Badge</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/progress-bar.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Progress Bar</span>
                                                </a>
                                            </li>

                                            <li class=" ">
                                                <a href="default/list.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">List</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/tooltip.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Tooltip And Popover</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/typography.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Typography</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/other.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Other</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-gitlab"></i>
        									</span>
                                            <span class="pcoded-mtext">Advance</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="default/draggable.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Draggable</span>
                                                </a>
                                            </li>


                                            </li>
                                            <li class=" ">
                                                <a href="default/modal.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Modal</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/notification.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Notifications</span>
                                                </a>
                                            </li>

                                            <li class=" ">
                                                <a href="default/rating.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Rating</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/range-slider.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Range Slider</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/slider.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Slider</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/syntax-highlighter.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Syntax Highlighter</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/tour.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Tour</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/treeview.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Tree View</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/nestable.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Nestable</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/toolbar.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Toolbar</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-package"></i>
        									</span>
                                            <span class="pcoded-mtext">Extra</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="default/session-timeout.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Session Timeout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/session-idle-timeout.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Session Idle Timeout</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/offline.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Offline</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="default/animation.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-aperture rotate-refresh"></i>
        									</span>
                                            <span class="pcoded-mtext">Animations</span>
                                        </a>
                                    </li>

                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-command"></i>
        									</span>
                                            <span class="pcoded-mtext">Icons</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="default/icon-font-awesome.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Font Awesome</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/icon-themify.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Themify</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/icon-simple-line.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Simple Line Icon</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Forms</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-clipboard"></i>
        									</span>
                                            <span class="pcoded-mtext">Form</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="default/form-elements-component.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Components</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/form-elements-add-on.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Add-On</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/form-elements-advance.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Advance</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/form-validation.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Validation</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="default/form-picker.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-edit-1"></i>
        									</span>
                                            <span class="pcoded-mtext">Form Picker</span>
                                            <span class="pcoded-badge label label-warning">NEW</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="default/form-select.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-feather"></i>
        									</span>
                                            <span class="pcoded-mtext">Form Select</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="default/form-masking.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-shield"></i>
        									</span>
                                            <span class="pcoded-mtext">Form Masking</span>
                                        </a>
                                    </li>
                                    <li class=" ">
                                        <a href="default/form-wizard.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-tv"></i>
        									</span>
                                            <span class="pcoded-mtext">Form Wizard</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Tables</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-credit-card"></i>
        									</span>
                                            <span class="pcoded-mtext">Bootstrap Table</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="default/bs-basic-table.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Basic Table</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/bs-table-sizing.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Sizing Table</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/bs-table-border.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Border Table</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/bs-table-styling.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Styling Table</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-inbox"></i>
        									</span>
                                            <span class="pcoded-mtext">Data Table</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="default/dt-basic.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Basic Initialization</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-advance.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Advance Initialization</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-styling.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Styling</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-api.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">API</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ajax.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Ajax</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-server-side.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Server Side</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-plugin.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Plug-In</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-data-sources.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Data Sources</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-server"></i>
        									</span>
                                            <span class="pcoded-mtext">DT Extensions</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class=" ">
                                                <a href="default/dt-ext-autofill.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">AutoFill</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Button</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class=" ">
                                                        <a href="default/dt-ext-basic-buttons.html" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Basic Button</span>
                                                        </a>
                                                    </li>
                                                    <li class=" ">
                                                        <a href="default/dt-ext-buttons-html-5-data-export.html" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Data Export</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-col-reorder.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Col Reorder</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-fixed-columns.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Fixed Columns</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-fixed-header.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Fixed Header</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-key-table.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Key Table</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-responsive.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Responsive</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-row-reorder.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Row Reorder</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-scroller.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Scroller</span>
                                                </a>
                                            </li>
                                            <li class=" ">
                                                <a href="default/dt-ext-select.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Select Table</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class=" ">
                                        <a href="default/foo-table.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-hash"></i>
        									</span>
                                            <span class="pcoded-mtext">FooTable</span>
                                        </a>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-airplay"></i>
        									</span>
                                            <span class="pcoded-mtext">Handson Table</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/handson-appearance.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Appearance</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-data-operation.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Data Operation</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-rows-cols.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Rows Columns</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-columns-only.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Columns Only</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-cell-features.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Cell Features</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-cell-types.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Cell Types</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-integrations.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Integrations</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-rows-only.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Rows Only</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/handson-utilities.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Utilities</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="default/editable-table.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-edit"></i>
        									</span>
                                            <span class="pcoded-mtext">Editable Table</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Chart And Maps</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-pie-chart"></i>
        									</span>
                                            <span class="pcoded-mtext">Charts</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/chart-google.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Google Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-chartjs.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">ChartJs</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-list.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">List Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-float.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Float Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-knob.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Knob chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-morris.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Morris Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-nvd3.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Nvd3 Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-peity.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Peity Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-radial.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Radial Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-rickshaw.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Rickshaw Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-sparkline.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Sparkline Chart</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/chart-c3.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">C3 Chart</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-map"></i>
        									</span>
                                            <span class="pcoded-mtext">Maps</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/map-google.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Google Maps</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/map-vector.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Vector Maps</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/map-api.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Google Map Search API</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/location.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Location</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Pages</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-unlock"></i>
        									</span>
                                            <span class="pcoded-mtext">Authentication</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/auth-sign-in-social.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Login</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/auth-sign-up-social.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Registration</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/auth-reset-password.html" target="_blank" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Forgot Password</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/auth-lock-screen.html" target="_blank" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Lock Screen</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-sliders"></i>
        									</span>
                                            <span class="pcoded-mtext">Maintenance</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/error.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Error</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/comming-soon.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Comming Soon</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/offline-ui.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Offline UI</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>


                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-mail"></i>
        									</span>
                                            <span class="pcoded-mtext">Email</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/email-compose.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Compose Email</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/email-inbox.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Inbox</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/email-read.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Read Mail</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">App</div>
                                <ul class="pcoded-item pcoded-left-item">

                                    <li class="">
                                        <a href="default/todo.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-bookmark"></i>
        									</span>
                                            <span class="pcoded-mtext">To-Do</span>
                                        </a>
                                        
                                    </li>


                                </ul>
                                <div class="pcoded-navigation-label">Extension</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-file-plus"></i>
        									</span>
                                            <span class="pcoded-mtext">Editor</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/ck-editor.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">CK-Editor</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/wysiwyg-editor.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">WYSIWYG Editor</span>
                                                </a>
                                            </li>

                                        </ul>
                                    </li>

                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-calendar"></i>
        									</span>
                                            <span class="pcoded-mtext">Event Calendar</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="default/event-full-calender.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Full Calendar</span>
                                                </a>
                                            </li>
                                            <li class="">
                                                <a href="default/event-clndr.html" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">CLNDER</span>
                                                    <span class="pcoded-badge label label-info">NEW</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="default/image-crop.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-scissors"></i>
        										<b>IC</b>
        									</span>
                                            <span class="pcoded-mtext">Image Cropper</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="default/file-upload.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-upload-cloud"></i>
        									</span>
                                            <span class="pcoded-mtext">File Upload</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="default/change-loges.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-briefcase"></i>
        									</span>
                                            <span class="pcoded-mtext">Change Loges</span>
                                            <span class="pcoded-badge label label-warning">1.0</span>
                                        </a>
                                    </li>
                                </ul>
                                <div class="pcoded-navigation-label">Other</div>
                                <ul class="pcoded-item pcoded-left-item">
                                    <li class="pcoded-hasmenu ">
                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-list"></i>
        									</span>
                                            <span class="pcoded-mtext">Menu Levels</span>
                                        </a>
                                        <ul class="pcoded-submenu">
                                            <li class="">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Menu Level 2.1</span>
                                                </a>
                                            </li>
                                            <li class="pcoded-hasmenu ">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Menu Level 2.2</span>
                                                </a>
                                                <ul class="pcoded-submenu">
                                                    <li class="">
                                                        <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                            <span class="pcoded-mtext">Menu Level 3.1</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                            <li class="">
                                                <a href="javascript:void(0)" class="waves-effect waves-dark">
                                                    <span class="pcoded-mtext">Menu Level 2.3</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="">
                                        <a href="javascript:void(0)" class="disabled waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-power"></i>
        										<b>D</b>
        									</span>
                                            <span class="pcoded-mtext">Disabled Menu</span>
                                        </a>
                                    </li>
                                    <li class="">
                                        <a href="default/sample-page.html" class="waves-effect waves-dark">
        									<span class="pcoded-micon">
        										<i class="feather icon-watch"></i>
        									</span>
                                            <span class="pcoded-mtext">Sample Page</span>
                                        </a>
                                    </li>
                                </ul>
                                
                            </div>
                        </div>
                    </nav>
                    <!-- [ navigation menu ] end -->