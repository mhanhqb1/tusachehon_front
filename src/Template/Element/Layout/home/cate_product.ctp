<?php
$cps = array();
$_pcs = array();
foreach ($cate_products as $_cp) {
    $cps[$_cp['cate_id']][] = $_cp;
}
foreach ($productCates as &$v) {
    if (empty($v['child_data'])) {
        $v['child_data'] = array(
            $v['data']['id'] => $v['data']
        );
    }
}
foreach ($productCates as $k => &$v) {
    if (!empty($v['data']['is_homepage'])) {
        $_pcs[$k] = $v;
        foreach ($v['child_data'] as $ck => $c) {
            if (!empty($cps[$ck])) {
                $_pcs[$k]['child_data'][$ck]['products'] = $cps[$ck];
            }
        }
    }
}
?>
<div class="content-page">
    <div class="container">
        <?php foreach ($_pcs as $v): ?>
        <?php if (!empty($v['data']['is_homepage'])): ?>
        <div class="category-featured fashion">
            <nav class="navbar nav-menu show-brand">
                <div class="container">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-brand">
                        <a href="<?php echo $BASE_URL.'/danh-muc/'.$v['data']['url'];?>"><?php echo $v['data']['name'];?></a>
                    </div>
                    <span class="toggle-menu"></span>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav">
                            <?php if (!empty($v['child_data'])): ?>
                                <?php $stt = 0; ?>
                                <?php foreach ($v['child_data'] as $ck => $cv): ?>
                                    <?php if (!empty($cv['is_homepage'])): ?>
                                        <li <?php echo ($stt == 0) ? "class='active'" : "";?>>
                                            <a data-toggle="tab" data-check="false" href="#tab-1-<?php echo $ck;?>"><?php echo $cv['name'];?></a>
                                        </li>
                                        <?php $stt++;?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div><!-- /.navbar-collapse -->
                </div><!-- /.container-fluid -->
            </nav>
            <div class="product-featured clearfix">
                <div class="row">
                    <div class="col-sm-2 sub-category-wapper">
                        <ul class="sub-category-list">
                            <?php if (!empty($v['child_data'])): ?>
                                <?php foreach ($v['child_data'] as $ck => $cv): ?>
                                    <?php if (!empty($cv['is_homepage'])): ?>
                                        <li><a href="<?php echo $BASE_URL.'/danh-muc/'.$cv['url'];?>"><?php echo $cv['name'];?></a></li>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </ul>
                    </div>
                    <!--Tabs contents-->
                    <div class="col-sm-10 col-right-tab">
                        <div class="product-featured-tab-content">
                            <div class="tab-container">
                                <?php if (!empty($v['child_data'])): ?>
                                <?php $stt = 0; ?>
                                <?php foreach ($v['child_data'] as $ck => $cv): ?>
                                    <?php if (!empty($cv['is_homepage'])): ?>
                                    <!--tab-1-1-->
                                    <div class="tab-panel <?php echo ($stt == 0) ? 'active' : '';?>" id="tab-1-<?php echo $ck;?>">
                                        <div class="box-full clearfix">
                                            <ul class="product-list">
                                                <?php if (!empty($cv['products'])): ?>
                                                <?php foreach ($cv['products'] as $p): ?>
                                                <li class="col-xs-6 ">
                                                    <?php echo $this->element('Layout/product_item', array('product' => $p)); ?>
                                                </li>
                                                <?php endforeach; ?>
                                                <?php endif; ?>
                                            </ul>
                                        </div>
                                        <!--/box-full-->
                                    </div>
                                    <!--/tab-1-1-->
                                    <?php $stt++;?>
                                    <?php endif; ?>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                    </div>
                    <!--/Tabs contents-->
                </div>
            </div>
        </div>
        <?php endif; ?>
        <?php endforeach; ?>
    </div>
</div>

