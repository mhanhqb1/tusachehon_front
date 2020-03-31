<?php
$name = $data['name'];
$cateName = $data['cate_name'];
$cateUrl = $BASE_URL . '/tin-tuc/' . $data['cate_url'];
$image = $data['image'];
$created = $data['created'];
$detail = $data['detail'];
$url = $BASE_URL . '/bai-viet/' . $data['url'];
?>
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
                        <li><a href="<?php echo $cateUrl; ?>"><?php echo $cateName; ?></a></li>
                        <li><a href="javascript:void(0)" class="active"><?php echo $name; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- blog-main-area-start -->
<div class="blog-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-12 order-lg-1 order-2 mt-sm-50">
                <div class="single-blog mb-50">
                    <div class="blog-left-title">
                        <h3>Danh mục sản phẩm</h3>
                    </div>
                    <div class="blog-side-menu">
                        <ul>
                            <?php if (!empty($_settings['product_cates'])): ?>
                                <?php foreach ($_settings['product_cates'] as $v): ?>
                                    <li><a href="<?php echo $BASE_URL; ?>/danh-muc/<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a></li>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                </div>
                <?php if (!empty($discountProducts)): ?>
                    <div class="single-blog mb-50">
                        <div class="blog-left-title">
                            <h4>Sản phẩm giảm giá</h4>
                        </div>
                        <div class="random-area mb-30">
                            <div class="product-active-2 owl-carousel">
                                <?php
                                $count = count($discountProducts);
                                $count = floor($count / 2);
                                ?>
                                <?php for ($i = 0; $i < $count; $i++): ?>
                                    <div class="product-total-2">
                                        <?php echo $this->element('Layout/home/product_item_3', array('product' => $discountProducts[$i])); ?>
                                        <?php echo $this->element('Layout/home/product_item_3', array('product' => $discountProducts[$count + $i])); ?>
                                    </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">
                <div class="blog-main-wrapper">
                    <div class="author-destils mb-30">
                        <div class="author-left">
                            <div class="author-img">
                                <a href="<?php echo $BASE_URL; ?>"><img src="<?php echo $BASE_URL; ?>/images/logo.jpg" alt="tusachehon.com" /></a>
                            </div>
                            <div class="author-description">
                                <p>Đăng bởi: 
                                    <a href="<?php echo $BASE_URL; ?>"><span>Admin</span></a>
                                </p>
                                <span><?php echo date('Y-m-d', $created); ?></span>
                            </div>
                        </div>
                        <div class="author-right">
                            <span>Chia sẻ:</span>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="blog-img mb-30">
                        <a href="<?php echo $url; ?>"><img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" /></a>
                    </div>
                    <div class="single-blog-content">
                        <div class="single-blog-title">
                            <h3><a href="<?php echo $url; ?>"><?php echo $name; ?></a></h3>
                        </div>
                        <div class="blog-single-content">
                            <p><?php echo $detail; ?></p>
                        </div>
                    </div>
                    <div class="comment-title-wrap mt-30">
                        <h3>Bình luận</h3>
                    </div>
                    <div class="comment-reply-wrap mt-50">
                        <div id="fb-root"></div>
                        <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=245530479242476&autoLogAppEvents=1"></script>
                        <div class="fb-comments" data-href="<?php echo $url; ?>" data-width="100%" data-numposts="10"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- blog-main-area-end -->