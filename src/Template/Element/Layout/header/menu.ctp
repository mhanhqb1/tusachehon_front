<div class="main-menu-area d-md-none d-none d-lg-block sticky-header-1" id="header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="menu-area">
                    <nav>
                        <ul>
                            <li class="active">
                                <a href="<?php echo $BASE_URL; ?>">Trang chủ</a>
                            </li>
                            <li>
                                <a href="<?php echo $BASE_URL; ?>/gioi-thieu">Giới thiệu</a>
                            </li>
                            <li><a href="#">Sản phẩm<i class="fa fa-angle-down"></i></a>
                                <div class="sub-menu sub-menu-2">
                                    <ul>
                                        <?php if (!empty($_settings['product_cates'])): ?>
                                        <?php foreach ($_settings['product_cates'] as $v): ?>
                                        <li><a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a></li>
                                        <?php endforeach; ?>
                                        <?php endif; ?>
                                    </ul>
                                </div>
                            </li>
                            <?php if (!empty($_settings['blog_cates'])): ?>
                                <?php foreach ($_settings['blog_cates'] as $v): ?>
                                    <li><a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                            <li>
                                <a href="<?php echo $BASE_URL; ?>/khuyen-mai-hot">Khuyến mãi</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- main-menu-area-end -->
<!-- mobile-menu-area-start -->
<div class="mobile-menu-area d-lg-none d-block fix">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="mobile-menu">
                    <nav id="mobile-menu-active">
                        <ul id="nav">
                            <li>
                                <a href="<?php echo $BASE_URL; ?>">Trang chủ</a>
                            </li>
                            <li>
                                <a href="<?php echo $BASE_URL; ?>">Giới thiệu</a>
                            </li>
                            <li>
                                <a href="<?php echo $BASE_URL; ?>/san-pham">Sản phẩm</a>
                                <ul>
                                    <li><a href="blog.html">Combo sách</a></li>
                                    <li><a href="blog-details.html">Sách cho bé 0-2 tuổi</a></li>
                                    <li><a href="blog-details.html">Sách cho bé 2-4 tuổi</a></li>
                                    <li><a href="blog-details.html">Sách cho bé 4-6 tuổi</a></li>
                                    <li><a href="blog-details.html">Sách cho bé 6-8 tuổi</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="product-details.html">Tin tức</a>
                            </li>
                            <li>
                                <a href="#">Bí kíp nuôi dạy con</a>
                            </li>
                            <li>
                                <a href="#">Khuyến mãi</a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>