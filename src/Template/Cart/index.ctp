<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
                        <li><a href="javascript:void(0)" class="active">Giỏ hàng</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="entry-header-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="entry-header-title">
                    <h2>Giỏ hàng</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="cart-main-area mb-70">
    <div class="container">
        <?php
        $total = 0;
        ?>
        <div class="row">
            <div class="col-lg-12">
                <form action="<?php echo $BASE_URL; ?>/gio-hang" method="POST" id="cartformpage">
                    <div class="table-content table-responsive mb-15 border-1">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-thumbnail">Hình ảnh</th>
                                    <th class="product-name">Sản phẩm</th>
                                    <th class="product-price">Giá</th>
                                    <th class="product-quantity">Số lượng</th>
                                    <th class="product-subtotal">Thành tiền</th>
                                    <th class="product-remove">Xóa</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cart as $k => $v): ?>
                                    <?php
                                    if (!is_numeric($k)) {
                                        continue;
                                    }
                                    $subTotal = $v['price'] * $v['qty'];
                                    $total += $subTotal;
                                    $subTotal = number_format($subTotal);
                                    $url = $BASE_URL . '/san-pham' . $v['url'];
                                    $image = $v['image'];
                                    $price = number_format($v['price']);
                                    $name = $v['name'];
                                    $qty = $v['qty'];
                                    $id = $v['id'];
                                    ?>
                                    <tr>
                                        <td class="product-thumbnail">
                                            <a href="<?php echo $url; ?>">
                                                <img src="<?php echo $image; ?>" alt="<?php echo $name; ?>" />
                                            </a>
                                        </td>
                                        <td class="product-name"><a href="<?php echo $url; ?>"><?php echo $name; ?></a></td>
                                        <td class="product-price"><span class="amount"><?php echo $price; ?>đ</span></td>
                                        <td class="product-quantity"><input type="number" name="updates[<?php echo $k;?>]" min="1" value="<?php echo $qty; ?>"></td>
                                        <td class="product-subtotal"><?php echo $subTotal; ?>đ</td>
                                        <td class="product-remove"><a href="javascript:void(0)" onclick="return updateCart(<?php echo $id; ?>, 0);"><i class="fa fa-times"></i></a></td>
                                    </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-md-6 col-12">
                <div class="buttons-cart mb-30">
                    <ul>
                        <li><a href="javascript:void(0)" id="update-cart" onclick="$('#cartformpage').submit();">Cập nhật giỏ hàng</a></li>
                        <li><a href="<?php echo $BASE_URL; ?>">Tiếp tục mua hàng</a></li>
                    </ul>
                </div>
                <div class="coupon">
                    <h3>Mã giảm giá</h3>
                    <p>Nhập mã giảm giá ở đây.</p>
                    <form>
                        <input type="text" placeholder="Mã giảm giá">
                        <a href="#">Áp dụng</a>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 col-12">
                <div class="cart_totals">
                    <h2>Tổng tiền</h2>
                    <table>
                        <tbody>
                            <tr class="order-total">
                                <th>Total</th>
                                <td>
                                    <strong>
                                        <span class="amount"><?php echo number_format($total); ?>đ</span>
                                    </strong>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <div class="wc-proceed-to-checkout" style="clear: both;">
                        <a href="<?php echo $BASE_URL; ?>/thanh-toan">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>