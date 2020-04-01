<?php
$id = $data['id'];
$url = $data['url'];
$image = $data['image'];
$image2 = !empty($data['image2']) ? $data['image2'] : '';
$image3 = !empty($data['image3']) ? $data['image3'] : '';
$image4 = !empty($data['image4']) ? $data['image4'] : '';
$name = $data['name'];
$description = $data['description'];
$detail = $data['detail'];
$discount = $data['discount_price'];
$price = number_format($data['price'], 0);
$oldPrice = 0;
if (!empty($discount)) {
    $oldPrice = $price;
    $price = number_format($data['price'] * (100 - $discount) / 100, 0);
}
?>
<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
                        <li><a href="<?php echo $BASE_URL; ?>">Sản phẩm</a></li>
                        <li><a href="javascript:void(0)" class="active"><?php echo $name; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="product-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-12 col-12 order-lg-1 order-1">
                <!-- product-main-area-start -->
                <div class="product-main-area">
                    <div class="row">
                        <div class="col-lg-5 col-md-6 col-12">
                            <div class="flexslider">
                                <ul class="slides">
                                    <li data-thumb="<?php echo $image; ?>">
                                        <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
                                    </li>
                                    <?php if (!empty($image2)): ?>
                                        <li data-thumb="<?php echo $image2; ?>">
                                            <img src="<?php echo $image2; ?>" alt="<?php echo $name; ?>" />
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($image3)): ?>
                                        <li data-thumb="<?php echo $image3; ?>">
                                            <img src="<?php echo $image3; ?>" alt="<?php echo $name; ?>" />
                                        </li>
                                    <?php endif; ?>
                                    <?php if (!empty($image4)): ?>
                                        <li data-thumb="<?php echo $image4; ?>">
                                            <img src="<?php echo $image4; ?>" alt="<?php echo $name; ?>" />
                                        </li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6 col-12">
                            <div class="product-info-main">
                                <div class="page-title">
                                    <h1><?php echo $name; ?></h1>
                                </div>
                                <div class="product-info-stock-sku">
                                    <span>In stock</span>
                                    <div class="product-attribute">
                                        <span>SKU</span>
                                        <span class="value">SACH-<?php echo $id; ?></span>
                                    </div>
                                </div>
                                <div class="product-reviews-summary">
                                    <div class="rating-summary">
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                        <a href="#"><i class="fa fa-star"></i></a>
                                    </div>
                                </div>
                                <div class="product-info-price">
                                    <div class="price-final">
                                        <span><?php echo $price; ?>đ</span>
                                        <?php if (!empty($oldPrice)): ?>
                                            <span class="old-price"><?php echo $oldPrice; ?>đ</span>
                                        <?php endif; ?>
                                    </div>
                                </div>
                                <div class="product-add-form">
                                    <form>
                                        <div class="quality-button">
                                            <input class="qty" id="quantity" min="1" type="number" value="1">
                                        </div>
                                        <a href="javascript:void(0)" onclick="return addToCart(<?php echo $id;?>);">Thêm vào giỏ hàng</a>
                                    </form>
                                </div>
                                <div class="product-social-links">
                                    <div class="product-addto-links">
                                        <a href="javascript:void(0)"><i class="fa fa-heart"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-pie-chart"></i></a>
                                        <a href="javascript:void(0)"><i class="fa fa-envelope-o"></i></a>
                                    </div>
                                    <div class="product-addto-links-text">
                                        <p><?php echo $description; ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>	
                </div>
                <!-- product-main-area-end -->
                <!-- product-info-area-start -->
                <div class="product-info-area mt-80">
                    <!-- Nav tabs -->
                    <ul class="nav">
                        <li><a class="active" href="#Details" data-toggle="tab">Thông tin chi tiết</a></li>
                        <li><a href="#Reviews" data-toggle="tab">Bình luận</a></li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="Details">
                            <div class="valu">
                                <?php echo $detail; ?>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Reviews">
                            <div class="valu valu-2">
                                <div id="fb-root"></div>
                                <script async defer crossorigin="anonymous" src="https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v5.0&appId=245530479242476&autoLogAppEvents=1"></script>
                                <div class="fb-comments" data-href="<?php echo $BASE_URL; ?>/san-pham/<?php echo $url; ?>" data-width="100%" data-numposts="10"></div>
                            </div>
                        </div>
                    </div>	
                </div>
                <!-- product-info-area-end -->
                <!-- new-book-area-start -->
                <?php if (!empty($data['discount_products'])): ?>
                    <div class="new-book-area mt-60">
                        <div class="section-title text-center mb-30">
                            <h3>Sản phẩm giảm giá</h3>
                        </div>
                        <div class="tab-active-2 owl-carousel">
                            <?php foreach ($data['discount_products'] as $v): ?>
                                <?php echo $this->element('Layout/home/product_item_2', array('product' => $v)); ?>
                            <?php endforeach; ?>
                        </div>
                    </div>
                <?php endif; ?>
            </div>
            <div class="col-lg-3 col-md-12 col-12 order-lg-2 order-2">
                <div class="shop-left">
                    <?php if (!empty($data['related_products'])): ?>
                        <div class="left-title mb-20">
                            <h4>Sản phẩm liên quan</h4>
                        </div>
                        <div class="random-area mb-30">
                            <div class="product-active-2 owl-carousel">
                                <?php
                                $count = count($data['related_products']);
                                $count = floor($count/2);
                                ?>
                                <?php for($i = 0; $i < $count; $i++): ?>
                                <div class="product-total-2">
                                    <?php echo $this->element('Layout/home/product_item_3', array('product' => $data['related_products'][$i])); ?>
                                    <?php echo $this->element('Layout/home/product_item_3', array('product' => $data['related_products'][$count + $i])); ?>
                                </div>
                                <?php endfor; ?>
                            </div>
                        </div>
                    <?php endif; ?>


                    <div class="banner-area mb-30">
                        <div class="banner-img-2">
                            <a href="<?php echo $BASE_URL;?>/khuyen-mai-hot"><img src="<?php echo $BASE_URL;?>/images/banner/33.jpg" alt="banner" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- product-main-area-end -->
