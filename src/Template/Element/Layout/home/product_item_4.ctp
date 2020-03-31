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
<div class="single-shop mb-30">
    <div class="row">
        <div class="col-lg-4 col-md-4 col-12">
            <div class="product-wrapper-2">
                <div class="product-img">
                    <a href="<?php echo $url;?>">
                        <img src="<?php echo $image;?>" alt="<?php echo $name;?>" class="primary" />
                    </a>
                </div>
            </div>
        </div>
        <div class="col-lg-8 col-md-8 col-12">
            <div class="product-wrapper-content">
                <div class="product-details">
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
                            <?php endif; ?>
                        </ul>
                    </div>
                    <p><?php echo $description;?></p>
                </div>
                <div class="product-link">
                    <div class="product-button">
                        <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
                    </div>
                    <div class="add-to-link">
                        <ul>
                            <li><a href="<?php echo $url;?>" title="Xem chi tiết"><i class="fa fa-external-link"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>