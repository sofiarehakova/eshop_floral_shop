<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Floral HTML CSS Template</title>
    <meta name="keywords" content=""/>
    <meta name="description" content=""/>
    <link href="templatemo_style.css" rel="stylesheet" type="text/css"/>

    <link rel="stylesheet" href="css/orman.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" type="text/css" href="css/ddsmoothmenu.css"/>

    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/ddsmoothmenu.js">

        /***********************************************
         * Smooth Navigational Menu- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
         * This notice MUST stay intact for legal use
         * Visit Dynamic Drive at http://www.dynamicdrive.com/ for full source code
         ***********************************************/

    </script>

    <script type="text/javascript">

        ddsmoothmenu.init({
            mainmenuid: "templatemo_menu", //menu DIV id
            orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
            classname: 'ddsmoothmenu', //class added to menu's outer DIV
            //customtheme: ["#1c5a80", "#18374a"],
            contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
        })

        function clearText(field) {
            if (field.defaultValue === field.value) field.value = '';
            else if (field.value === '') field.value = field.defaultValue;
        }

    </script>

    <link rel="stylesheet" href="css/slimbox2.css" type="text/css" media="screen"/>
    <script type="text/JavaScript" src="js/slimbox2.js"></script>


</head>

<body>

<div id="templatemo_wrapper_h">
    <div id="templatemo_header_wh">
        <div id="templatemo_header" class="header_home">

            <?php include_once "parts/body_header.php"; ?>
        </div> <!-- end of templatemo_menu -->

        <div class="slider-wrapper theme-orman">
            <div class="ribbon"></div>
            <div id="slider" class="nivoSlider">
                <img src="images/portfolio/port1.jpg" alt="slider image 1"/>
                <a href="#">
                    <img src="images/portfolio/port2.jpg" alt="slider image 2" title="This is an example of a caption"/>
                </a>
                <img src="images/portfolio/port3.jpg" alt="slider image 3"/>
                <img src="images/portfolio/port4.jpg" alt="slider image 4" title="#htmlcaption"/>
                <img src="images/portfolio/port5.jpg" alt="slider image 5" title="#htmlcaption"/>
            </div>
            <div id="htmlcaption" class="nivo-html-caption">
                <strong>Example</strong> caption with <a href="https://dev7studios.com" rel="nofollow">a credit link</a>
                for <em>this slider</em>.
            </div>
        </div>
        <script type="text/javascript" src="js/jquery-1.6.1.min.js"></script>
        <script type="text/javascript" src="js/jquery.nivo.slider.pack.js"></script>
        <script type="text/javascript">
            $(window).load(function () {
                $('#slider').nivoSlider({
                    controlNav: false
                });
            });
        </script>
    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <?php include_once "parts/body_slidebar.php"; ?>

        <div id="content" class="right">
            <h2>Welcome To Floral Shop</h2>
            <p>
                Floral Shop is an online e-shop that specializes in beautiful flowers and offers fast and reliable
                delivery anywhere near you. We are here to help you express your emotions, celebrate special occasions
                and create unforgettable experiences. <br>We believe that flowers have an incredible power to express
                feelings and bring a joyful atmosphere to any occasion. Whether it's a wedding, birthday, anniversary or
                you simply want to surprise someone, our flowers are always a surprise full of love and beauty. <br> Our
                intuitive website allows you to easily browse and choose from our diverse offer. We are here for you
                24/7 to provide you with the best customer service. Our satisfaction is our highest goal. We believe
                that the beauty of flowers is accessible to everyone and our prices are tailored to suit all budgets. We
                are here to bring you joy and happiness at a great price.
            </p>

        </div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<?php include_once "parts/body_footer.php"; ?>


</body>
</html>