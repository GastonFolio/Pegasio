<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Blank page | AppStart - Admin Template</title>
    <!-- Mobile specific metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <!-- Force IE9 to render in normal mode -->
    <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->

    <!-- Import google fonts - Heading first/ text second -->
    <?php
    echo $this->fetch('meta');
    //Icons
    echo $this->Html->css('/assets/css/icons');
    //Bootstrap stylesheets (included template modifications)
    echo $this->Html->css('/assets/css/bootstrap');
    //jQueryUI
    echo $this->Html->css('/assets/css/appstart-theme/jquery.ui.all');
    //Plugins stylesheets (all plugin custom css)
    echo $this->Html->css('/assets/css/plugins');
    // Main stylesheets (template main css file)
    echo $this->Html->css('/assets/css/main');
    //Custom stylesheets ( Put your own changes here )
    echo $this->Html->css('/assets/css/custom');

    echo $this->fetch('css');

    echo $this->Html->meta(
        'favicon.ico',
        '/favicon.ico',
        array('type' => 'icon')
    );

    ?>

<!--    <link rel="icon" href="assets/img/ico/favicon.ico" type="image/png">-->
    <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
    <meta name="msapplication-TileColor" content="#3399cc" />
</head>
<body class="ovh">
<div id="preloader">
    <div id="preloader-logo">
        <img src="assets/img/preloader-logo.png" alt="Logo">
    </div>
    <div id="preloader-icon">
        <i class="im-spinner icon-spin"></i>
    </div>
