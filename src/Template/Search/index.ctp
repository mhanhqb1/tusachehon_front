<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
                        <li><a href="javascript:void(0)" class="active"><?php echo $pageTitle; ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- shop-main-area-start -->
<div class="shop-main-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-12 order-lg-1 order-2 mt-sm-50 mt-xs-40">
                <div class="shop-left">
                    <div class="left-title mb-20">
                        <h4>Danh mục</h4>
                    </div>
                    <div class="left-menu mb-30">
                        <ul>
                            <?php if (!empty($_settings['product_cates'])): ?>
                            <?php foreach ($_settings['product_cates'] as $v): ?>
                            <li><a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $v['url']; ?>"><?php echo $v['name']; ?></a></li>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <?php if (!empty($discountProducts)): ?>
                    <div class="left-title mb-20">
                        <h4>Sản phẩm giảm giá</h4>
                    </div>
                    <div class="random-area mb-30">
                        <div class="product-active-2 owl-carousel">
                            <?php
                                $count = count($discountProducts);
                                $count = floor($count/2);
                                ?>
                                <?php for($i = 0; $i < $count; $i++): ?>
                                <div class="product-total-2">
                                    <?php echo $this->element('Layout/home/product_item_3', array('product' => $discountProducts[$i])); ?>
                                    <?php echo $this->element('Layout/home/product_item_3', array('product' => $discountProducts[$count + $i])); ?>
                                </div>
                                <?php endfor; ?>
                        </div>
                    </div>
                    <?php endif;?>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-12 order-lg-2 order-1">
                <div class="section-title-5 mb-30">
                    <h2><?php echo $cateName;?></h2>
                </div>
                <div class="toolbar mb-30">
                    <div class="shop-tab">
                        <div class="tab-3">
                            <ul class="nav">
                                <li><a href="#th" data-toggle="tab"><i class="fa fa-th-large"></i>Grid</a></li>
                                <li><a class="active" href="#list" data-toggle="tab"><i class="fa fa-bars"></i>List</a></li>
                            </ul>
                        </div>
                        <div class="list-page">
                            <p>Có <?php echo $total;?> sản phẩm</p>
                        </div>
                    </div>
<!--                    <div class="field-limiter">
                        <div class="control">
                            <span>Show</span>
                             chosen-start 
                            <select data-placeholder="Default Sorting" style="width:50px;" class="chosen-select" tabindex="1">
                                <option value="Sorting">1</option>
                                <option value="popularity">2</option>
                                <option value="rating">3</option>
                                <option value="date">4</option>
                            </select>
                             chosen-end 
                        </div>
                    </div>
                    <div class="toolbar-sorter">
                        <span>Sort By</span>
                        <select id="sorter" class="sorter-options" data-role="sorter">
                            <option selected="selected" value="position"> Position </option>
                            <option value="name"> Product Name </option>
                            <option value="price"> Price </option>
                        </select>
                        <a href="#"><i class="fa fa-arrow-up"></i></a>
                    </div>-->
                </div>
                <!-- tab-area-start -->
                <div class="tab-content">
                    <div class="tab-pane fade" id="th">
                        <div class="row">
                            <?php if (!empty($data)): ?>
                            <?php foreach ($data as $v): ?>
                            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
                                <?php echo $this->element('Layout/home/product_item_2', array('product' => $v));?>
                            </div>
                            <?php endforeach; ?>
                            <?php endif; ?>
                        </div>
                    </div>
                    <div class="tab-pane fade show active" id="list">
                        <?php if (!empty($data)): ?>
                        <?php foreach ($data as $v): ?>
                            <?php echo $this->element('Layout/home/product_item_4', array('product' => $v));?>
                        <?php endforeach; ?>
                        <?php endif; ?>
                    </div>
                </div>
                <?php echo $this->Paginate->render($total, $limit); ?>
            </div>
        </div>
    </div>
</div>
<!-- shop-main-area-end -->