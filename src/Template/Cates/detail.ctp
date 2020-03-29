<div id="collection">
    <div class="columns-container">
        <div class="container" id="columns">
            <!--breadcrumb-->
            <div class="breadcrumb clearfix">
                <div class="tfsBreadcrumb ">
                    <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                        <li><a href="<?php echo $BASE_URL;?>" target="_self">Trang chủ</a></li>
                        <li><a href="<?php echo $BASE_URL.'/bai-viet/'.$data['cate_url'];?>"><?php echo $data['cate_name'];?></a></li>
                        <li class="active"><span><?php echo $data['name'];?></span></li>
                    </ol>
                </div>
            </div>
            <!--/breadcrumb-->
            <div class="row">
                <!-- Left colunm -->
                <?php 
                echo $this->element('Layout/cate_left', array(
                    'newPosts' => $newPosts,
                    'cateName' => $data['cate_name']
                ));
                ?>
                <!--/left_column-->
                <!--right_column-->
                <div class="center_column col-xs-12 col-sm-9 product-col" id="center_column">
                    <h1 class="page-heading">
                        <span class="page-heading-title2"><?php echo $data['name'];?></span>
                    </h1>
                    <article class="entry-detail">
                        <!--entry-meta-data-->
                        <div class="entry-meta-data">
                            <span class="cat">
                                <i class="fa fa-folder-o"></i>
                                <a href="<?php echo $BASE_URL.'/danh-muc/'.$data['cate_url'];?>">
                                    <?php echo $data['cate_name'];?>
                                </a>
                            </span>
                            <span class="date"><i class="fa fa-calendar"></i> <?php echo date('d-m-Y', $data['created']);?></span>
                        </div>
                        <!--/entry-meta-data-->
                        <div class="body-content content-text clearfix">
                            <p><img src="<?php echo $data['image'];?>" alt="<?php echo $data['name'];?>"/></p>
                            <p><?php echo $data['description'];?></p>
                            <?php echo $data['detail']; ?>
                        </div>
                    </article>
                </div>
                <!--/right_column-->
            </div>
        </div>
    </div>
</div>