</div>
<!-- Start #header -->
<div id="header">
    <div class="container-fluid">
        <div class="navbar">
            <div class="navbar-header">
                <!-- Show navigation toggle on phones -->
                <button id="showNav" class="navbar-toggle" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <!-- Show logo for large screens and laptops -->
                <a class="navbar-brand visible-lg visible-md" href="index.html">
                    <img src="assets/img/logo.png" alt="Jump start">
                </a>
                <!-- Show logo for small screens -->
                <a class="navbar-brand hidden-lg hidden-md hidden-xs" href="index.html">
                    <img src="assets/img/logo-sm.png" alt="Jump start">
                </a>
            </div>
            <nav id="top-nav" class="navbar-no-collapse" role="navigation">
                <!-- navbar search form -->
                <form class="navbar-form navbar-left hidden-sm hidden-xs" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control input-sm" placeholder="Search for something ...">
                        <i class="im-search3"></i>
                    </div>
                    <button type="submit" class="btn">submit</button>
                </form>
                <!-- Navbar nav -->
                <ul class="nav navbar-nav pull-right">
                    <li class="hidden-lg hidden-md">
                        <!-- close button for search form in small screens -->
                        <button type="button" class="close closeSearchForm" aria-hidden="true">&times;</button>
                        <!-- show search button in small screens -->
                        <a class="resSearchBtn hidden-lg hidden-md" href="#"><i class="im-search3"></i></a>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="im-earth"></i>
                            <i class="nav-notification im-circle2"></i>
                            <span class="sr-only">Notifications</span>
                        </a>
                        <ul class="dropdown-menu right dropdown-notification" role="menu">
                            <li><a href="#" class="dropdown-menu-header">Notifications</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#"><i class="im-user"></i> 1 User is registred</a>
                            </li>
                            <li><a href="#"><i class="im-bubble12"></i> Samy add 1 comment</a>
                            </li>
                            <li><a href="#"><i class="im-power"></i> 5 min server downtime</a>
                            </li>
                            <li><a href="#"><i class="im-database"></i> Databse backup is complete</a>
                            </li>
                            <li><a href="#"><i class="im-github3"></i> SuggeElson push 1 commit</a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" class="view-all">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <i class="im-envelop2"></i>
                            <span class="sr-only">New Emails</span>
                        </a>
                        <ul class="dropdown-menu dropdown-email right" role="menu">
                            <li><a href="#" class="dropdown-menu-header">Messages</a>
                            </li>
                            <li class="divider"></li>
                            <li class="clearfix">
                                <a href="#">
                                    <img class="avatar pull-left" src="assets/img/avatars/11.jpg" alt="Jean">Hello, please check out my account i not have abbility to ...
                                    <span class="time-ago">1 min ago</span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <img class="avatar pull-left" src="assets/img/avatars/10.jpg" alt="Jonh">I want to purchase one of your products can you help me ...
                                    <span class="time-ago">3 hours ago</span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <img class="avatar pull-left" src="assets/img/avatars/6.jpg" alt="Smith">I register in formum but not have access to write ...
                                    <span class="time-ago">15 hours ago</span>
                                </a>
                            </li>
                            <li class="clearfix">
                                <a href="#">
                                    <img class="avatar pull-left" src="assets/img/avatars/8.jpg" alt="Jean">What`s happen with my order i already purchase it and ...
                                    <span class="time-ago">3 days ago</span>
                                </a>
                            </li>
                            <li class="divider"></li>
                            <li><a href="#" class="view-all">View all</a>
                            </li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" data-toggle="dropdown">
                            <img class="avatar" src="assets/img/avatars/1.jpg" width="36" height="36" alt="Jonh Doe"> <span class="avatar-name">Jonh Doe</span>
                            <span class="caret ml5"></span>
                        </a>
                        <ul class="dropdown-menu right" role="menu">
                            <li><a href="profile.html"><i class="im-user"></i> Profile</a>
                            </li>
                            <li><a href="#"><i class="im-cog2"></i> Settings</a>
                            </li>
                            <li><a href="#"><i class="im-question3"></i> Help</a>
                            </li>
                            <li><a href="lockscreen.html"><i class="im-switch"></i> Logout</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a id="toggle-right-sidebar" href="#">
                            <i class="im-bubbles2"></i>
                            <i class="nav-notification im-circle2"></i>
                            <span class="sr-only">Chat</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
</div>
<!-- End #header -->
<!-- Start #sidebar -->
<aside id="sidebar">
    <!-- Start .sidebar-inner -->
    <div class="sidebar-inner">
        <!-- Start .toggle-sidebar -->
        <div class="toggle-sidebar">
            <a href="#"><i class="im-arrow7"></i></a>
        </div>
        <!-- End .toggle-sidebar -->
        <!-- Start .option-buttons -->
        <div class="option-buttons">
            <div class="option-buttons-inner">
                <form id="search-nav">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Find menu item">
                        <i class="im-search3"></i>
                    </div>
                    <button type="submit" class="btn">submit</button>
                    <a id="close-search-nav" class="close" aria-hidden="true" href="#">&times;</a>
                </form>
                <a href="#" class="search-in-menu btn btn-default btn-sm tip" title="Search in navigation"><i class="im-search3"></i></a>
                <a href="#" class="expand-subs btn btn-default btn-sm tip" title="Expand all SubMenus"><i class="im-sort2"></i></a>
                <a href="#" class="mute-sounds btn btn-default btn-sm tip" title="Mute template sounds"><i class="im-volume-medium"></i></a>
                <a href="#" class="reset-layout btn btn-default btn-sm tip" title="Reset panels position"><i class="im-spinner12"></i></a>
                <a href="#" class="launch-fullscreen btn btn-default btn-sm tip" title="Launch full screen"><i class="im-expand"></i></a>
            </div>
        </div>
        <!-- End .option-buttons -->
      <!-- Start .sidebar-scrollarea -->
                <div class="sidebar-scrollarea">
                    <h5 class="sidebar-title">Navigation</h5>
                    <ul id="sideNav" class="nav nav-pills nav-stacked">
                        <li><a href="acceuil.html"><i class="im-screen"></i> <span class="txt">Tableau de Bord</span></a>
                        </li>
                        <li><a href="gest_dos.html"><i class="im-folder4"></i> <span class="txt">Gestion de dossiers</span></a>
                        </li>
                        <li><a href="gest_utilisateurs.html"><i class="im-users"></i> <span class="txt">Gestion d'utilisateurs</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="im-envelop2"></i> <span class="txt">Messages</span></a>
                            <ul class="sub">
                                <li><a href="email-inbox.html"><i class="im-arrow-right3"></i> <span class="txt">Boite de réception</span></a>
                                </li>
                                <li><a href="email-write.html"><i class="im-arrow-right3"></i> <span class="txt">Envoi message</span></a>
                                </li>
                                <li><a href="email-read.html"><i class="im-arrow-right3"></i> <span class="txt">Archives</span></a>
                                </li>
                            </ul>
                        </li>
                         <li><a href="stats.html"><i class="im-stats-up"></i> <span class="txt">Statistiques</span></a>
                        </li>
                        <li>
                            <a href="#"><i class="im-envelop2"></i> <span class="txt">Activités</span></a>
                            <ul class="sub">
                                <li><a href="calendar.html"><i class="im-cogs"></i> <span class="txt">Agenda</span><span class="label"></span></a>
                        </li>
                                <li><a href="email-write.html"><i class="im-arrow-right3"></i> <span class="txt">Réunions</span></a>
                                </li>
                                <li><a href="email-read.html"><i class="im-arrow-right3"></i> <span class="txt">Taches</span></a>
                                </li>
                            </ul>
                        </li>

                        <li><a href="parametres.html"><i class="im-cogs"></i> <span class="txt">Paramétres</span><span class="label"></span></a>
                        </li>
                        </ul>
                    <div class="clearfix"></div>
                </div>
                <!-- End .sidebar-scrollarea -->
    </div>
    <!-- End .sidebar-inner -->
</aside>
<!-- End #sidebar -->
<!-- Start #right-sidebar -->
<aside id="right-sidebar" class="hide-sidebar">
    <!-- Start .sidebar-inner -->
    <div class="sidebar-inner">
        <!-- Start .sidebar-panel -->
        <div class="sidebar-panel mt0">
            <!-- Start sidebar-panel-content -->
            <div class="sidebar-panel-content fullwidth pt0">
                <!-- Start chat-user-list -->
                <div class="chat-user-list">
                    <form class="form-horizontal chat-search" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control input-sm" placeholder="Search for user...">
                            <button type="submit"><i class="im-search3 s16"></i>
                            </button>
                        </div>
                        <!-- End .form-group  -->
                    </form>
                    <ul class="chat-ui bsAccordion">
                        <li>
                            <a href="#" class="chat-ui-heading">Favorites <span class="users-count">(3)</span></a>
                            <ul class="in">
                                <li>
                                    <a href="#" class="chat-name">
                                        <span class="chat-notification">8</span>
                                        <img class="chat-avatar" src="assets/img/avatars/2.jpg" alt="@chadengle">Chad Engle
                                        <span class="status online"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-mobile2"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chat-name">
                                        <span class="chat-notification">2</span>
                                        <img class="chat-avatar" src="assets/img/avatars/3.jpg" alt="@jason">Jason Moore
                                        <span class="status busy"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-tablet"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/11.jpg" alt="@jenny">Jenny Lee
                                        <span class="status offline"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-screen4"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="chat-ui-heading">Online <span class="users-count">(4)</span></a>
                            <ul class="in">
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/3.jpg" alt="@chadengle">Annete Swartz
                                        <span class="status online"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-mobile2"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/5.jpg" alt="@tod">Todd Simpson
                                        <span class="status online"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-mobile2"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/6.jpg" alt="@danny">Danny Jonsons
                                        <span class="status online"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-screen4"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/7.jpg" alt="@steve">Steeve Sidwell
                                        <span class="status online"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-tablet"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" class="chat-ui-heading">Offline <span class="users-count">(3)</span></a>
                            <ul class="in">
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/8.jpg" alt="@jenna">Jenna Jamson
                                        <span class="status offline"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-screen4"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/9.jpg" alt="@selena">Selena Gomez
                                        <span class="status offline"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-mobile2"></i></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="chat-name">
                                        <img class="chat-avatar" src="assets/img/avatars/10.jpg" alt="@mickey">Mickey Blue
                                        <span class="status offline"><i class="im-circle-small"></i></span>
                                        <span class="device"><i class="im-mobile2"></i></span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
                <!-- End chat-user-list -->
                <!-- Start chat-box -->
                <div class="chat-box">
                    <h5>
                        <span class="device"><i class="im-screen4"></i></span>
                        <span class="status online"><i class="im-circle-small"></i></span> Chad Engle
                    </h5>
                    <a id="close-user-chat" class="close" aria-hidden="true">&times;</a>
                    <ul class="chat-messages">
                        <li>
                            <div class="avatar">
                                <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                            </div>
                            <div class="message">
                                <p class="chat-name">Chad Engle <span class="chat-time">15 sec ago</span>
                                </p>
                                <p class="chat-txt">Hello Sugge check out the last order.</p>
                            </div>
                        </li>
                        <li class="chat-me">
                            <div class="avatar">
                                <img src="assets/img/avatars/1.jpg" alt="@jonhdoe">
                            </div>
                            <div class="message">
                                <p class="chat-name">Jonh Doe <span class="chat-time">10 sec ago</span>
                                </p>
                                <p class="chat-txt">Ok i will check it out.</p>
                            </div>
                        </li>
                        <li>
                            <div class="avatar">
                                <img src="assets/img/avatars/3.jpg" alt="@chadengle">
                            </div>
                            <div class="message">
                                <p class="chat-name">Chad Engle <span class="chat-time">now</span>
                                </p>
                                <p class="chat-txt">Okay, thank you very much.</p>
                            </div>
                        </li>
                    </ul>
                    <div class="chat-write">
                        <form action="#" class="form-horizontal" role="form">
                            <div class="form-group">
                                <textarea name="sendmsg" id="sendMsg" class="form-control elastic" rows="1"></textarea>
                                <a role="button" class="btn" id="attach_photo_btn">
                                    <i class="im-image2 s20"></i>
                                </a>
                                <input type="file" name="attach_photo" id="attach_photo" class="unstyled">
                            </div>
                            <!-- End .form-group  -->
                        </form>
                    </div>
                </div>
                <!-- End chat-box -->
            </div>
            <!-- End sidebar-panel-content -->
        </div>
        <!-- End .sidebar-panel -->
    </div>
</aside>
<!-- End .sidebar-inner -->
</aside>
<!-- Start #right-sidebar -->
<!-- Start #content -->
<div id="content">
    <!-- Start .content-wrapper -->
    <div class="content-wrapper">
        <div id="page-heading" class="page-header">
            <h2><i class="icon im-file7"></i> Blank page</h2>
            <!-- Start .bredcrumb -->
            <ul id="crumb" class="breadcrumb">
            </ul>
            <!-- End .breadcrumb -->
        </div>
        <!-- Start .content-inner -->
        <div class="content-inner">
            <!-- Start .row -->
            <div class="row">
                <?php echo $this->Session->flash(); ?>

                <?php echo $this->fetch('content'); ?>
            </div>
            <!-- End .row -->
        </div>
        <!-- End .content-inner -->
    </div>
    <!-- End .content-wrapper -->
    <div class="clearfix"></div>
</div>
<footer style="background-color: #000077; color: #000077">
    <?php echo $this->element('sql_dump'); ?>
</footer>

<!-- End #content -->
<!-- Javascripts -->
<!-- Important javascript libs(put in all pages) -->
<!--<script src="http://code.jquery.com/jquery-2.1.1.min.js"></script>-->
<?php echo $this->Html->script('/assets/js/libs/jquery-2.1.1.min'); ?>
<!--<script>-->
<!--    window.jQuery || document.write('<script src="assets/js/libs/jquery-2.1.1.min.js">\x3C/script>')-->
<!--</script>-->

<!--<script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>-->
<?php echo $this->Html->script('/assets/js/libs/jquery-ui-1.10.4.min'); ?>
<!--<script>-->
<!--    window.jQuery || document.write('<script src="assets/js/libs/jquery-ui-1.10.4.min.js">\x3C/script>')-->
<!--</script>-->
<!--[if lt IE 9]>
<?php echo $this->Html->script('/assets/js/libs/excanvas.min'); ?>
<!--<script type="text/javascript" src="assets/js/libs/excanvas.min.js"></script>-->
<script type="text/javascript" src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<?php echo $this->Html->script('/assets/js/libs/respond.min'); ?>
<!--<script type="text/javascript" src="assets/js/libs/respond.min.js"></script>-->
<![endif]-->
<!-- Bootstrap plugins -->
<?php echo $this->Html->script('/assets/js/bootstrap/bootstrap'); ?>
<!--<script src="assets/js/bootstrap/bootstrap.js"></script>-->
<!-- Core plugins ( not remove ) -->
<?php echo $this->Html->script('/assets/js/libs/modernizr.custom'); ?>
<!--<script src="assets/js/libs/modernizr.custom.js"></script>-->
<!-- Handle responsive view functions -->
<?php echo $this->Html->script('/assets/js/jRespond.min'); ?>
<!--<script src="assets/js/jRespond.min.js"></script>-->
<!-- Custom scroll for sidebars,tables and etc. -->
<?php echo $this->Html->script('/assets/plugins/core/slimscroll/jquery.slimscroll.min'); ?>
<!--<script src="assets/plugins/core/slimscroll/jquery.slimscroll.min.js"></script>-->
<?php echo $this->Html->script('/assets/plugins/core/slimscroll/jquery.slimscroll.horizontal.min'); ?>
<!--<script src="assets/plugins/core/slimscroll/jquery.slimscroll.horizontal.min.js"></script>-->
<!-- Highlight code blocks -->
<?php echo $this->Html->script('/assets/plugins/misc/highlight/highlight.pack'); ?>
<!--<script src="assets/plugins/misc/highlight/highlight.pack.js"></script>-->
<!-- Handle template sounds -->
<?php echo $this->Html->script('/assets/plugins/misc/ion-sound/ion.sound'); ?>
<!--<script src="assets/plugins/misc/ion-sound/ion.sound.js"></script>-->
<!-- Proivde quick search for many widgets -->
<?php echo $this->Html->script('/assets/plugins/core/quicksearch/jquery.quicksearch'); ?>
<!--<script src="assets/plugins/core/quicksearch/jquery.quicksearch.js"></script>-->
<!-- Prompt modal -->
<?php echo $this->Html->script('/assets/plugins/ui/bootbox/bootbox'); ?>
<!--<script src="assets/plugins/ui/bootbox/bootbox.js"></script>-->
<!-- Other plugins ( load only nessesary plugins for every page) -->
<?php echo $this->Html->script('/assets/plugins/forms/icheck/jquery.icheck.js'); ?>
<!--<script src="assets/plugins/forms/icheck/jquery.icheck.js"></script>-->
<?php echo $this->Html->script('/assets/js/jquery.appStart'); ?>
<!--<script src="assets/js/jquery.appStart.js"></script>-->
<?php echo $this->Html->script('/assets/js/app'); ?>
<!--<script src="assets/js/app.js"></script>-->
<?php echo $this->Html->script('/assets/js/pages/blank'); ?>
<!--<script src="assets/js/pages/blank.js"></script>-->
<?php echo $this->fetch('scriptBottom'); ?>
</body>
</html>