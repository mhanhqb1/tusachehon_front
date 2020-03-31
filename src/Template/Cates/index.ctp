<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
                        <li><a href="javascript:void(0)" class="active"><?php echo $cateName; ?></a></li>
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
                    <?php if (!empty($data)): ?>
                    <?php foreach ($data as $v): ?>
                    <?php echo $this->element('Layout/home/post_item_1', array('post' => $v));?>
                    <?php endforeach;?>
                    <?php endif; ?>
                </div>
                <?php echo $this->Paginate->render($total, $limit); ?>
            </div>
        </div>
    </div>
</div>
<!-- blog-main-area-end -->