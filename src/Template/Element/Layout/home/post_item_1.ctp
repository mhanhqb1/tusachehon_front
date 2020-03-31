<?php
$url = $BASE_URL.'/bai-viet/'.$post['url'];
$name = $post['name'];
$image = $post['image'];
$description = $post['description'];
$created = $post['created'];
?>
<div class="single-blog-post">
    <div class="author-destils mb-30">
        <div class="author-left">
            <div class="author-img">
                <a href="<?php echo $BASE_URL;?>"><img src="<?php echo $BASE_URL;?>/images/logo.jpg" alt="tusachehon.com" /></a>
            </div>
            <div class="author-description">
                <p>Đăng bởi: 
                    <a href="<?php echo $BASE_URL;?>"><span>Admin</span></a>
                </p>
                <span><?php echo date('Y-m-d', $created);?></span>
            </div>
        </div>
        <div class="author-right">
            <span>Chia sẻ:</span>
            <ul>
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                <li><a href="#"><i class="fa fa-instagram"></i></a></li>
            </ul>
        </div>
    </div>
    <div class="blog-img mb-30">
        <a href="<?php echo $url;?>"><img src="<?php echo $image;?>" alt="<?php echo $name;?>" /></a>
    </div>
    <div class="single-blog-content">
        <div class="single-blog-title">
            <h3><a href="<?php echo $url;?>"><?php echo $name;?></a></h3>
        </div>
        <div class="blog-single-content">
            <p><?php echo $description;?></p>
        </div>
    </div>
    <div class="blog-comment-readmore">
        <div class="blog-readmore">
            <a href="<?php echo $url;?>">Xem chi tiết<i class="fa fa-long-arrow-right"></i></a>
        </div>
        <div class="blog-com">
            <a href="<?php echo $url;?>">99 views</a>
        </div>
    </div>
</div>