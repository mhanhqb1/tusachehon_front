<svg xmlns="http://www.w3.org/2000/svg" class="hidden"> 
    <symbol id="icon-add-cart">
        <svg xmlns="http://www.w3.org/2000/svg"   xmlns:xlink="http://www.w3.org/1999/xlink"  x="0px" y="0px"
             viewBox="0 0 512 512" enable-background="new 0 0 512 512">
            <g >
                <g>
                    <polygon points="447.992,336 181.555,336 69.539,80 0.008,80 0.008,48 90.477,48 202.492,304 447.992,304   "/>
                </g>
                <path d="M287.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S287.992,389.5,287.992,416z"/>
                <path d="M447.992,416c0,26.5-21.5,48-48,48s-48-21.5-48-48s21.5-48,48-48S447.992,389.5,447.992,416z"/>
                <g>
                    <polygon points="499.18,144 511.992,112 160.008,112 172.805,144   "/>
                    <polygon points="211.195,240 223.992,272 447.992,272 460.805,240   "/>
                    <polygon points="486.398,176 185.602,176 198.398,208 473.586,208   "/>
                </g>
            </g>
        </svg>
    </symbol>
    <symbol id="icon-search_white" viewBox="0 0 1024 1024">
        <path class="path1" d="M1014.176 968.256l-264.32-260.128c69.184-75.264 111.68-174.688 111.68-284.128 0-234.080-192.8-423.872-430.688-423.872s-430.72 189.792-430.72 423.872c0 234.112 192.864 423.872 430.72 423.872 102.752 0 197.088-35.552 271.072-94.688l265.376 261.12c12.928 12.736 33.952 12.736 46.88 0 12.96-12.672 12.96-33.376 0-46.048zM430.848 782.688c-201.312 0-364.48-160.64-364.48-358.688 0-198.080 163.168-358.656 364.48-358.656 201.28 0 364.448 160.576 364.448 358.656 0.032 198.048-163.168 358.688-364.448 358.688z"></path>
    </symbol>
    <symbol id="icon-user" viewBox="0 0 1024 1024">
        <title>user</title>
        <path class="path1" d="M622.826 702.736c-22.11-3.518-22.614-64.314-22.614-64.314s64.968-64.316 79.128-150.802c38.090 0 61.618-91.946 23.522-124.296 1.59-34.054 48.96-267.324-190.862-267.324s-192.45 233.27-190.864 267.324c-38.094 32.35-14.57 124.296 23.522 124.296 14.158 86.486 79.128 150.802 79.128 150.802s-0.504 60.796-22.614 64.314c-71.22 11.332-337.172 128.634-337.172 257.264h896c0-128.63-265.952-245.932-337.174-257.264z"></path>
    </symbol>
</svg>

<?php echo $this->element('Layout/header/mobile_menu'); ?>

