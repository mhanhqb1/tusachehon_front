<div id="collection">
    <div class="columns-container">
        <div class="container" id="columns">
            <!--breadcrumb-->
            <div class="breadcrumb clearfix">
                <div class="tfsBreadcrumb ">
                    <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                        <li><a href="<?php echo $BASE_URL;?>" target="_self">Trang chủ</a></li>
                        <li><a href="#">Danh mục</a></li>
                        <li class="active"><span><?php echo $cateName;?></span></li>
                    </ol>
                </div>
            </div>
            <!--/breadcrumb-->
            <div class="row">
                <!-- Left colunm -->
                <div class="column col-xs-12 col-sm-3" id="left_column">
                    <?php echo $this->element('Layout/product_left');?>
                </div>
                
                <!--/left_column-->
                <!--right_column-->
                <div class="center_column col-xs-12 col-sm-9 product-col" id="center_column">
                    <div id="view-product-list" class="view-product-list">
                        <h2 class="page-heading">
                            <span class="page-heading-title">Tất cả sản phẩm</span>
                        </h2>
                        <!--browse-tags-->
                        <div class="browse-tags">
                            <span class="hidden-xs">Sắp xếp theo:</span>
                            <span class="custom-dropdown custom-dropdown--white">
                                <select class="sort-by custom-dropdown__select custom-dropdown__select--white">
                                    <option value="manual">Sản phẩm nổi bật</option>
                                    <option value="price-ascending">Giá: Tăng dần</option>
                                    <option value="price-descending">Giá: Giảm dần</option>
                                    <option value="title-ascending">Tên: A-Z</option>
                                    <option value="title-descending">Tên: Z-A</option>
                                    <option value="created-ascending">Cũ nhất</option>
                                    <option value="created-descending">Mới nhất</option>
                                    <option value="best-selling">Bán chạy nhất</option>
                                </select>
                            </span>
                        </div>
                        <!--/browse-tags-->
                        <!--product-list-->
                        <ul class="row product-list grid filter">
                            <?php if (!empty($data)): ?>
                            <?php foreach ($data as $v): ?>
                                <li class="col-md-4 col-sm-6 col-xs-6">
                                    <div class="product-container">
                                        <?php echo $this->element('Layout/product_item', array('product' => $v)); ?>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            <?php endif;?>
                        </ul>
                        <!--/product-list-->
                        <!--pagination-->
                        <?php echo $this->Paginate->render($total, $limit); ?>
                        <!--/pagination-->
                    </div>
                </div>
                <!--/right_column-->
            </div>
        </div>
    </div>
</div>