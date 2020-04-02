<div class="breadcrumbs-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="breadcrumbs-menu">
                    <ul>
                        <li><a href="<?php echo $BASE_URL; ?>">Trang chủ</a></li>
                        <li><a href="javascript:void(0)" class="active">Thanh toán</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area-start -->
<div class="checkout-area mb-70">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <form action="<?php echo $BASE_URL;?>/dat-hang" method="POST">
                    <div class="row">
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="checkbox-form">						
                                <h3>Thông tin khách hàng</h3>
                                <div class="row">
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="checkout-form-list">
                                            <label>Họ và tên <span class="required">*</span></label>										
                                            <input type="text" name="name" placeholder="" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-12">
                                        <div class="checkout-form-list">
                                            <label>Địa chỉ <span class="required">*</span></label>
                                            <input type="text" name="address" placeholder="" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="checkout-form-list">
                                            <label>Email</label>
                                            <input type="email" name="email" type="email" placeholder="">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-12">
                                        <div class="checkout-form-list">
                                            <label>Số điện thoại  <span class="required">*</span></label>										
                                            <input type="text" name="phone" placeholder=""  required="required">
                                        </div>
                                    </div>							
                                </div>
                                <div class="different-address">
                                    <div class="order-notes">
                                        <div class="checkout-form-list">
                                            <label>Ghi chú</label>
                                            <textarea placeholder="" rows="10" cols="30" name="note" id="checkout-mess"></textarea>
                                        </div>									
                                    </div>
                                </div>													
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-12 col-12">
                            <div class="your-order">
                                <h3>Chi tiết đơn hàng</h3>
                                <?php
                                $total = 0;
                                ?>
                                <div class="your-order-table table-responsive">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th class="product-name">Sản phầm</th>
                                                <th class="product-total">Thành tiền</th>
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
                                            <tr class="cart_item">
                                                <td class="product-name">
                                                    <?php echo $name;?> <strong class="product-quantity"> × <?php echo $qty;?></strong>
                                                </td>
                                                <td class="product-total">
                                                    <span class="amount"><?php echo $subTotal;?>đ</span>
                                                </td>
                                            </tr>
                                            <?php endforeach;?>
                                            
                                        </tbody>
                                        <tfoot>
                                            <tr class="order-total">
                                                <th>Tổng tiền</th>
                                                <td><strong><span class="amount"><?php echo number_format($total);?>đ</span></strong>
                                                </td>
                                            </tr>								
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="collapses-group">
                                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                                                <div class="panel panel-default">
                                                    <div class="panel-heading" role="tab" id="headingOne">
                                                        <h4 class="panel-title">
                                                            <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                                Phương thức thanh toán
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                                        <div class="panel-body">
                                                            <p>Thanh toán khi nhận hàng(COD).</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="order-button-payment">
                                        <input type="submit" value="Đặt hàng">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- checkout-area-end -->
