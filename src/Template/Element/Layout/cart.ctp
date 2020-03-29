<?php $total = 0; ?>
<h1 class="fix">Giỏ hàng</h1>
<form action="<?php echo $BASE_URL; ?>/gio-hang" method="post" id="cartformpage">
    <table>
        <thead>
            <tr>
                <th class="image">Hình ảnh</th>
                <th class="item">Tên sản phẩm</th>
                <th class="qty">Số lượng</th>
                <th class="price promotion">Đơn giá</th>
                <th class="price promotion">Thành tiền</th>
                <th class="remove">&nbsp;</th>
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
                ?>
                <tr class="item " data-id="<?php $k; ?>">
                    <td class="image">
                        <div class="product_image">
                            <a href="<?php echo $BASE_URL . '/san-pham/' . $v['url']; ?>">
                                <img src="<?php echo $v['image']; ?>">
                            </a>
                        </div>
                    </td>
                    <td class="item">
                        <a href="<?php echo $BASE_URL . '/san-pham/' . $v['url']; ?>">
                            <strong><?php echo $v['name']; ?></strong>
                        </a>
                    </td>
                    <td class="qty">
                        <input type="number" name="updates[<?php echo $k;?>]" min="1" value="<?php echo $v['qty']; ?>" class="tc item-quantity">
                    </td>
                    <td class="price promotion"><?php echo number_format($v['price']); ?>đ</td>
                    <td class="price promotion">
                        <?php echo number_format($subTotal); ?>đ
                    </td>
                    <td class="remove">
                        <a href="#" onclick="return updateCart(<?php echo $k; ?>)" class="cart">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>

            <tr>
                <td colspan="2" style="text-align:right">Tổng cộng</td>
                <td class="totalQty"><?php echo $cart['total']; ?></td>
                <td class="price"></td>
                <td><span class="price-text"><?php echo number_format($total); ?>đ</span></td>
                <td></td>
            </tr>
        </tbody>
    </table>
    <div class="clearfix">
        <div class="pull-left">
            <a href="<?php echo $BASE_URL; ?>" class="continue"><i class="fa fa-angle-left"></i>Tiếp tục mua sắm</a>
        </div>
        <div class="cart-buttons inner-right">
            <div class="buttons clearfix">
                <input type="submit" id="update-cart" class="button-default" name="update" value="Cập nhật số lượng"/>
                <a href="<?php echo $BASE_URL; ?>/thanh-toan" id="check">Thanh toán</a>
            </div>
        </div>
    </div>
</form>
