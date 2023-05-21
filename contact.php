<!-- templatemo 385 floral shop -->
<!-- 
Floral Shop Template 
http://www.templatemo.com/preview/templatemo_385_floral_shop 
-->
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" lang="sk">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Contact</title>
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
            <h2>Contact</h2>
            <div class="cleaner h20"></div>
            <div class="col col13">
                <h4>Mailing Address</h4>
                <h6><strong>Office One</strong></h6>
                800-220 Fusce nec ante at odio, <br/>
                In vitae lacus in purus, 66770<br/>
                Diam a mollis tempor<br/><br/>

                <strong>Phone:</strong> 010-440-5500<br/>
                <strong>Email:</strong> <a href="mailto:contact@company.com">contact@company.com</a> <br/>

                <div class="cleaner h20"></div>

                <h6><strong>Office Two</strong></h6>
                600-110 Duis lacinia, <br/>
                Ullamcorper mattis, 88770<br/>
                Maecenas a diam, mollis magna<br/><br/>

                <strong>Phone:</strong> 020-660-8800<br/>
                <strong>Email:</strong> <a href="mailto:info@company.com">info@company.com</a> <br/>

            </div>
            <div class="col col23 no_margin_right">
                <div class="map_border">
                    <iframe width="430" height="340" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                            src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Central+Park,+New+York,+NY,+USA&amp;aq=0&amp;sll=14.093957,1.318359&amp;sspn=69.699334,135.263672&amp;vpsrc=6&amp;ie=UTF8&amp;hq=Central+Park,+New+York,+NY,+USA&amp;ll=40.778265,-73.96988&amp;spn=0.033797,0.06403&amp;t=m&amp;output=embed"></iframe>
                </div>

            </div>
            <div class="cleaner h40"></div>

            <div class="cleaner"></div>
        </div>
        <div class="cleaner"></div>
    </div> <!-- END of main -->
</div> <!-- END of main wrapper -->

<?php include_once "parts/body_footer.php"; ?>


</body>
</html>