<div id="mm-0" class="mm-page mm-slideout">
    <div id="header" class="header">
        <!--Desktop Header-->
        <div class="headMain hidden-sm hidden-xs">
            <div class="container main-header">
                <div class="row">
                    <!--infoShop-->
                    <div class="col-xs-10 col-sm-3 col-md-4 logo">
                        <div class="infoShop">
                            <ul class="list line clearfix">
                                <li><i class="fa fa-phone" aria-hidden="true"></i> <?php echo $_settings['company']['tel']; ?></li>
                                <li><i class="fa fa-envelope" aria-hidden="true"></i> <?php echo $_settings['company']['email']; ?></li>
                            </ul>
                        </div>
                    </div>
                    <!--/infoShop-->
                    <!--search-box-->
                    <div class="col-xs-1 col-sm-6 col-md-5 header-search-box hidden-xs">
                        <a href="javascript:;" class="visible-xs show-search-mobile"><i class="fa fa-search" aria-hidden="true"></i></a>
                        <div class="search-box">
                            <form class="search form-inline ultimate-search" action="<?php echo $BASE_URL; ?>/tim-kiem">
                                <div class="form-group input-serach">
                                    <input type="text" name="name" id="search" class="search_box" placeholder="Tìm kiếm..." value="" autocomplete="off">
                                </div>
                                <button id="submit-button" class="pull-right btn-search">
                                    <span class="hidden-xs">Tìm kiếm</span>
                                    <span class="visible-xs">
                                        <svg class="icon-search_white">
                                            <use xmlns:xlink="//www.w3.org/1999/xlink" xlink:href="#icon-search_white"></use>
                                        </svg>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <!--/search-box-->
                    <!--Top right menus-->
                    <div class="col-xs-2 col-sm-3 col-md-3">
                        <div class="social-link social-link-top pull-right">
                            <?php if (!empty($_settings['company']['facebook'])): ?>
                            <a href="<?php echo $_settings['company']['facebook'];?>" target="_blank" rel="nofollow"><i class="fa fa-facebook"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['youtube'])): ?>
                            <a href="<?php echo $_settings['company']['youtube'];?>" target="_blank" rel="nofollow"><i class="fa fa-youtube"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['google_plus'])): ?>
                            <a href="<?php echo $_settings['company']['google_plus'];?>" target="_blank" rel="nofollow"><i class="fa fa-google-plus"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['instagram'])): ?>
                            <a href="<?php echo $_settings['company']['instagram'];?>" target="_blank" rel="nofollow"><i class="fa fa-instagram"></i></a>
                            <?php endif; ?>
                            <?php if (!empty($_settings['company']['zalo'])): ?>
                            <a href="<?php echo $_settings['company']['zalo'];?>" target="_blank" rel="nofollow"><img class="image-icon-footer" src="https://file.hstatic.net/1000036599/file/zalo.png"></a>
                            <?php endif; ?>
                        </div>
                    </div>
                    <!--/Top right menus-->
                </div>
            </div>
        </div>
        <!--/Desktop Header-->
        <!--navMain-->
        <div class="navMain">
            <div class="container main-header">
                <div class="row">
                    <!--mainLogo-->
                    <div class="col-xs-12 col-sm-12 col-md-3 logo">
                        <div class="mainLogo">
                            <a href="#nav-menu" class="mm-icon-menu visible-sm visible-xs"><span></span></a>
                            <div>
                                <a href="<?php echo $BASE_URL; ?>">
                                    <img alt="<?php echo $_settings['company']['name']; ?>" src="<?php echo $_settings['company']['logo']; ?>">
                                </a>
                            </div>
                        </div>
                    </div>
                    <!--/mainLogo-->
                    <!--mainDesktopMenus-->
                    <div class="col-xs-1 col-sm-6 col-md-7 header-search-box hidden-sm hidden-xs">
                        <?php echo $this->element('Layout/header/menu'); ?>
                    </div>
                    <!--/mainDesktopMenus-->
                    <!--Account + Cart buttons-->
                    <div class="col-xs-2 col-sm-2 col-md-2 group-button-header">
                        <div class="deskBtn">
                            <!--cart-block-->
                            <div class="btn-cart" id="cart-block">
                                <a title="My cart" href="<?php echo $BASE_URL; ?>/gio-hang" class="hidden-sm hidden-xs">Giỏ hàng</a>
                                <span class="text-show hidden-sm hidden-xs">Giỏ hàng</span>
                                <span class="notify notify-right"><?php echo!empty($cart['total']) ? $cart['total'] : 0; ?></span>
                                <a href="<?php echo $BASE_URL; ?>/gio-hang" class="visible-sm visible-xs cartMB">
                                    <svg class="shopping-cart">
                                        <use xmlns:xlink="//www.w3.org/1999/xlink" xlink:href="#icon-add-cart"></use>
                                    </svg>
                                </a>
                                <div class="cart-block">
                                    <?php if (!empty($cart)): ?>
                                        <?php echo $cart['html']; ?>
                                    <?php else: ?>
                                        <div class="cart-empty">
                                            Giỏ hàng của bạn vẫn chưa có sản phẩm nào.
                                        </div>
                                    <?php endif; ?>

                                </div>
                            </div>
                            <!--/cart-block-->
                        </div>
                    </div>
                    <!--/Account + Cart buttons-->

                </div>
            </div>
        </div>
        <!--/navMain-->
    </div>
</div>