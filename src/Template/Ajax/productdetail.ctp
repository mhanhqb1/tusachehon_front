<?php
$image = $data['image'];
$id = $data['id'];
$image2 = !empty($data['image2']) ? $data['image2'] : '';
$image3 = !empty($data['image3']) ? $data['image3'] : '';
$image4 = !empty($data['image4']) ? $data['image4'] : '';
$name = $data['name'];
$description = $data['description'];
$discount = $data['discount_price'];
$price = number_format($data['price'], 0);
$oldPrice = 0;
if (!empty($discount)) {
    $oldPrice = $price;
    $price = number_format($data['price']*(100 - $discount)/100, 0);
}
?>
<div class="row">
    <div class="col-md-5 col-sm-5 col-xs-12">
        <div class="modal-tab">
            <div class="product-details-large tab-content">
                <div class="tab-pane active" id="image-1">
                    <img src="<?php echo $image;?>" alt="<?php echo $name;?>" />
                </div>
                <?php if (!empty($image2)): ?>
                <div class="tab-pane" id="image-2">
                    <img src="<?php echo $image2; ?>" alt="<?php echo $name;?>" />
                </div>
                <?php endif; ?>
                <?php if (!empty($image3)): ?>
                <div class="tab-pane" id="image-3">
                    <img src="<?php echo $image3; ?>" alt="<?php echo $name;?>" />
                </div>
                <?php endif; ?>
                <?php if (!empty($image4)): ?>
                <div class="tab-pane" id="image-4">
                    <img src="<?php echo $image4; ?>" alt="<?php echo $name;?>" />
                </div>
                <?php endif; ?>
            </div>
            <div class="product-details-small quickview-active owl-carousel">
                <a class="active" href="#image-1"><img src="<?php echo $image; ?>" alt="<?php echo $name;?>" /></a>
                <?php if (!empty($image2)): ?>
                <a href="#image-2"><img src="<?php echo $image2; ?>" alt="<?php echo $name;?>" /></a>
                <?php endif; ?>
                <?php if (!empty($image3)): ?>
                <a href="#image-3"><img src="<?php echo $image3; ?>" alt="<?php echo $name;?>" /></a>
                <?php endif; ?>
                <?php if (!empty($image4)): ?>
                <a href="#image-4"><img src="<?php echo $image4; ?>" alt="<?php echo $name;?>" /></a>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="col-md-7 col-sm-7 col-xs-12">
        <div class="modal-pro-content">
            <h3><?php echo $name;?></h3>
            <div class="price">
                <span><?php echo $price;?>đ</span>
            </div>
            <p><?php echo $description;?></p>
            <br/>
            <form action="#">
                <input type="number" id="quantity" min="1" value="1" />
                <button onclick="return addToCart(<?php echo $id;?>);">Thêm vào giỏ hàng</button>
            </form>
            <span><i class="fa fa-check"></i> In stock</span>
        </div>
    </div>
</div>