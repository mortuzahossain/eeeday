<?php 
	session_start();
	if( !isset($_SESSION['login'])){
	 	header('Location: signin.php');
	    exit();
	}
	include '../inc/conn.php';
?>

<!DOCTYPE HTML>
<html>

<head>
    <title>EEE DAY ADMIN Penel | 2018</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

    <script type="application/x-javascript">
        addEventListener("load", function() {
            setTimeout(hideURLbar, 0);
        }, false);

        function hideURLbar() {
            window.scrollTo(0, 1);
        }
    </script>
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
    <link href="css/style.css" rel='stylesheet' type='text/css' />
    <link href="css/font-awesome.css" rel="stylesheet">
    <script src="js/jquery.min.js"></script>
    <script src="js/jquery.metisMenu.js"></script>
    <script src="js/jquery.slimscroll.min.js"></script>
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/custom.js"></script>
    <script src="js/screenfull.js"></script>
    <script>
        $(function() {
            $('#supported').text('Supported/allowed: ' + !!screenfull.enabled);
            if (!screenfull.enabled) {
                return false;
            }
            $('#toggle').click(function() {
                screenfull.toggle($('#container')[0]);
            });
        });
    </script>
    <script src="js/skycons.js"></script>
</head>

<body>
    <div id="wrapper">
        <nav class="navbar-default navbar-static-top" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <h1> <a class="navbar-brand" href="index.php">EEE DAY 2018</a></h1>
            </div>
            <div class=" border-bottom">
                <div class="full-left">
                    <section class="full-top">
                        <button id="toggle"><i class="fa fa-arrows-alt"></i></button>
                    </section>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"></div>

                <div class="navbar-default sidebar" role="navigation">
                    <div class="sidebar-nav navbar-collapse">
                        <ul class="nav" id="side-menu">

                            <li>
                                <a href="index.php" class=" hvr-bounce-to-right"><i class="fa fa-dashboard nav_icon "></i><span class="nav-label">Dashboards</span> </a>
                            </li>

                            <li>
                                <a href="menu.php" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Menus</span> </a>
                            </li>

                            <li>
                                <a href="event.php" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Events</span> </a>
                            </li>

                            <li>
                                <a href="footer.php" class=" hvr-bounce-to-right"><i class="fa fa-inbox nav_icon"></i> <span class="nav-label">Footer</span> </a>
                            </li>

                            <li>
                                <a href="#" class=" hvr-bounce-to-right"><i class="fa fa-desktop nav_icon"></i> <span class="nav-label">Pages</span><span class="fa arrow"></span></a>
                                <ul class="nav nav-second-level">
                                    <li><a href="home.php" class=" hvr-bounce-to-right"><i class="fa fa-home nav_icon"></i>Home</a></li>
                                    <li><a href="sponsors.php" class=" hvr-bounce-to-right"><i class="fa fa-life-ring nav_icon"></i>Sponsors</a></li>
                                    <li><a href="contact.php" class=" hvr-bounce-to-right"><i class="fa fa-paper-plane nav_icon"></i>Contact</a></li>
                                </ul>
                            </li>

                            <li>
                                <a href="logout.php" class=" hvr-bounce-to-right"><i class="fa fa-ban nav_icon"></i> <span class="nav-label">Logout</span> </a>
                            </li>
                        </ul>
                    </div>
                </div>
        </nav>

        <div id="page-wrapper" class="gray-bg dashbard-1">
            <!-- Content -->
