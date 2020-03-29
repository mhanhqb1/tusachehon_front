<div class="herald-section container">

    <article id="post-<?php echo $data['id'];?>" class="herald-single post type-post status-publish format-standard has-post-thumbnail hentry">
        <div class="row">
            <div class="col-lg-9 col-md-9 col-mod-single col-mod-main">
                <header class="entry-header">
                    <span class="meta-category">
                        <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $data['cate_url']; ?>" class="herald-cat-<?php echo $data['cate_id']; ?>"><?php echo $data['cate_name']; ?></a>
                    </span>
                    <h1 class="entry-title h1"><?php echo $data['name']; ?></h1>			
                    <div class="entry-meta entry-meta-single">
                        <div class="meta-item herald-date">
                            <span class="updated"><?php echo date('Y-m-d', $data['created']); ?></span>
                        </div>
                        <div class="meta-item herald-views">5,005 Views</div>
                        <!--<div class="meta-item herald-rtime">2 Min Read</div>-->
                        <div class="meta-item herald-reviews">
                            <div class="review-type-star wp-review-show-total wp-review-total-star"> 
                                <div class="review-star">
                                    <div class="review-result-wrapper">
                                        <i class="mts-icon-star"></i>
                                        <i class="mts-icon-star"></i>
                                        <i class="mts-icon-star"></i>
                                        <i class="mts-icon-star"></i>
                                        <i class="mts-icon-star"></i>
                                        <div class="review-result" style="width:96%; color:#0288d1;">
                                            <i class="mts-icon-star"></i>
                                            <i class="mts-icon-star"></i>
                                            <i class="mts-icon-star"></i>
                                            <i class="mts-icon-star"></i>
                                            <i class="mts-icon-star"></i>
                                        </div><!-- .review-result -->
                                    </div><!-- .review-result-wrapper -->
                                </div><!-- .review-star -->
                            </div>
                        </div>
                    </div>
                </header>
                <div class="herald-post-thumbnail herald-post-thumbnail-single">
                    <span><img width="990" height="660" src="<?php echo $data['image']; ?>" class="attachment-herald-lay-single size-herald-lay-single wp-post-image" alt="" sizes="(max-width: 990px) 100vw, 990px"></span>
                </div>
                <div class="row">
                    <div class="col-lg-2 col-md-2 col-sm-2 hidden-xs herald-left">
                        <div class="entry-meta-wrapper">
                            <div class="meta-ad"></div>
                            <div class="entry-meta-author">
                                <div class="co-author">
                                    <img src="https://mksdmcdn-9b59.kxcdn.com/herald/wp-content/uploads/2015/04/meks_1-150x150.jpg" width="112" height="112" alt="Patrick Callahan" class="avatar avatar-112 wp-user-avatar wp-user-avatar-112 alignnone photo">						
                                    <a class="herald-author-name" href="https://demo.mekshq.com/herald?author_name=meks1">Patrick Callahan</a>
                                    <a class="herald-author-twitter" href="https://twitter.com/mekshq" target="_blank">mekshq</a>
                                </div> 
                            </div>
                            <div class="entry-meta entry-meta-single">
                                <div class="meta-item herald-reviews">
                                    <div class="review-type-star  wp-review-show-total wp-review-total-140 wp-review-total-star"> 
                                        <div class="review-star">
                                            <div class="review-result-wrapper">
                                                <i class="mts-icon-star"></i>
                                                <i class="mts-icon-star"></i>
                                                <i class="mts-icon-star"></i>
                                                <i class="mts-icon-star"></i>
                                                <i class="mts-icon-star"></i>
                                                <div class="review-result" style="width:96%; color:#0288d1;">
                                                    <i class="mts-icon-star"></i>
                                                    <i class="mts-icon-star"></i>
                                                    <i class="mts-icon-star"></i>
                                                    <i class="mts-icon-star"></i>
                                                    <i class="mts-icon-star"></i>
                                                </div><!-- .review-result -->
                                            </div><!-- .review-result-wrapper -->
                                        </div><!-- .review-star -->
                                    </div>
                                </div>
                            </div>
                            <?php echo $this->element('Post/meta_share', $data);?>
                        </div>
                    </div>


                    <div class="col-lg-10 col-md-10 col-sm-10">
                        <div class="entry-content herald-entry-content">
                            <div class="entry-headline h5">
                                <?php echo $data['description'];?>
                            </div>
                            <?php echo $data['content'];?>
                            
                            <?php echo $this->element('Banner/728x90'); ?>
                        </div>
                    </div>

                    <div id="extras" class="col-lg-12 col-md-12 col-sm-12">
                        <div id="related" class="herald-related-wrapper">		
                            <div class="herald-mod-wrap">
                                <div class="herald-mod-head ">
                                    <div class="herald-mod-title">
                                        <h4 class="h6 herald-mod-h herald-color">You may also like</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="herald-related row row-eq-height">
                                <?php if (!empty($data['relations'])): ?>
                                <?php foreach ($data['relations'] as $p): ?>
                                    <article class="herald-lay-f herald-lay-f1 post type-post status-publish format-standard has-post-thumbnail hentry">
                                        <div class="herald-ovrld" style="height: 188px;">		
                                            <div class="herald-post-thumbnail">
                                                <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>" title="<?php echo $p['name'];?>">
                                                    <img width="300" height="200" src="<?php echo $p['image'];?>" class="attachment-herald-lay-b1 size-herald-lay-b1 wp-post-image" alt="" sizes="(max-width: 300px) 100vw, 300px">
                                                </a>
                                            </div>

                                            <div class="entry-header herald-clear-blur" style="height: 104px;">
                                                <span class="meta-category">
                                                    <a href="<?php echo $BASE_URL;?>/danh-muc/<?php echo $p['cate_url'];?>" class="herald-cat-<?php echo $p['cate_id'];?>"><?php echo $p['cate_name'];?></a>
                                                </span>
                                                <h2 class="entry-title h6">
                                                    <a href="<?php echo $BASE_URL;?>/tin-tuc/<?php echo $p['url'];?>"><?php echo $p['name'];?></a>
                                                </h2>
                                                <div class="entry-meta">
                                                    <div class="meta-item herald-date">
                                                        <span class="updated"><?php echo date('Y-m-d', $p['created']);?></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach; ?>
                                <?php endif; ?>
                            </div>
                        </div>
                        <div id="single-sticky" class="herald-single-sticky herald-single-wraper hidden-xs hidden-sm">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12 col-md-12">
                                        <div class="herald-sticky-share">
                                            <?php echo $this->element('Post/meta_share', $data);?>
                                        </div>
                                    </div>
                                </div>
                            </div>					
                        </div>
                    </div>

                </div>

            </div>



            <div class="herald-sidebar col-lg-3 col-md-3 herald-sidebar-right">
                <?php echo $this->element('Layout/widget_categories'); ?>
                <?php echo $this->element('Post/feature_post'); ?>		
                <?php echo $this->element('Banner/300x316'); ?>
            </div>
        </div>	
    </article>
</div>
