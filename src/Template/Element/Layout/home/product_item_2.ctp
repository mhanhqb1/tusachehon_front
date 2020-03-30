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
<div class="product-wrapper">
    <div class="product-img">
        <a href="<?php echo $url; ?>">
            <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" class="primary" />
        </a>
        <div class="quick-view">
            <a class="action-view" href="#" data-target="#productModal" data-toggle="modal" title="Quick View">
                <i class="fa fa-search-plus"></i>
            </a>
        </div>
        <div class="product-flag">
            <ul>
                <?php if (!empty($isHot)): ?>
                    <li><span class="sale">HOT</span></li>
                <?php endif; ?>
                <?php if (!empty($discount)): ?>
                    <li><span class="discount-percentage">-<?php echo $discount; ?>%</span></li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="product-details text-center">
        <div class="product-rating">
            <ul>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
                <li><a href="#"><i class="fa fa-star"></i></a></li>
            </ul>
        </div>
        <h4><a href="#">Joust Duffle Bag <?php echo $i; ?></a></h4>
        <div class="product-price">
            <ul>
                <li><?php echo $price; ?>đ</li>
                <?php if (!empty($oldPrice)): ?>
                    <li class="old-price"><?php echo $oldPrice; ?>đ</li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
    <div class="product-link">
        <div class="product-button">
            <a href="#" title="Thêm vào giỏ hàng"><i class="fa fa-shopping-cart"></i>Thêm vào giỏ hàng</a>
        </div>
        <div class="add-to-link">
            <ul>
                <li><a href="<?php echo $url; ?>" title="Xem chi tiết"><i class="fa fa-external-link"></i></a></li>
            </ul>
        </div>
    </div>
</div>