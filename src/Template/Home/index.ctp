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
                    <?php for ($i = 0; $i < 8; $i++): ?>
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <?php echo $this->element('Layout/home/product_item_1', array('i'=> $i)); ?>
                        </div>
                        <!-- single-product-end -->
                    <?php endfor; ?>
                </div>
            </div>
            <div class="tab-pane fade" id="onsale">
                <div class="tab-active owl-carousel">
                    <?php for ($i = 0; $i < 8; $i++): ?>
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <?php echo $this->element('Layout/home/product_item_1', array('i'=> $i)); ?>
                        </div>
                        <!-- single-product-end -->
                    <?php endfor; ?>
                </div>    
            </div>
            <div class="tab-pane fade" id="featured">
                <div class="tab-active owl-carousel">
                    <?php for ($i = 0; $i < 8; $i++): ?>
                        <!-- single-product-start -->
                        <div class="product-wrapper">
                            <?php echo $this->element('Layout/home/product_item_1', array('i'=> $i)); ?>
                        </div>
                        <!-- single-product-end -->
                    <?php endfor; ?>
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
                    <a href="#"><img src="<?php echo $BASE_URL; ?>/images/banner/5.jpg" alt="banner" /></a>
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
                    <a href="#"><img src="<?php echo $BASE_URL; ?>/images/kuma.png" alt="banner" /></a>
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
            <?php for ($i = 0; $i < 8; $i++): ?>
            <div class="tab-total">
                <?php for ($j = 0; $j < 2; $j++): ?>
                    <!-- single-product-start -->
                    <?php echo $this->element('Layout/home/product_item_2', array('i' => $i.$j)); ?>
                    <!-- single-product-end -->
                <?php endfor; ?>
                
            </div>
            <?php endfor; ?>

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
                    <h2>Latest from our blog</h2>
                </div>
            </div>
            <div class="post-active owl-carousel text-center">
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="#"><img src="<?php echo $BASE_URL; ?>/images/post/1.jpg" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="#">Nam tincidunt vulputate felis</a></h3>
                            <span class="meta-author"> Demo koparion </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.html"><img src="<?php echo $BASE_URL; ?>/images/post/2.jpg" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">06</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">Interdum et malesuada</a></h3>
                            <span class="meta-author"> Demo koparion </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.html"><img src="<?php echo $BASE_URL; ?>/images/post/3.jpg" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">07</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">What is Bootstrap?</a></h3>
                            <span class="meta-author"> Demo koparion </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12">
                    <div class="single-post">
                        <div class="post-img">
                            <a href="blog-details.html"><img src="<?php echo $BASE_URL; ?>/images/post/4.jpg" alt="post" /></a>
                            <div class="blog-date-time">
                                <span class="day-time">08</span>
                                <span class="moth-time">Dec</span>
                            </div>
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">Etiam eros massa</a></h3>
                            <span class="meta-author"> Demo koparion </span>
                            <p>Discover five of our favourite dresses from our new collection that are destined to be worn and loved immediately.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- recent-post-area-end -->