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
        <link rel="shortcut icon" href="<?php echo $BASE_URL;?>/favicon.ico" type="image/png">
        <meta charset="utf-8">
        <title>
            <?php echo $_title; ?>
        </title>
        <meta content="width=device-width, initial-scale=1.0, maximum-scale=2.0, user-scalable=0" name="viewport">
        <meta name="description" itemprop="description" content="<?php echo $_description; ?>" />
        <meta name="keywords" content="<?php echo $_keyword; ?>">
        
        <meta property="og:title" content="<?php echo $_title; ?>" />
        <meta property="og:type" content="article" />
        <meta property="og:url" content="<?php echo $current_url;?>" />
        <meta property="og:image" content="<?php echo $_image; ?>" />
        <meta property="og:site_name" content="<?php echo $webTitle; ?>" />
        <meta property="og:description" content="<?php echo $_description; ?>" />
       
        <meta name="twitter:card" content="summary" />
        <meta name="twitter:title" content="<?php echo $_title; ?>" />
        <meta name="twitter:description" content="<?php echo $_description; ?>" />
        <meta name="twitter:image" content="<?php echo $_image; ?>" />
        <meta itemprop="image" content="<?php echo $_image; ?>" />
        
        <meta name="generator" content="<?php echo $webTitle; ?>" />
        
        <link href="<?php echo $BASE_URL;?>/css/jquery.fancybox.css" rel="stylesheet" type="text/css" media="all">
        <style>
            #new-menu .t-menu li.saving_day_css a {
                color: red!important;
                font-weight: bold!important;
            }
        </style>
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/widgets-main.css">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/productreviews.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/jquery.raty.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/fonts.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/bootstrap.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/flex.css" media="all">
        <link rel="stylesheet" type="text/css" href="<?php echo $BASE_URL;?>/css/main.css?<?php echo $_time;?>" media="all">
        <link href="<?php echo $BASE_URL;?>/css/style_new.css?<?php echo $_time;?>" rel="stylesheet" type="text/css" media="all">
        
        <script type="text/javascript">
            var BASE_URL = '<?php echo $BASE_URL; ?>';
            var controller = '<?php echo $controller; ?>';
            var action = '<?php echo $action; ?>';
            var _csrfToken = '<?php echo $this->request->getParam('_csrfToken'); ?>';
        </script>
        
        <script src="<?php echo $BASE_URL;?>/js/jquery-1.11.3.min.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/owl.min.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/jquery.fancybox.js" type="text/javascript"></script>
        
        <script src="<?php echo $BASE_URL;?>/js/libjs.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/theme-script-min.js?<?php echo $_time;?>"></script>
        <script src="<?php echo $BASE_URL;?>/js/customer-js.js"></script>
        <script src="<?php echo $BASE_URL;?>/js/script_tfs.js?<?php echo $_time;?>" type="text/javascript"></script>
    </head>

    <body class="home option2 insCustomer">
        <?php echo $this->element('Layout/header'); ?>
        <?php echo $this->fetch('content'); ?>
        <?php echo $this->element('Layout/footer'); ?>
        <?php echo $this->element('Layout/modal'); ?>
    </body>
</html>
