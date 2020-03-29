<?php if (!empty($data)): ?>
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="tfsBreadcrumb ">
            <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                <li><a href="<?php echo $BASE_URL; ?>" target="_self">Trang chủ</a></li>
                <li><a href="#">Sản phẩm</a></li>
                <li class="active"><span> <?php echo $data['name']; ?></span></li>
            </ol>
        </div>
        <!-- /breadcrumb -->
        <!-- product -->
        <div id="product">
            <div class="primary-box row">
                <!-- image left -->
                <div class="pb-left-column col-xs-12 col-md-6">
                    <div id="product-img" class="clearfix">
                        <img src="<?php echo $data['image']; ?>" class="img-responsive"/>
                    </div>
                </div>
                <!-- /image left -->
                <!--info right-->
                <div class="pb-right-column col-xs-12 col-md-6">
                    <h1 class="product-name"><?php echo $data['name']; ?></h1>
                    <div class="product-price-group">
                        <?php if (!empty($data['discount_price'])): ?>
                            <span class="price" data-price="<?php echo $data['price'] - $data['discount_price']; ?>"><?php echo number_format($data['price'] - $data['discount_price']); ?>₫</span>
                            <span class="old-price"><?php echo number_format($data['price']); ?>₫</span>
                        <?php else: ?>
                            <span class="price" data-price="<?php echo $data['price']; ?>₫"><?php echo number_format($data['price']); ?>₫</span>
                        <?php endif; ?>
                    </div>
                    <!--product infos-->
                    <div class="product-info clearfix">
                        <p class="info-item col-xs-12 col-sm-6">
                            <label>Dòng sản phẩm</label>
                            <span>
                                <a href="<?php echo $BASE_URL . '/danh-muc/' . $data['cate_url']; ?>"><?php echo $data['cate_name']; ?></a>
                            </span>
                        </p>
                    </div>
                    <!--/product infos-->
                    <!--actions-->
                    <div class="action product-desc">
                        <div class="select-wrapper clearfix">
                            <label>Số lượng</label>
                            <select id="quantity" name="quantity">
                                <?php for ($i = 1; $i < 100; $i++): ?>
                                    <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                                <?php endfor; ?>
                            </select>
                            <?php if (!empty($_settings['company']['tel'])): ?>
                                <div class="info-buynow pull-right">
                                    <p class="text-center" data-gtm-vis-has-fired-2408055_54="1">
                                        <strong>Tư vấn bán hàng</strong>
                                    </p>
                                    <div class="hotline clearfix">
                                        <div class="hotline-icon">
                                            <i class="fa fa-phone" aria-hidden="true"></i>
                                        </div>
                                        <div class="hotline-text text-center" data-gtm-vis-has-fired-2408055_54="1">
                                            <span class="hotline-color"><?php echo $_settings['company']['tel']; ?></span>
                                        </div>
                                    </div>
                                </div>
                            <?php endif; ?>
                        </div>
                        <div class="clearfix">
                            <div class="action-cart pull-left">
                                <a href="javascript:;" class="btn-cart add-cart " onclick="return addToCart(<?php echo $data['id'];?>)">Thêm vào giỏ<span>(Mua nhiều, lợi nhiều)</span></a>
                            </div>
                            <div class="action-cart pull-right" style="margin-right: 0">
                                <a href="javascript:;" class="buy-now available " onclick="return addToCart2(<?php echo $data['id'];?>)">Mua nhanh<span>(Đặt ngay, gần hết hàng)</span></a>
                            </div>
                        </div>
                        <div class="privacy-bg">
                            <div class="clearfix">
                                <div class="privacy-left pull-left">
                                    <p>Thanh toán khi nhận hàng trên toàn quốc</p>
                                    <span></span>
                                </div>
                                <div class="privacy-right pull-left">
                                    <p class="doitra">Giao hàng toàn quốc</p>
                                    <p class="vanchuyen">Giao hàng đảm bảo</p>
                                    <p class="thanhtoan">Nhiều cách thanh toán</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end actions-->
                </div>
                <!--/info right-->
            </div>
        </div>
        <!-- /product -->
        <!--Product detail bottom row-->
        <div class="row">
            <?php if (!empty($data['new_products'])): ?>
            <div class="column col-xs-12 hidden-xs col-sm-3" id="left_column">
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                    </ul>
                </div>
                <!--./left silde-->
                <div class="block left-module">
                    <p class="title_block">Sản phẩm mới</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list owl-carousel-3" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                            <?php foreach ($data['new_products'] as $np): ?>
                                <li>
                                    <div class="product-container">
                                        <?php echo $this->element('Layout/product_item', array('product' => $np)); ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    </div>
                </div>
                <script>
                    $(document).ready(function () {
                        $(".owl-carousel-3").owlCarousel({
                            dots: true,
                            nav: false,
                            items: 1,
                            margin: 30,
                            loop: true
                        });
                    })
                </script>
            </div>
            <?php endif;?>
            
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- tab product -->
                <div class="product-tab">
                    <ul class="nav-tab">
                        <li class="active">
                            <a aria-expanded="false" data-toggle="tab" href="#product-detail">Thông tin sản phẩm</a>
                        </li>
                    </ul>
                    <div class="tab-container">
                        <div id="product-detail">
                            <?php echo $data['detail']; ?>
                        </div>
                    </div>
                </div>
                <!-- /tab product -->
            </div>
        </div>
        <!--/Product detail bottom row-->
    </div>
</div>
<?php endif; ?>