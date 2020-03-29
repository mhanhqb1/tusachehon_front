<?php
$webTitle = 'LyonaBeauty.Com';
$_description = !empty($pageDescription) ? $pageDescription : $_settings['company']['seo_description'];
$_keyword = !empty($pageKeyword) ? $pageKeyword : $_settings['company']['seo_keyword'];
$_title = !empty($pageTitle) ? $pageTitle : $_settings['company']['name'];
$_image = !empty($pageImage) ? $pageImage : $_settings['company']['seo_image'];
$_time = time();
?>
<!DOCTYPE html>
<html lang="vi" itemscope itemtype="http://schema.org/Article" prefix="og: http://ogp.me/ns#">
    <head>
        <link rel="shortcut icon" href="<?php echo $BASE_URL; ?>/favicon.ico" type="image/png">
        <meta charset="utf-8">
        <title>
            <?php echo $_title; ?>
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
        <meta name="description" itemprop="description" content="<?php echo $_description; ?>" />
        <meta name="keywords" content="<?php echo $_keyword; ?>">

        <meta property="og:title" content="<?php echo $_title; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $current_url; ?>" />
        <meta property="og:image" content="<?php echo $_image; ?>" />
        <meta property="og:site_name" content="<?php echo $webTitle; ?>" />
        <meta property="og:description" content="<?php echo $_description; ?>" />

        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $_title; ?>" />
        <meta name="twitter:description" content="<?php echo $_description; ?>" />
        <meta name="twitter:image" content="<?php echo $_image; ?>" />
        <meta itemprop="image" content="<?php echo $_image; ?>" />

        <meta name="generator" content="<?php echo $webTitle; ?>" />

        <!-- all css here -->
        <!-- bootstrap v3.3.6 css -->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/bootstrap.min.css">
        <!-- animate css -->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/animate.css">
        <!-- meanmenu css -->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/meanmenu.min.css">
        <!-- owl.carousel css -->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/owl.carousel.css">
        <!-- font-awesome css -->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/font-awesome.min.css">
        <!-- flexslider.css-->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/flexslider.css">
        <!-- chosen.min.css-->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/chosen.min.css">
        <!-- style css -->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/style.css">
        <!-- responsive css -->
        <link rel="stylesheet" href="<?php echo $BASE_URL; ?>/css/responsive.css">
        <!-- modernizr css -->
        <script src="<?php echo $BASE_URL; ?>/js/modernizr-2.8.3.min.js"></script>
    </head>

    <body class="home option2 insCustomer">
        <?php echo $this->element('Layout/header'); ?>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->element('Layout/footer'); ?>
        <?php echo $this->element('Layout/modal'); ?>

        <!-- all js here -->
        <!-- jquery latest version -->
        <script src="<?php echo $BASE_URL;?>/js/jquery-1.12.0.min.js"></script>
        <!-- popper js -->
        <script src="<?php echo $BASE_URL;?>/js/popper.min.js"></script>
        <!-- bootstrap js -->
        <script src="<?php echo $BASE_URL;?>/js/bootstrap.min.js"></script>
        <!-- owl.carousel js -->
        <script src="<?php echo $BASE_URL;?>/js/owl.carousel.min.js"></script>
        <!-- meanmenu js -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.meanmenu.js"></script>
        <!-- wow js -->
        <script src="<?php echo $BASE_URL;?>/js/wow.min.js"></script>
        <!-- jquery.parallax-1.1.3.js -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.parallax-1.1.3.js"></script>
        <!-- jquery.countdown.min.js -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.countdown.min.js"></script>
        <!-- jquery.flexslider.js -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.flexslider.js"></script>
        <!-- chosen.jquery.min.js -->
        <script src="<?php echo $BASE_URL;?>/js/chosen.jquery.min.js"></script>
        <!-- jquery.counterup.min.js -->
        <script src="<?php echo $BASE_URL;?>/js/jquery.counterup.min.js"></script>
        <!-- waypoints.min.js -->
        <script src="<?php echo $BASE_URL;?>/js/waypoints.min.js"></script>
        <!-- plugins js -->
        <script src="<?php echo $BASE_URL;?>/js/plugins.js"></script>
        <!-- main js -->
        <script src="<?php echo $BASE_URL;?>/js/main.js"></script>
    </body>
</html>
