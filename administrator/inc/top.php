<?php
require('../database/database.php');
?>
<!DOCTYPE html>
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <title><?php echo $template['title'] ?></title>

        <meta name="description" content="<?php echo $template['description'] ?>">
        <meta name="author" content="<?php echo $template['author'] ?>">
        <meta name="robots" content="noindex, nofollow">

        <meta name="viewport" content="width=device-width,initial-scale=1">

        <!-- Icons -->
        <!-- The following icons can be replaced with your own, they are used by desktop and mobile browsers -->
        <link rel="shortcut icon" href="img/favicon.ico">
        <link rel="apple-touch-icon" href="img/icon57.png" sizes="57x57">
        <link rel="apple-touch-icon" href="img/icon72.png" sizes="72x72">
        <link rel="apple-touch-icon" href="img/icon76.png" sizes="76x76">
        <link rel="apple-touch-icon" href="img/icon114.png" sizes="114x114">
        <link rel="apple-touch-icon" href="img/icon120.png" sizes="120x120">
        <link rel="apple-touch-icon" href="img/icon144.png" sizes="144x144">
        <link rel="apple-touch-icon" href="img/icon152.png" sizes="152x152">
        <!-- END Icons -->

        <!-- Stylesheets -->
        <!-- Bootstrap is included in its original form, unaltered -->
        <link rel="stylesheet" href="css/bootstrap.css">

        <!-- Related styles of various javascript plugins -->
        <link rel="stylesheet" href="css/plugins.css">

        <!-- The main stylesheet of this template. All Bootstrap overwrites are defined in here -->
        <link rel="stylesheet" href="css/main.css">

        <!-- Load a specific file here from css/themes/ folder to alter the default theme of the template -->
        <?php if ($template['theme']) { ?>
        <link id="theme-link" rel="stylesheet" href="css/themes/<?php echo $template['theme']; ?>.css">
        <?php } ?>

        <!-- The themes stylesheet of this template (for using specific theme color in individual elements - must included last) -->
        <link rel="stylesheet" href="css/themes.css">
        <!-- END Stylesheets -->

        <!-- Modernizr (browser feature detection library) & Respond.js (Enable responsive CSS code on browsers that don't support it, eg IE8) -->
        <script src="js/vendor/modernizr-respond.min.js"></script>
    </head>

    <!-- Add the class .fixed to <body> for a fixed layout on large resolutions (min: 1200px) -->
    <!-- <body class="fixed"> -->
    <body<?php if ($template['layout'] == 'fixed') echo ' class="fixed"'; ?>>
        <!-- Page Container -->
        <div id="page-container">
            <!-- Header -->
            <!-- Add the class .navbar-fixed-top or .navbar-fixed-bottom for a fixed header on top or bottom respectively -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-top"> -->
            <!-- <header class="navbar navbar-inverse navbar-fixed-bottom"> -->
            <header class="navbar navbar-inverse<?php if ($template['header'] == 'fixed-top') echo ' navbar-fixed-top'; else if ($template['header'] == 'fixed-bottom') echo ' navbar-fixed-bottom'; ?>">
                <!-- Mobile Navigation, Shows up  on smaller screens -->
                <ul class="navbar-nav-custom pull-right hidden-md hidden-lg">
                    <li class="divider-vertical"></li>
                    <li>
                        <!-- It is set to open and close the main navigation on smaller screens. The class .navbar-main-collapse was added to aside#page-sidebar -->
                        <a href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-main-collapse">
                            <i class="fa fa-bars"></i>
                        </a>
                    </li>
                </ul>
                <!-- END Mobile Navigation -->

                <!-- Logo -->
                <a href="index.php" class="navbar-brand"><img src="img/template/logo.png" alt="logo"></a>

                <!-- Loading Indicator, Used for demostrating how loading of widgets could happen, check main.js - uiDemo() -->
                <div id="loading" class="pull-left"><i class="fa fa-certificate fa-spin"></i></div>

                <!-- Header Widgets -->
                <!-- You can create the widgets you want by replicating the following. Each one exists in a <li> element -->
                <ul id="widgets" class="navbar-nav-custom pull-right">
                    <!-- Just a divider -->
                    <li class="divider-vertical"></li>

                    <!-- RSS Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    <li id="rss-widget" class="dropdown dropdown-left-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-rss"></i>
                            <span class="badge badge-warning display-none"></span>
                        </a>
                        <!-- By adding the class .widget-fluid, dropdown width will be set to auto with min value 180px and max value 250px -->
                        <ul class="dropdown-menu dropdown-menu-right widget widget-fluid">
                            <li class="widget-heading text-center">Web Design</li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-umbrella"></i>This is a headline</a></li>
                            <li class="divider"></li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-trophy"></i>Another headline</a></li>
                            <li class="divider"></li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-suitcase"></i>Headlines keep coming!</a></li>
                            <li class="widget-heading text-center">Web Developent</li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-phone"></i>New headline</a></li>
                            <li class="divider"></li>
                            <li class="li-hover"><a href="javascript:void(0)" class="widget-link"><i class="fa fa-pencil"></i>Another one</a></li>
                            <li class="divider"></li>
                            <li><a href="javascript:void(0)" class="text-center">All News</a></li>
                        </ul>
                    </li>
                    <!-- END RSS Widget -->

                    <li class="divider-vertical"></li>

                    <!-- Twitter Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    <li id="twitter-widget" class="dropdown dropdown-left-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-twitter"></i>
                            <span class="badge badge-info display-none"></span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right widget">
                            <li class="widget-heading"><i class="fa fa-comments-o pull-right"></i>Latest Tweets</li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Michael</a><span class="label label-info">just now</span></h6>
                                        <div class="media">Web design all the way!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Monica</a><span class="label label-info">3 min ago</span></h6>
                                        <div class="media">Download free PSDs at <a href="http://bit.ly/YUs4SQ" target="_blank">http://bit.ly/YUs4SQ</a></div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Steven</a><span class="label label-info">45 min ago</span></h6>
                                        <div class="media">Be sure to check out my portfolio!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="li-hover">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_dark_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Tim</a><span class="label label-info">1 hour ago</span></h6>
                                        <div class="media">Get all our themes for free for the next 2 hours! <a href="javascript:void(0)">#freebies</a></div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </li>
                    <!-- END Twitter Widget -->

                    <li class="divider-vertical"></li>

                    <!-- Messages Widget -->
                    <!-- Add .dropdown-left-responsive class to align the dropdown menu left (so its visible on mobile) -->
                    <li id="messages-widget" class="dropdown dropdown-left-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-envelope"></i>
                            <!-- If the <span> element with .badge class has no content it will disappear (not in IE8 and below because of using :empty in CSS) -->
                            <span class="badge badge-success">1</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right widget">
                            <li class="widget-heading"><i class="fa fa-comment pull-right"></i>Latest Messages</li>
                            <li class="new-on">
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">George</a><span class="label label-success">2 min ago</span></h6>
                                        <div class="media">Thanks for your help! The tutorial really helped me a lot!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Mike</a><span class="label label-default">6 hours ago</span></h6>
                                        <div class="media">The logo is ready, have a look and let me know what you think!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <div class="media">
                                    <a class="pull-left" href="javascript:void(0)">
                                        <img src="img/placeholders/image_light_64x64.png" alt="fakeimg">
                                    </a>
                                    <div class="media-body">
                                        <h6 class="media-heading"><a href="javascript:void(0)">Julia</a><span class="label label-default">1 day ago</span></h6>
                                        <div class="media">We should better consider our social media marketing strategy!</div>
                                    </div>
                                </div>
                            </li>
                            <li class="divider"></li>
                            <li class="text-center"><a href="page_inbox.php">View All Messages</a></li>
                        </ul>
                    </li>
                    <!-- END Messages Widget -->

                    <li class="divider-vertical"></li>

                    <!-- Notifications Widget -->
                    <!-- Add .dropdown-center-responsive class to align the dropdown menu center (so its visible on mobile) -->
                    <li id="notifications-widget" class="dropdown dropdown-center-responsive">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-flag"></i>
                            <span class="badge badge-danger">1</span>
                            <span class="badge badge-warning">2</span>
                        </a>
                        <ul class="dropdown-menu dropdown-menu-right widget">
                            <li class="widget-heading"><a href="javascript:void(0)" class="pull-right widget-link"><i class="fa fa-cog"></i></a><a href="javascript:void(0)" class="widget-link">System</a></li>
                            <li>
                                <ul>
                                    <li class="label label-danger">20 min ago</li>
                                    <li class="text-danger">Support system is down for maintenance!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-warning">3 hours ago</li>
                                    <li class="text-warning">PHP upgrade started!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-warning">5 hours ago</li>
                                    <li class="text-warning"><a href="javascript:void(0)" class="widget-link">1 support ticket</a> just opened!</li>
                                </ul>
                            </li>
                            <li class="widget-heading"><a href="javascript:void(0)" class="pull-right widget-link"><i class="fa fa-bookmark"></i></a><a href="javascript:void(0)" class="widget-link">Project #3</a></li>
                            <li>
                                <ul>
                                    <li class="label label-success">3 weeks ago</li>
                                    <li class="text-success">Project #3 <a href="javascript:void(0)" class="widget-link">published</a> successfully!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-info">1 month ago</li>
                                    <li class="text-info">Milestone #3 achieved!</li>
                                    <li class="text-info"><a href="javascript:void(0)" class="widget-link">John Doe</a> joined the project!</li>
                                </ul>
                            </li>
                            <li>
                                <ul>
                                    <li class="label label-default">1 year ago</li>
                                    <li class="text-muted">This is an old notification</li>
                                </ul>
                            </li>
                            <li class="divider"></li>
                            <li class="text-center"><a href="javascript:void(0)">View All Notifications</a></li>
                        </ul>
                    </li>
                    <!-- END Notifications Widget -->

                    <li class="divider-vertical"></li>

                    <!-- User Menu -->
                    <li class="dropdown pull-right dropdown-user">
                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><img src="img/template/avatar.png" alt="avatar"> <b class="caret"></b></a>
                        <ul class="dropdown-menu">
                            <!-- Just a button demostrating how loading of widgets could happen, check main.js- - uiDemo() -->
                            <li>
                                <a href="javascript:void(0)" class="loading-on"><i class="fa fa-refresh"></i> Refresh</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <!-- Modal div is at the bottom of the page before including javascript code -->
                                <a href="#modal-user-settings" role="button" data-toggle="modal"><i class="fa fa-user"></i> User Profile</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)"><i class="fa fa-wrench"></i> App Settings</a>
                            </li>
                            <li class="divider"></li>
                            <li>
                                <a href="page_login.php"><i class="fa fa-lock"></i> Log out</a>
                            </li>
                        </ul>
                    </li>
                    <!-- END User Menu -->
                </ul>
                <!-- END Header Widgets -->
            </header>
            <!-- END Header -->

            <!-- Inner Container -->
            <div id="inner-container">
