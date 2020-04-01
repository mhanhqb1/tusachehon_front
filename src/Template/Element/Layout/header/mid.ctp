<div class="header-mid-area ptb-40">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-5 col-12">
                <div class="header-search">
                    <form action="<?php echo $BASE_URL;?>/tim-kiem" method="GET">
                        <input type="text" name="name" placeholder="Nhập tên sách cần tìm..." />
                        <a href="javascript:void(0)"><i class="fa fa-search"></i></a>
                    </form>
                </div>
            </div>
            <div class="col-lg-6 col-md-4 col-12">
                <div class="logo-area text-center logo-xs-mrg">
                    <a href="<?php echo $BASE_URL;?>">
                        <img src="<?php echo $BASE_URL; ?>/images/logo/logo.png" alt="logo" />
                    </a>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-12">
                <div class="my-cart">
                    <ul>
                        <li>
                            <a href="<?php echo $BASE_URL;?>/gio-hang"><i class="fa fa-shopping-cart"></i>Giỏ hàng</a>
                            <span class="cart-qty"><?php echo !empty($cart['total']) ? $cart['total'] : 0;?></span>
                            <div class="mini-cart-sub">
                                 <?php if (!empty($cart)): ?>
                                    <?php echo $cart['html']; ?>
                                <?php else: ?>
                                    <div class="cart-empty">
                                        Giỏ hàng của bạn chưa có sản phẩm nào.
                                    </div>
                                <?php endif; ?>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>