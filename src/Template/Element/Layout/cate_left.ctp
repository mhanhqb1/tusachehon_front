<div class="column col-xs-12 col-sm-3" id="left_column">
    <!--module danh muc-->
    <div class="block left-module">
        <p class="title_block">Danh mục bài viết</p>
        <div class="block_content">
            <!-- layered -->
            <div class="layered layered-category">
                <div class="layered-content show">
                    <?php if (!empty($_settings['blog_cates'])): ?>

                        <ul class="tree-menu">
                            <?php foreach ($_settings['blog_cates'] as $bc): ?>
                                <li class="<?php echo ($bc['name'] == $cateName) ? 'active' : ''; ?>">
                                    <span></span>
                                    <a class="<?php echo ($bc['name'] == $cateName) ? 'current' : ''; ?>" href="<?php echo $BASE_URL . '/tin-tuc/' . $bc['url']; ?>" title="<?php echo $bc['name']; ?>" target="_self">
                                        <?php echo $bc['name']; ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                        </ul>
                    <?php endif; ?>
                </div>
            </div>
            <!-- ./layered -->
        </div>
    </div>
    <!--/module danh muc-->
    <!--module bai viet moi-->
    <div class="block left-module">
        <p class="title_block">Bài viết mới nhất</p>
        <div class="block_content">
            <!-- layered -->
            <?php if (!empty($newPosts)): ?>
                <div class="layered">
                    <div class="layered-content show">
                        <ul class="blog-list-sidebar clearfix">
                            <!--Begin: Bài viết mới nhất-->
                            <?php foreach ($newPosts as $p): ?>
                                <li>
                                    <div class="post-thumb">
                                        <a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>">
                                            <img src="<?php echo $p['image']; ?>" alt="<?php echo $p['name']; ?>">
                                        </a>
                                    </div>
                                    <div class="post-info">
                                        <h5 class="entry_title">
                                            <a href="<?php echo $BASE_URL . '/bai-viet/' . $p['url']; ?>"><?php echo $p['name']; ?></a>
                                        </h5>
                                        <div class="post-meta">
                                            <span class="date"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', $p['created']); ?></span>
                                        </div>
                                    </div>
                                </li>
                            <?php endforeach; ?>
                            <!--End: Bài viết mới nhất-->
                        </ul>
                    </div>
                </div>
            <?php endif; ?>

            <!-- ./layered -->
        </div>
    </div>
    <!--/module bai viet moi-->
</div>
