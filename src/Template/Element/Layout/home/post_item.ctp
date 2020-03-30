<div class="col-lg-12">
    <div class="single-post">
        <div class="post-img">
            <a href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['url'];?>"><img src="<?php echo $post['image'];?>" alt="<?php echo $post['name'];?>" /></a>
            <div class="blog-date-time">
                <span class="day-time"><?php echo date('d', $post['created']);?></span>
                <span class="moth-time"><?php echo date('M', $post['created']);?></span>
            </div>
        </div>
        <div class="post-content">
            <h3><a href="<?php echo $BASE_URL;?>/bai-viet/<?php echo $post['url'];?>"><?php echo $post['name'];?></a></h3>
            <p><?php echo $post['description'];?></p>
        </div>
    </div>
</div>