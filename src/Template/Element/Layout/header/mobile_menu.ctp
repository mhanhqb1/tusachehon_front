<nav id="nav-menu" class="hidden">
    <ul class="lv1">
        <li><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
        <li><a href="<?php echo $BASE_URL; ?>/gioi-thieu-cong-ty">Giới thiệu công ty</a></li>
        <?php if (!empty($productCates)): ?>
            <?php foreach ($productCates as $pc): ?>
                <li class="has-children icon icon-arrow-left">
                    <a href="<?php echo $BASE_URL . '/danh-muc/' . $pc['data']['url']; ?>"><?php echo $pc['data']['name']; ?></a>
                    <?php if (!empty($pc['child_data'])): ?>
                        <div class="mp-level">
                            <ul class="cd-secondary-nav count-nav-5">
                                <?php foreach ($pc['child_data'] as $cv): ?>
                                    <li><a href="<?php echo $BASE_URL . '/danh-muc/' . $cv['url']; ?>"><?php echo $cv['name']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    <?php endif; ?>
                </li>
            <?php endforeach; ?>
        <?php endif; ?>
        <?php if (!empty($_settings['blog_cates'])): ?>
            <li class="has-children icon icon-arrow-left">
                <a href="#">Blog làm đẹp</a>
                <div class="mp-level">
                    <ul class="cd-secondary-nav count-nav-5">
                        <?php foreach ($_settings['blog_cates'] as $bc): ?>
                        <li>
                            <a href="<?php echo $BASE_URL; ?>/tin-tuc/<?php echo $bc['url']; ?>" title="<?php echo $bc['name']; ?>"><?php echo $bc['name']; ?></a>
                        </li> 
                        <?php endforeach; ?>
                    </ul>
                </div>
            </li>
        <?php endif; ?>
        <li><a href="<?php echo $BASE_URL; ?>/lien-he">Liên hệ</a></li>
    </ul>
</nav>

