<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="format-detection" content="telephone=no"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">
    <title>Search</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Links -->

    <link rel="stylesheet" href="css/search.css">


    <!--JS-->
    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>

    <!--[if lt IE 9]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/..">
            <img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820"
                 alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."/>
        </a>
    </div>
    <script src="js/html5shiv.js"></script>
    <![endif]-->
    <script src='js/device.min.js'></script>
</head>
<body>
<div class="page">
    <!--========================================================
                              HEADER
    =========================================================-->

    <header class="well--inset-3">
        <div id="stuck_container" class="stuck_container">
            <div class="container-fluid container-wide">

                <nav class="navbar navbar-default navbar-static-top ">

                    <div class="navbar-header center-xs">
                        <h1 class="navbar-brand">
                            <a href="./">
                                <span class="navbar-brand__icon material-icons-grain"></span>
                                Car Insurance
                            </a>
                        </h1>
                    </div>


                    <ul class="navbar-nav sf-menu navbar-right" data-type="navbar">
                        <li>
                            <a href="./">Home</a>
                        </li>
                        <li class="dropdown">
                            <a href="index-1.html">About</a>
                            <ul class="dropdown-menu">
                                <li>
                                    <a href="#">
                                        Single-Car Insurance
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Multi-Car Insurance
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        Black Box Insurance
                                    </a>
                                </li>
                                <li>
                                    <a href="404.html">
                                        404
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="index-2.html">Services</a>
                        </li>
                        <li>
                            <a href="index-3.html">News</a>
                        </li>
                        <li>
                            <a href="index-4.html">Contacts</a>
                        </li>
                    </ul>
                </nav>

            </div>
        </div>
    </header>

    <!--========================================================
                              CONTENT
    =========================================================-->
    <main>
        <section id="content" class="content well">
            <div class="container-fluid container-wide text-center">

                <div class="search-form">
                    <form id="search" action="search.php" method="GET" accept-charset="utf-8">
                        <label class="search-form_label" for="in">
                            <input id="in" class="search-form_input" type="text" name="s" autocomplete="off"
                                   placeholder=""/>
                            <span class="search-form_liveout"></span>
                        </label>
                        <button type="submit" class="search-form_submit"></button>
                    </form>
                </div>
                <h3 class="center-sm">Search Results</h3>

                <div id="search-results"></div>
            </div>
        </section>
    </main>

    <!--========================================================
                              FOOTER
    =========================================================-->
    <footer>
        <section class="text-center text-md-left">
            <div class="container-fluid container-wide">
                <div class="row">
                    <div class="col-sm-6 col-md-3">
                        <h6 class="fw-b">Navigation</h6>

                        <ul class="list">
                            <li><a href="./">Home</a></li>
                            <li><a href="index-1.html">About</a></li>
                            <li><a href="index-2.html">Services</a></li>
                            <li><a href="index-3.html">News</a></li>
                            <li><a href="index-4.html">Contacts</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h6 class="fw-b">Contacts</h6>
                        <!-- Contact Info -->
                        <address class="contact-info">
                            <dl>
                                <dt><span class="icon icon-xs icon-success material-icons-location_on"></span></dt>
                                <dd>
                                    <a href="#">Car Insurance Glasgow D04 89GR</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt><span class="icon icon-xs icon-success material-icons-phone"></span></dt>
                                <dd>
                                    <a href='callto:#'>800-2345-6789</a>
                                </dd>
                            </dl>

                            <dl>
                                <dt><span class="icon icon-xs icon-success material-icons-email"></span></dt>
                                <dd>
                                    <a href='mailto:#'>info@demolink.org</a>
                                </dd>
                            </dl>
                            <dl>
                                <dt><span class="icon icon-xs icon-success material-icons-schedule"></span></dt>
                                <dd>
                                    7 Days a week from 9:00 am to 7:00 pm
                                </dd>
                            </dl>
                        </address>
                        <!-- END Contact Info -->
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h6 class="fw-b">Follow Us</h6>
                        <ul class="list--mod-1 ">
                            <li><span class="icon icon-xs icon-success fa-facebook"></span><a href="#">Facebook</a></li>
                            <li><span class="icon icon-xs icon-success fa-twitter"></span><a href="#">Twitter</a></li>
                            <li><span class="icon icon-xs icon-success fa-google-plus"></span><a href="#">Google +</a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3">
                        <h6 class="fw-b">About</h6>

                        <p>�Car Insurance� is a NY based insurance company that was set up 1993 to specialise in Car
                            Insurance. In 2005 we launched the first Multi Car Insurance cover which allows two or more
                            people to insure their cars on one policy and get a discount on the overall price. In 2013
                            we launched our Black Box Insurance product LittleBox which helps safe drivers to receive
                            discounts based on their driving style.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="bg-default-darker well--inset-2 text-md-left">
            <div class="container-fluid container-wide center-sm">
                <div class="row">
                    <div class="col-xs-12">

                        <h1 class="brand">
                            <a href="./">
                                <span class="brand__icon material-icons-grain"></span>
                                Car Insurance
                            </a>
                        </h1>

                        <p class="copyright"> &#169; <span id="copyright-year"></span>
                            <a href="index-5.html" class="text-success">Privacy Policy</a>
                        </p>
                    </div>
                </div>
            </div>
        </section>
    </footer>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
<script src="js/tm-scripts.js"></script>
<!-- </script> -->
</body>
</html>
