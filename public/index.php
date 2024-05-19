<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Responsive Bootstrap4 Shop Template, Created by Imran Hossain from https://imransdesign.com/">

    <?php 
    include "seo.php";
  ?>

  <!-- Basic Page Needs
================================================== -->
  <meta charset="utf-8">
  <title><?php echo $title;?> </title>

  <!-- Mobile Specific Metas
================================================== -->

  <meta name="keywords" content="<?php echo $keywords;?>">
  <Meta name="robots" content="index, follow" />
  <meta name="googlebot" content="index, follow" />
  <Meta name="Yahoobot" content="index, follow" />
  <meta name="MSNbot" content="Index, Follow" />
  <meta name="allow-search" content="yes" />
  <Meta name="author" content="<?php echo $author;?>" />
  <Meta name="revisit-after" content="3 days"/>
  <Meta name="country" content="India"/>
  <Meta name= "geography" content ="<?php echo $address ?>"/>
  <Meta name="contactNumber" content="<?php echo $contact_number;?>"/>
  <Meta name="dc.language" content="english"/>
  <Meta name="geo.region" content="IN-BH" />
  <Meta name="geo.placename" content="Patna" />
  <Meta name="geo.position" content="" />
  <Meta name="ICBM" content="" />
  <meta property="og:url" content="<?php echo $domain ?>" />
  <meta property="og:image" content="<?php echo $domain ?>/public/img/favicon.png"/>
  <meta property="og:type" content="<?php echo $domain ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <meta property="og:title" content="<?php echo $og_title ?>" />
  <meta property="og:description" content="<?php echo $og_description ?>" />
  <meta property="og:keyword" content="<?php echo $og_keywords ?>" />

	<!-- favicon -->
	<link rel="shortcut icon" type="image/png" href="public/assets/img/favicon.png">
	<!-- google font -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:400,700&display=swap" rel="stylesheet">
	<!-- fontawesome -->
	<link rel="stylesheet" href="public/assets/css/all.min.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="public/assets/bootstrap/css/bootstrap.min.css">
	<!-- owl carousel -->
	<link rel="stylesheet" href="public/assets/css/owl.carousel.css">
	<!-- magnific popup -->
	<link rel="stylesheet" href="public/assets/css/magnific-popup.css">
	<!-- animate css -->
	<link rel="stylesheet" href="public/assets/css/animate.css">
	<!-- mean menu css -->
	<link rel="stylesheet" href="public/assets/css/meanmenu.min.css">
	<!-- main style -->
	<link rel="stylesheet" href="public/assets/css/main.css">
	<!-- responsive -->
	<link rel="stylesheet" href="public/assets/css/responsive.css">

</head>
<body>
	
	<!--PreLoader-->
    <div class="loader">
        <div class="loader-inner">
            <div class="circle"></div>
        </div>
    </div>
    <!--PreLoader Ends-->

    <?php

        include "components/header.php";
        if($page_name == '' || $page_name == 'home'){
            include "components/hero-section.php";
            // include "section/call_action.php";
            include "home.php";
        }else{
            include "components/banner.php";
            if($page_name == 'about'){
                include "about.php";
            }else if($page_name == 'products'){
                include "products.php";
            }else if($page_name == 'contact'){
              include "contact.php";
            }
        }
        // include "section/news.php";
        include "components/footer.php";
    ?>
	



	
	<!-- jquery -->
	<script src="public/assets/js/jquery-1.11.3.min.js"></script>
	<!-- bootstrap -->
	<script src="public/assets/bootstrap/js/bootstrap.min.js"></script>
	<!-- count down -->
	<script src="public/assets/js/jquery.countdown.js"></script>
	<!-- isotope -->
	<script src="public/assets/js/jquery.isotope-3.0.6.min.js"></script>
	<!-- waypoints -->
	<script src="public/assets/js/waypoints.js"></script>
	<!-- owl carousel -->
	<script src="public/assets/js/owl.carousel.min.js"></script>
	<!-- magnific popup -->
	<script src="public/assets/js/jquery.magnific-popup.min.js"></script>
	<!-- mean menu -->
	<script src="public/assets/js/jquery.meanmenu.min.js"></script>
	<!-- sticker js -->
	<script src="public/assets/js/sticker.js"></script>
	<!-- main js -->
	<script src="public/assets/js/main.js"></script>

</body>
</html>