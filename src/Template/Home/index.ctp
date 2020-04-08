<!-- banner-area-start -->
<?php echo $this->element('Layout/home/banner'); ?>
<!-- banner-area-end -->
<!-- slider-area-start -->
<?php echo $this->element('Layout/home/slider'); ?>
<!-- slider-area-end -->
<!-- product-area-start -->
<div class="product-area pt-95 xs-mb">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-50">
                    <h2>TOP sản phẩm</h2>
                </div>
            </div>
            <div class="col-lg-12">
                <!-- tab-menu-start -->
                <div class="tab-menu mb-40 text-center">
                    <ul class="nav justify-content-center">
                        <li><a class="active" href="#newproducts" data-toggle="tab">Sản phẩm mới </a></li>
                        <li><a href="#onsale" data-toggle="tab">Khuyến mãi</a></li>
                        <li><a href="#featured" data-toggle="tab">Sản phẩm nổi bật</a></li>
                    </ul>
                </div>
                <!-- tab-menu-end -->
            </div>
        </div>
        <!-- tab-area-start -->
        <div class="tab-content">
            <div class="tab-pane fade show active" id="newproducts">
                <div class="tab-active owl-carousel">
                    <?php if (!empty($data['new_products'])): ?>
                    <?php foreach ($data['new_products'] as $v): ?>
                    <div class="product-wrapper">
                        <?php echo $this->element('Layout/home/product_item_1', array('product'=> $v)); ?>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="onsale">
                <div class="tab-active owl-carousel">
                    <?php if (!empty($data['discount_products'])): ?>
                    <?php foreach ($data['discount_products'] as $v): ?>
                    <div class="product-wrapper">
                        <?php echo $this->element('Layout/home/product_item_1', array('product'=> $v)); ?>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>    
            </div>
            <div class="tab-pane fade" id="featured">
                <div class="tab-active owl-carousel">
                    <?php if (!empty($data['hot_products'])): ?>
                    <?php foreach ($data['hot_products'] as $v): ?>
                    <div class="product-wrapper">
                        <?php echo $this->element('Layout/home/product_item_1', array('product'=> $v)); ?>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <!-- tab-area-end -->
    </div>
</div>
<!-- product-area-end -->
<!-- banner-area-start -->
<div class="banner-area-5 mtb-95">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="banner-img-2">
                    <a href="<?php echo $BASE_URL;?>/khuyen-mai-hot"><img src="<?php echo $BASE_URL; ?>/images/banner/5.jpg" alt="banner" /></a>
                    <div class="banner-text">
                        <h3>Khuyến mãi HOT</h3>
                        <h2>Giảm giá lên tới 30% trên tổng hóa đơn</h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner-area-end -->
<!-- bestseller-area-start -->
<div class="bestseller-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-12">
                <div class="bestseller-content">
                    <h1>Sản phẩm HOT</h1>
                    <h2>KUMA Làm quen với môn toán</h2>
                    <p>Bộ sách phát triển thùy trán, thùy não giúp trẻ tư duy và sự sáng tạo của con sẽ được khai thác tối đa, giúp bé làm quen với các con số một cách dễ dàng...</p>
                </div>
                <div class="banner-img-2">
                    <a href="https://tusachehon.com/san-pham/kuma-lam-quen-voi-mon-toan-4-cuon"><img src="<?php echo $BASE_URL; ?>/images/kuma.png" alt="banner" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- bestseller-area-end -->
<!-- new-book-area-start -->
<div class="new-book-area pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title bt text-center pt-100 mb-30 section-title-res">
                    <h2>Danh sách sản phẩm</h2>
                </div>
            </div>
        </div>
        <div class="tab-active owl-carousel">
            <?php if (!empty($data['new_products'])): ?>
            <?php
            $count = count($data['new_products']);
            $count = floor($count/2);
            ?>
                <?php for($i = 0; $i < $count; $i++): ?>
                <div class="tab-total">
                    <?php echo $this->element('Layout/home/product_item_2', array('product' => $data['new_products'][$i])); ?>
                    <?php echo $this->element('Layout/home/product_item_2', array('product' => $data['new_products'][$count + $i])); ?>
                </div>
                <?php endfor; ?>
            <?php endif; ?>
        </div>
    </div>
</div>
<!-- testimonial-area-start -->
<div class="testimonial-area ptb-100 bg">
    <div class="container">
        <div class="row">
            <div class="testimonial-active owl-carousel">
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>Ba bé mua về đủ sách, mà bé chỉ mê Giri và cáo Ken thôi, đặc biệt là cáo Ken ấy. Ngày nào cũng lật xem mà ảnh nhìn chăm chăm mãi thôi, hi, mình cũng có duyên khi biết đến TuSachEhon.Com ạ.</p>
                            <a href="#">Hoài Linh Nguyễn</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-testimonial text-center">
                        <div class="testimonial-img">
                            <a href="#"><i class="fa fa-quote-right"></i></a>
                        </div>
                        <div class="testimonial-text">
                            <p>Truyện hay quá TuSachEhon.Com ơi! Mình mới nhận hàng đã mở ra xem ngay, mới xem được 2 bộ thui mà hay quá trời phải nhắn tin ngay cho shop, thế này phải mua hết sách của shop mất thôi. Sách đóng gói siêu cẩn thận và rất gọn nhẹ.</p>
                            <a href="#">Yan Chui Xiang</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial-area-end -->
<!-- recent-post-area-start -->
<div class="recent-post-area pt-95 pb-100">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title text-center mb-30 section-title-res">
                    <h2>Bài viết mới nhất</h2>
                </div>
            </div>
            <div class="post-active owl-carousel text-center">
                <?php if (!empty($data['posts'])): ?>
                <?php foreach ($data['posts'] as $v): ?>
                <?php echo $this->element('Layout/home/post_item', array('post' => $v));?>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<!-- recent-post-area-end -->