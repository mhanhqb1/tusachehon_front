<style>
    #cart {padding: 30px 0;}
    .image img {max-width: 100%;width: 50px;}
    tr.summary td {width: 23%;}
    th.image {}
    span.variant_title {display: block;}
    div#layout-page table td {
        /* width: 20%; */
        padding: 10px;
        border: 1px solid #ccc;
        text-align: center;
        vertical-align: middle;
    }
    td.item{text-align:left !important;}
    td.image {/* width: 140px; */}

    div#layout-page table {width: 100%;}

    div#layout-page table th {
        padding: 8px 0;
        background: #F8F8F8;
        border: 1px solid #CCC;
        text-align: center;
        font-weight: bold;
        color: #333;
    }
    textarea#note {border: 1px solid #ccc;vertical-align: top;}
    label {}

    .checkout-buttons.clearfix label {
        display: block;
        font-size: 13px;
        margin-bottom: 10px;
    }

    .checkout-buttons.clearfix {margin: 20px 0 5px;}
    a.continue {
        margin-top: 20px;
        display: inline-block;
        padding: 0 10px;
        border: 1px solid #666;
        border-radius: 5px;
        background: #fff;
        height: 34px;
        line-height: 34px;
    }
    a.continue i{margin-right:5px;}
    a.continue:hover{background: #6E9602;color:#fff}
    .buttons.clearfix button, .buttons.clearfix #update-cart, #check {
        background: #6E9602;
        color: #fff;
        border: none;
        padding: 10px 23px;
        margin: 5px 10px 5px 0;
        cursor:pointer;
        display: inline-block;
    }
    #check{margin-right:0;}
    div#layout-page h1 {
        font-size: 15px;
        margin-bottom: 10px;
        text-transform: initial;
        border: 0;
        color: #333;
        line-height: initial;
    }
    .cart-buttons.inner-right{
        float: right;
        margin-top: 20px;
    }
    input[type="number"]{text-align:center;}
    @media screen and (max-width:767px){
        div#layout-page table td{
            padding:5px 0;
        }
        div#layout-page table td.qty input{
            width:50px !important;
        }
        #cart #checkout, #update-cart, .bottom-cart-right {
            width: auto;
        }
    }
    .text-right{text-align:right}
    .price-text {
        color: red;
        font-weight: 600;
    }

    tr .image{width:75px;box-sizing: border-box;position:initial}
    tr .item{width:400px;box-sizing: border-box;}
    tr .qty{width:50px;box-sizing: border-box;}
    .item-quantity {width: 50px;box-sizing: border-box;border: 1px solid #999;height: 24px;}
    tr .promotion{width:85px;box-sizing: border-box;}
    tr .remove{width:25px;box-sizing: border-box;}
</style>
<div class="styleBreadcrumb">
    <div class="container">
        <div class="tfsBreadcrumb ">
            <ol class="breadcrumb breadcrumb-arrow hidden-sm hidden-xs">
                <li><a href="/" target="_self">Trang chủ</a></li>
                <li class="active">Giỏ hàng</li>
            </ol>
        </div>
    </div>
</div>
<!--cart-->
<div class="container">
    <div id="cart">
        <!-- Begin empty cart -->
        <div class="row">
            <div id="layout-page" class="col-md-12">
                <?php if (!empty($cart)):?>
                <?php echo $this->element('Layout/cart');?>
                <?php endif;?>
            </div>
        </div>
        <!-- End cart -->
    </div>
</div>
<!--/cart-->
