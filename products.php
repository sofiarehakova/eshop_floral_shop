<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Products - Floral Template</title>
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


</head>

<body>

<div id="templatemo_wrapper_sp">
    <div id="templatemo_header_wsp">
        <div id="templatemo_header" class="header_subpage">
            <?php include_once "parts/body_header.php"; ?>
        </div> <!-- end of templatemo_menu -->

    </div> <!-- END of header -->
</div> <!-- END of header wrapper -->

<div id="templatemo_main_wrapper">
    <div id="templatemo_main">
        <?php include_once "parts/body_slidebar.php"; ?>

        <div id="content" class="right">
            <h2>Products</h2>
            <p>Welcome to our wide range of flower products! In the Floral Shop you will find everything you need to
                create the perfect floral experience. Our bouquets are carefully assembled from the freshest flowers to
                bring you the highest degree of beauty and joy. We are here to help you express your feelings in a
                relationship, celebrate special moments or just surprise someone close to you. With our bouquets, every
                occasion will become unforgettable.</p>
            <div class="product_box">
                <img src="images/product/01.jpg" alt="floral set 1"/>
                <h3>Red roses and freesia</h3>
                <p class="product_price">$95/-</p>
            </div>
            <div class="product_box">
                <img src="images/product/02.jpg" alt="floral set 1"/>
                <h3>Pink lily</h3>
                <p class="product_price">$50/-</p>
            </div>
            <div class="product_box">
                <img src="images/product/03.jpg" alt="floral set 1"/>
                <h3>Red roses and white lilies</h3>
                <p class="product_price">$75/-</p>
            </div>
            <div class="product_box">
                <img src="images/product/04.jpg" alt="floral set 1"/>
                <h3>A bouquet of colorful tulips</h3>
                <p class="product_price">$40/-</p>
            </div>
            <div class="product_box">
                <img src="images/product/05.jpg" alt="floral set 1"/>
                <h3>Colorful roses Grand</h3>
                <p class="product_price">$300/-</p>
            </div>
            <div class="product_box">
                <img src="images/product/06.jpg" alt="floral set 1"/>
                <h3>Colorful carnations</h3>
                <p class="product_price">$50/-</p>
            </div>
            <div class="product_box">
                <img src="images/product/07.jpg" alt="floral set 1"/>
                <h3>Colorful mini gerberas</h3>
                <p class="product_price">$50/-</p>
            </div>
            <div class="product_box">
                <img src="images/product/08.jpg" alt="floral set 1"/>
                <h3>Sunflowers</h3>
                <p class="product_price">$40/-</p>
            </div>


        </div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<?php include_once "parts/body_footer.php"; ?>


</body>
</html>