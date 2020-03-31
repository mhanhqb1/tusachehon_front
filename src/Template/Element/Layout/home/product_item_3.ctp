<?php
$url = $BASE_URL . '/san-pham/' . $product['url'];
$image = $product['image'];
$name = $product['name'];
$id = $product['id'];
$discount = $product['discount_price'];
$price = number_format($product['price'], 0);
$oldPrice = 0;
if (!empty($discount)) {
    $oldPrice = $price;
    $price = number_format($product['price'] * (100 - $discount) / 100, 0);
}
$isHot = $product['is_hot'];
?>
<div class="single-most-product bd mb-18">
    <div class="most-product-img">
        <a href="<?php echo $url;?>"><img src="<?php echo $image;?>" alt="<?php echo $name;?>" /></a>
    </div>
    <div class="most-product-content">
        <div class="product-rating">
            <ul>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
        </div>
        <h4><a href="<?php echo $url;?>"><?php echo $name;?></a></h4>
        <div class="product-price">
            <ul>
                <li><?php echo $price;?>đ</li>
                <?php if (!empty($oldPrice)): ?>
                <li class="old-price"><?php echo $oldPrice;?>đ</li>
                <?php endif;?>
            </ul>
        </div>
    </div>
</div>