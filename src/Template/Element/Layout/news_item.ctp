<li>
    <div class="post-thumb image-hover2">
        <a href="<?php echo $BASE_URL.'/bai-viet/'.$post['url'];?>"><img src="<?php echo $post['image'];?>" alt="<?php echo $post['name'];?>"></a>
    </div>
    <div class="post-desc">
        <h5 class="post-title">
            <a href="<?php echo $BASE_URL.'/bai-viet/'.$post['url'];?>"><?php echo $post['name'];?></a>
        </h5>
        <div class="post-meta">
            <span class="date"><?php echo date('d-m-Y', $post['created']);?></span>
        </div>
        <div class="readmore">
            <a href="<?php echo $BASE_URL.'/bai-viet/'.$post['url'];?>">Xem thêm</a>
        </div>
    </div>
</li>
