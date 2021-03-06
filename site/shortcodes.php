<?php
define("CSS_PATH", "css/");
?>

<!DOCTYPE html>
<html lang="en" class="wide">
<head>
    <title>Shortcodes</title>
    <meta charset="utf-8">
    <meta name="format-detection" content="telephone=no"/>
    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0"/>
    <link rel="icon" href="images/favicon.ico" type="image/x-icon">

    <link href="css/bootstrap.css" rel="stylesheet">

    <script src="js/jquery.js"></script>
    <script src="js/jquery-migrate-1.2.1.min.js"></script>
    <style>

        main {
            /*color: #212121;*/
            /*background: #f7f7f7;*/
        }

        .icon-short-code {
            font-size: 0.8888888888888889rem;
            position: relative;
            margin-top: .5rem;
        }

        .box__left .icon {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
        }
        .icon-short-code .box__left {
            padding-right: 0.5555555555555556rem;
            color: black;
        }

        .icon-short-code .box__body {
            padding-left: 1.5rem;
        }

        h2 {
            font-size: 2.5rem;
            line-height: 1.7;
        }

        h3 {
            font-weight: 700;
            text-transform: uppercase;
            font-size: 1.5rem;
            line-height: 1.7;
            margin-bottom: 2rem;
        }

        @media (max-width: 991px) {
            h3 {
                text-align: center;
            }
        }

        h2 + h3 {
            margin-top: 1.6rem;
        }

        h3 + .row {
            margin-top: 1.1rem;
        }

        .row + h3 {
            margin-top: 3.3rem;
        }

        .box .box__left,
        .box .box__right,
        .box .box__body {
            display: table-cell;
            vertical-align: top;
        }

        @media (max-width: 767px) {
            .icon-short-code.box .box__left,
            .icon-short-code.box .box__right,
            .icon-short-code.box .box__body {
                display: inline-block;
            }
        }

        div.row div.clear-shortcode-xs-6 {
            margin-top: 0;
            margin-bottom: 0;
        }

        @media (max-width: 600px) {
            div.row div.clear-shortcode-xs-6 {
                width: 100%;
            }
        }

        @media (min-width: 1200px) {
            div.row div.clear-shortcode-xs-6:nth-child(3n+4) {
                clear: left;
            }
        }

        @media (min-width: 992px) and (max-width: 1199px) {
            div.row div.clear-shortcode-xs-6:nth-child(3n+4) {
                clear: left;
            }
        }

        @media (min-width: 500px) and (max-width: 991px) {
            div.row div.clear-shortcode-xs-6:nth-child(2n+3) {
                clear: left;
            }
        }


    </style>

    <!--[if lt IE 10]>
    <div
        style='background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;'>
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
    <main class="content">
        <!-- Shortcodes -->
        <section class="well-5">
            <div class="container-fluid container-wide">

                <!-- Icons -->
                <?php
                $packs = array(
                    "font-awesome", "material-icons", "hotel-pictograms", "material-design", "linecons", "fl-sympletts",
                    "fl-squared-ui", "fl-soft-icons", "fl-simpleicon-communication",
                    "fl-real-estate-3", "fl-puppets", "fl-outicons", "fl-line-ui",
                    "fl-line-icon-set", "fl-justicons", "fl-icon-works", "fl-great-icon-set",
                    "fl-glypho", "fl-free-chaos", "fl-flat-icons-set-2", "fl-fill-round-icons",
                    "fl-dripicons", "fl-drawing-tools", "fl-demo-icons", "fl-demo-icons", "fl-crisp-icons",
                    "fl-continuous", "fl-clear-icons", "fl-chapps", "fl-budicons-launch", "fl-budicons-free",
                    "fl-bigmug-line", "fl-36-slim-icons", "beach-icons", "arrows"
                );

                $di = new RecursiveDirectoryIterator(CSS_PATH);
                $files = array();


                $fa = 0;
                foreach (new RecursiveIteratorIterator($di) as $filename => $file) {
                    if (in_array(basename($filename, ".css"), $packs)) {
                        if (basename($filename, ".css") != "font-awesome") {
                            array_push($files, $filename);
                            echo "<link rel='stylesheet' href='css/" . basename($filename) . "'>";
                        } else {
                            $fa = 1;
                        }

                    }
                }

                if ($fa) {
                    array_push($files, "css\\font-awesome.css");
                    echo "<link rel='stylesheet' href='css/" . basename($filename) . "'>";
                }

                if (count($files) > 0) {
                    echo '<h2 class="text-center">Icons</h2>';
                    foreach ($files as $i => $filename) {
                        echo '<h3>' . basename($filename, ".css") . '</h3>';
                        echo '<div class="row">';
                        $handle = fopen($filename, "r");
                        $icons = array();

                        while (($line = fgets($handle)) !== false) {
                            if (preg_match("/\.(" . ((basename($filename, ".css") == "material-design") || (basename($filename, ".css") == "hotel-pictograms") ? "(flaticon)|(material-design)" : basename($filename, ".css")) . "-[\w\d_-]+)\:before\s*\{/i", $line, $result)) {
                                array_push($icons, $result[1]);
                            }


                            switch (basename($filename, ".css")) {
                                case 'font-awesome':
                                    if (preg_match("/\.(fa-[\w\d_-]+)\:before\s*\{/i", $line, $result)) {
                                        array_push($icons, $result[1]);
                                    }
                                    break;

                            }
                        }


                        if (count($icons) <= 10) {
                            $bp = ceil(count($icons) / 5);
                        } else {
                            $bp = ceil(count($icons) / 10);
                        }

                        foreach ($icons as $i => $value) {
                            if (fmod($i + $bp, $bp) == 0) {
                                if ($i != 0) {
                                    echo '</div>';
                                }
                                echo '<div class="col-lg-4 col-md-4 col-sm-6 col-xs-6 clear-shortcode-xs-6">';
                            }
                            echo '<div class="box icon-short-code">';
                            echo '<div class="box__left">';
                            echo '<div class="icon icon-success ' . $value . '"></div>';
                            echo '</div>';
                            echo '<div class="box__body"> .' . $value . '</div>';
                            echo '</div>';
                            if ($i == count($icons) - 1) {
                                echo '</div>';
                            }
                        }

                        echo '</div>';
                        fclose($handle);
                    }
                }
                ?>
                <!-- END Icons -->
            </div>
        </section>
        <!-- END Shortcodes -->
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