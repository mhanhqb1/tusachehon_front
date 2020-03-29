<a href="<?php echo $BASE_URL;?>">
    <h1 style="font-size: 24px;">
        <span class="btn-back">Về trang chủ</span> Đặt hàng thành công
    </h1>
</a>
<div class="step3 clearfix"> 
    <!-- start step3 -->
    <div class="checkout-complete col-12 ">
        <div class="box-complete">
            <!--<h3>Mã đơn hàng của bạn: <strong>#189458</strong></h3>-->
            <label>Bạn vừa mua:</label>
            <div class="cart-items">
                <?php if(!empty($order)): ?>
                <?php foreach ($order as $v): ?>
                <div class="cart-item">
                    <img alt="<?php echo $v['name'];?>" class="image_thumb" src="<?php echo $v['image'];?>">
                    <b><?php echo $v['qty'];?> x</b>
                    <span> <?php echo $v['name'];?></span>               
                </div> 
                <?php endforeach; ?>
                <?php endif;?>

                <div class="payment_methol">
                    <p>
                        <b>Giá trị đơn hàng:</b>
                        <span> <?php echo number_format($totalPrice);?>₫</span>
                    </p>
                    <p>
                        <b>Phí vận chuyển:</b>
                        <span> 0₫</span>
                    </p>
                    <p>
                        <b>Tổng cộng:</b>
                        <span class="totalpayment"> <?php echo number_format($totalPrice);?>₫</span>
                    </p>
                    <p>
                        <b>Phương thức thanh toán:</b>
                        <span> Thanh toán khi giao hàng (COD)</span>
                    </p>
                </div>
            </div>
            <p>Cảm ơn bạn đã mua hàng tại: <a class="linkshopname" href="<?php echo $BASE_URL;?>">LYONABEAUTY</a></p>
        </div>
    </div>
    <!-- /end step3 -->
</div>
