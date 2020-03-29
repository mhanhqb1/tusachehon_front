<div class="page-top product-km">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12">
                <h2 class="page-heading">
                    <span class="page-heading-title">
                        KHUYẾN MÃI HOT
                    </span>
                    <span class="xemtatca"><a href="<?php echo $BASE_URL;?>/khuyen-mai-hot">Xem thêm</a></span>
                </h2>
                <div class="latest-deals-product">
                    <ul class="product-list owl-carousel">
                        <?php foreach ($hot_products as $hp): ?>
                            <li >
                                <?php echo $this->element('Layout/product_item', array('product' => $hp)); ?>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var sale = $(".product-list").owlCarousel({
        dots: false,
        nav: true,
        lazyLoad: false,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        navText: ['<i class="fa fa-angle-left"></i>', '<i class="fa fa-angle-right"></i>'],
        items: 1,
        responsive: {"0": {"items": 1}, "319": {"items": 2}, "768": {"items": 3}, "992": {"items": 4}, "1200": {"items": 5}},
        margin: 10,
        autoplay: true,
        loop: true
    });
</script>

