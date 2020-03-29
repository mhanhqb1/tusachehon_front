
<div class="block left-module hidden-xs">
    <h1 class="title_block">Danh mục sản phẩm</h1>
    <div class="block_content">
        <!-- layered -->
        <div class="layered layered-category">
            <div class="layered-content show">
                <ul class="tree-menu">
                    <?php if (!empty($productCates)): ?>
                        <?php foreach ($productCates as $pc): ?>
                            <li class="<?php echo!empty($pc['child_data']) ? 'has-child' : ''; ?>">
                                <span></span>
                                <a class="dropdown-toggle has-category parent" href="<?php echo $BASE_URL . '/danh-muc/' . $pc['data']['url']; ?>" title="<?php echo $pc['data']['name']; ?>" target="_self">
                                    <span class=""><?php echo $pc['data']['name']; ?></span>
                                </a>
                                <?php if (!empty($pc['child_data'])): ?>
                                    <ul class="sc2" role="menu">
                                        <?php foreach ($pc['child_data'] as $cv): ?>
                                            <li class="clearfix" >
                                                <span></span>
                                                <a href="<?php echo $BASE_URL . '/danh-muc/' . $cv['url']; ?>" title="<?php echo $cv['name']; ?>"><?php echo $cv['name']; ?></a>
                                            </li>
                                        <?php endforeach; ?>
                                    </ul>
                                <?php endif; ?>
                            </li>
                        <?php endforeach; ?>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
        <!-- /layered -->
    </div>
</div>
