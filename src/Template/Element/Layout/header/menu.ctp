<div id="navMaiaMenu" class="navbarNav">
    <ul class="list nav">
        <li class="active">
            <a class=" current " href="<?php echo $BASE_URL; ?>" target="_self">
                Trang chủ
            </a>
        </li>
        <li class="">
            <a class="" href="<?php echo $BASE_URL; ?>/gioi-thieu-cong-ty" target="_self">
                Giới thiệu công ty
            </a>
        </li>
        <li class="hasChild megaItem ">
            <a class=" " href="#" title="Dòng sản phẩm" target="_self">
                <span class="">Dòng sản phẩm</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <div class="tfsDropdow levelMega">
                <div class="row">
                    <?php if (!empty($productCates)): ?>
                    <?php foreach ($productCates as $pc): ?>
                    <div class="col-md-2 columnMega">
                        <div class="wrap">
                            <ul class="list">
                                <li class="head"><a href="<?php echo $BASE_URL.'/danh-muc/'.$pc['data']['url']; ?>"><?php echo $pc['data']['name'];?></a></li>
                                <?php if (!empty($pc['child_data'])): ?>
                                <?php foreach ($pc['child_data'] as $pcc): ?>
                                <li>
                                    <a href="<?php echo $BASE_URL.'/danh-muc/'.$pcc['url']; ?>" title="<?php echo $pcc['name'];?>">
                                        <span><?php echo $pcc['name'];?></span>
                                    </a>
                                </li>
                                <?php endforeach; ?>
                                <?php endif;?>
                            </ul>
                        </div>
                    </div>
                    <?php endforeach; ?>
                    <?php endif; ?>
                </div>
            </div>
        </li>
        <li class="hasChild">
            <a class="" href="#" title="Blog làm đẹp" target="_self">
                <span class="">Blog làm đẹp</span> <i class="fa fa-angle-down" aria-hidden="true"></i>
            </a>
            <ul class="tfsDropdow level1" role="menu">
                <?php if (!empty($_settings['blog_cates'])): ?>
                <?php foreach ($_settings['blog_cates'] as $bc): ?>
                    <li class="">
                        <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $bc['url'];?>" title="<?php echo $bc['name'];?>"><span><?php echo $bc['name'];?></span> </a>
                    </li>
                <?php endforeach; ?>
                <?php endif; ?>
            </ul>
        </li>
        <li class="">
            <a class="" href="<?php echo $BASE_URL; ?>/lien-he" target="_self">
                Liên hệ
            </a>
        </li>
    </ul>
</div>
