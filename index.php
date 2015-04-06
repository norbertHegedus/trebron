<!DOCTYPE html>
<html>
    <head>
        <title>Trebron Football ON</title>
        <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="js/jquery.min.js"></script>
        <!-- Custom Theme files -->
        <!--theme-style-->
        <link href="css/style.css" rel="stylesheet" type="text/css" media="all" />	
        <link href="css/main.css" rel="stylesheet" type="text/css" media="all" />
        <!--//theme-style-->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta name="keywords" content="Constellation Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
              Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
        <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
        <!--fonts-->
        <link href='http://fonts.googleapis.com/css?family=Roboto:500,900,100,300,700,400' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700' rel='stylesheet' type='text/css'>
        <script type="text/javascript" src="js/move-top.js"></script>
        <script type="text/javascript" src="js/easing.js"></script>
        <link rel="stylesheet" href="http://www.studiosnear.me/css/font-awesome.css">
        <link rel="stylesheet" href="http://www.studiosnear.me/css/normalize.css">
        <script src="http://cdnjs.cloudflare.com/ajax/libs/gsap/1.16.1/TweenMax.min.js"></script>
        <!---->
        <script>
            $(document).ready(function () {
                size_li = $("#myList li").size();
                x = 3;
                $('#myList li:lt(' + x + ')').show();
                $('#loadMore').click(function () {
                    x = (x + 1 <= size_li) ? x + 1 : size_li;
                    $('#myList li:lt(' + x + ')').show();
                });
            });
        </script>
        <script>

            $(document).on("mousemove", function () {
                TweenLite.to($(".parallax-bg"), 0.8, {css: {
                        'background-position':
                                -parseInt(event.pageX / 8) + "px " +
                                -parseInt(event.pageY / 12) + "px, " +
                                -parseInt(event.pageX / 15) + "px " +
                                -parseInt(event.pageY / 15) + "px, " +
                                -parseInt(event.pageX / 30) + "px " +
                                -parseInt(event.pageY / 30) + "px"
                    }});
            });

        </script>
    </head>
    <body>
        <!--        <video autoplay="autoplay" loop="loop" muted="muted" class="bgvideo" id="bgvideo">
                    <source src="video/trebron.mp4" type="video/mp4" />
                </video>
                <script>
                    document.getElementById('bgvideo').playbackRate = 0.4;
                </script>-->
        <div class="parallax">
            <div class="parallax-bg"></div>
        </div>
        <div class="header">
            <div class="container">	
                <div class="header-on">
                    <div class="header-left">
                        <div class="menu">												
                            <a href="#" class="right_bt" id="activator"><img class="menu-in" src="images/menu.png" alt=""/></a>
                            <?php require_once('menu_right.php'); ?>
                            <script type="text/javascript">
                                var $ = jQuery.noConflict();
                                $(function () {
                                    $('#activator').click(function () {
                                        $('#box').animate({'left': '0px'}, 500);
                                    });
                                    $('#boxclose').click(function () {
                                        $('#box').animate({'left': '-700px'}, 500);
                                    });
                                });
                                $(document).ready(function () {

                                    //Hide (Collapse) the toggle containers on load
                                    $(".toggle_container").hide();

                                    //Switch the "Open" and "Close" state per click then slide up/down (depending on open/close state)
                                    $(".trigger").click(function () {
                                        $(this).toggleClass("active").next().slideToggle("slow");
                                        return false; //Prevent the browser jump to the link anchor
                                    });

                                });
                            </script>
                        </div> 
                    </div>
                    <!---->
                    <div class="clearfix"> </div>
                </div>
                <div class="header-top">			
                    <!--<h1><a href="index.html" class="logo">Trebron </a></h1>-->
                    <!--<p>If I create from the heart, nearly everything works; if from the head, almost nothing.</p>-->
                    <?php require_once 'main_modal.php'; ?>
                </div>
            </div>
        </div>
        <!---->
        <div class="footer">
            <div class="container">
                <div class="footer-top">
                    <ul class="social-in">
                        <li><a href="#"><i> </i></a></li>
                        <li><a href="#"><i class="inline"> </i></a></li>
                        <li><a href="#"><i class="camera"> </i></a></li>
                        <li ><a href="#"><i class="twitter"> </i></a></li>

                    </ul>

                    <p class="footer-class">Copyright © 2015 Trebron by  <a href="#" >Norbert Hegedus</a> </p>
                </div>
            </div>
            <script type="text/javascript">
                $(document).ready(function () {

                    var defaults = {
                        containerID: 'toTop', // fading element id
                        containerHoverID: 'toTopHover', // fading element hover id
                        scrollSpeed: 1200,
                        easingType: 'linear'
                    };


                    $().UItoTop({easingType: 'easeOutQuart'});

                });
            </script>
            <a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>

        </div>

    </body>
</html>