<span class="fbtracker-checkout"></span>
<a href="<?php echo $BASE_URL; ?>/gio-hang">
    <h1 style="background-image: url(<?php echo $_settings['company']['logo']; ?>);">
        <span class="btn-back">Quay về giỏ hàng</span> 
        LYONABEAUTY
    </h1>
</a>
<div class="container clearfix">
    <!--Step 1-->
    <div class="col-4 step1">
        <h2>Thông tin giao hàng</h2>
        <div class="form-info">
            <form accept-charset="UTF-8" action="/dat-hang" class="new_order" id="forminfo" method="post" novalidate="novalidate">
                <div class="form-group">
                </div>
                <div class="form-group">
                    <input placeholder="Họ và tên" class="formcontrol required" id="billing_address_full_name" name="name" size="30" type="text">
                    <p>Họ và tên</p>
                </div>
                <div class="form-group">
                    <input placeholder="Số điện thoại" maxlength="11" id="billing_address_phone" class="formcontrol required" name="phone" size="30" title="Nhập số điện thoại" pattern="^\d{8,11}" type="tel" value="" required="" aria-required="true">
                    <p>Số điện thoại</p>
                </div>
                <div class="form-group">
                    <input placeholder="Email" id="order_email" name="email" class="formcontrol required" size="30" type="email" value="" required="" aria-required="true">
                    <p>Email</p>
                </div>
                <div class="form-group">
                    <input placeholder="Địa chỉ" id="billing_address_address1" class="formcontrol required" name="address" size="30" type="text" value="" required="" aria-required="true">
                    <p>Địa chỉ</p>
                </div>
                <div class="form-group">
                    <textarea id="billing_note" placeholder="Ghi chú đơn hàng" name="note" rows="3" class="formcontrol ordernote"></textarea>
                    <p>Ghi chú đơn hàng</p>
                </div>
                <div class="error summary" style="display: none">
                    (<span class="color-red ">*</span>)Vui lòng nhập đủ thông tin
                </div>
            </form>
        </div>
        <div class="listerror">
        </div>
    </div>
    <!--/Step 1-->
    <!--Step 2-->
    <div class="col-4">
        <!-- Vận chuyển & Thanh Toán -->
        <div class="ctrl-shipping">
            <h3 class="h-shipping ">Vận chuyển</h3>
            <div class="form-group ">
                <div class="custom-dropdown"><select class="drop_shipping" name="shipping_rate"></select></div>
            </div>
        </div>
        <h3>Thanh toán</h3>
        <div class="shiping-ajax">
            <label class="lb-method">
                <input class="input-method" type="radio" checked="checked" name="gateway" value="90035">
                <span class="label-radio"> Thanh toán khi giao hàng (COD)</span>
            </label>
            <span class="desc" style="display: block;"></span>
<!--            <label class="lb-method">
                <input class="input-method" type="radio" name="gateway" value="90036">
                <span class="label-radio"> Chuyển khoản qua ngân hàng</span>
            </label>
            <span class="desc">CHUYỂN KHOẢN VÀO TÀI KHOẢN
                Ngân hàng: TM CP Ngoại Thương Việt Nam (Vietcombank)
                Chi nhánh: TP HCM
                Số tài khoản: 007.100.1058263 (TK VND)
                Tên tài khoản: CT TNHH HOA SEN VIET
                NỘI DUNG CHUYỂN KHOẢN: Họ và Tên + Mã đơn hàng
            </span>-->
            <span class="desc"></span>
        </div>
        <div class="show__info">
            <h2>Thông tin mua hàng của bạn</h2>
            <ul><li id="fullname">Họ và Tên: <span></span></li>
                <li id="phone_number">Số điện thoại: <span></span></li>
                <li id="email_address">Email: <span></span></li>
                <li id="address_number">Địa chỉ: <span></span></li>
            </ul>
        </div>
    </div>
    <!--/Step 2-->
    <!--Step 3-->
    <div class="col-4">
        <div class="box-cart">
            <h2>Đơn hàng</h2>
            (<span><?php echo $cart['total'];?></span> sản phẩm)
            <div class="cart-items">
                <?php $totalPrice = 0; ?>
                <?php foreach ($cart as $k => $v):?>
                <?php
                if (in_array($k, array('total', 'html'))) {
                    continue;
                }
                $subPrice = $v['price'] * $v['qty'];
                $totalPrice += $subPrice;
                ?>
                <div class="list_item cart-item">
                    <span><?php echo $v['qty'];?> x</span>
                    <span><?php echo $v['name'];?></span>
                    <span class="price"><?php echo number_format($subPrice);?>₫</span>
                </div>
                <?php endforeach;?>
                
            </div>
            <div class="total-price">
                Tạm tính   <label> <?php echo number_format($totalPrice);?>₫</label>
            </div>
            <div class="shiping-price">
                Phí vận chuyển   <label>0</label>
            </div>
            <div class="total-checkout">
                Tổng cộng <span> <?php echo number_format($totalPrice);?>₫</span>
            </div>
        </div>
        <button type="submit" class="btn-checkout">Đặt hàng</button>
    </div>
    <!--/Step 3-->
</div>
