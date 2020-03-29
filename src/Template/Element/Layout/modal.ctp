
<!-- Modal -->
<style>
    .popup-map h3{
        padding-left: 0;
    }
    .img_count_popup iframe{
        width: 100%;
    }
    #popup .modal-body{
        padding: 0;
        position: relative
    }
    .popup_wrap img.bg{
        width: 100%
    }

    .btn_wrap{
        position: absolute;
        bottom: 30px;
        left: 10px;
        width: 100%;
    }

    #close_popup{
        position: absolute;
        right: 17px;
        top: 3px;
        color: #000;
        background: #fff;
        border: 1px solid #fff;
        border-radius: 100%;
        width: 30px;
        height: 30px;
        text-align: center;
        line-height: 30px;
    }
    @media screen and (min-width: 1200px){
        .modal-dialog {
            width: 800px;
        }
    }
    @media screen and (max-width: 1200px){
        .btn_wrap{
            bottom: 0px;
            left: 0;
        }
        .btn_wrap .col-md-6{
            float: left;
            width: 50%;
        }
    }
</style>
<div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="false">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title " id="">Thông tin sản phẩm</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><a aria-hidden="true"></a></button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <form method="post" action="#">
                            <div class="col-lg-5 col-md-6">
                                <div class="image-zoom row">
                                    <img class="p-product-image-feature" src="">
                                    <div id="p-sliderproduct" class="flexslider">
                                        <ul class="slides"></ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6 pull-right" style="padding: 0px 10px;">
                                <div class="form-input">
                                    <div class="product-title p-title">
                                    </div>
                                    <div class="product-price">
                                        <span class="p-price "></span>
                                        <del></del>
                                    </div>
                                </div>
                                <div class="form-input vid ">
                                    <div class="m-vendor">
                                    </div>
                                    <div class="m-sku">
                                    </div>
                                    <div class="m-tt">
                                    </div>
                                </div>
                                <div class="p-option-wrapper">
                                    <select name="id" class="" id="p-select"></select>
                                </div>
                                <div class="form-input ">
                                    <label>Số lượng</label>
                                    <input name="quantity" type="number" min="1" value="1" />
                                </div>
                                <div class="form-input" style="width: 100%">
                                    <button type="submit" class="btn-addcart">Mua nhiều, lợi nhiều </button>
                                    <button disabled class="btn-detail addtocart btn-color-add btn-min-width btn-mgt btn-soldout">Hết hàng</button>
                                    <div class="qv-readmore">
                                        <span> hoặc </span><a class="read-more p-url" href="" role="button">Xem chi tiết</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-6">
                                <div class="social-icons modal-fix">
                                    <div class="block_content">
                                        <ul class="list-unstyled clearfix">
                                            <li class="facebook">
                                                <a target="_blank" href="http://www.facebook.com/" title="THEFACESHOP on Facebook" class="btn-tooltip" data-original-title="Facebook">
                                                    <i class="fa fa-facebook"></i>
                                                    <span>Facebook</span>
                                                </a>
                                            </li>
                                            <li class="youtube">
                                                <a target="_blank" href="https://www.youtube.com/" title="THEFACESHOP on Youtube" class="btn-tooltip" data-original-title="Youtube">
                                                    <i class="fa fa-youtube"></i>
                                                    <span>Youtube</span>
                                                </a>
                                            </li>
                                            <li class="google-plus">
                                                <a target="_blank" href="https://plus.google.com/" title="THEFACESHOP on Google Plus" class="btn-tooltip" data-original-title="Google Plus">
                                                    <i class="fa fa-google-plus"></i>
                                                    <span>Google Plus</span>
                                                </a>
                                            </li>
                                            <li class="instagram">
                                                <a target="_blank" href="#" title="THEFACESHOP on Instagram" class="btn-tooltip" data-original-title="Instagram">
                                                    <i class="fa fa-instagram"></i>
                                                    <span>Instagram</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>
<div class="modal" id="modal-product" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content row">
            <div class="modal-header col-sm-12">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h4 class="modal-title">Bạn vừa thêm vào giỏ hàng</h4>
            </div>
            <div class="modal-body col-sm-12">
                <div class="row">
                    <div class="col-sm-5 product-pic"></div>
                    <div class="col-sm-7 product-info">
                        <h3></h3>
                        <div class="row clearfix">
                            <div class="col-xs-6 modal-quantity">Số lượng: <span>1</span></div>
                            <div class="col-xs-6">
                                <div class="price-new pull-right"></div>
                            </div>
                        </div>
                        <div class="clearfix bd-top">
                            <div class="pull-left">Tổng cộng:</div>
                            <div class="pull-right modal-price"></div>
                        </div>
                        <div class="row cart-footer-btns">
                            <div class="col-sm-6">
                                <a class="btn-action action-continue" data-dismiss="modal">Tiếp tục mua sắm</a>
                            </div>
                            <div class="col-sm-6">
                                <a class="btn-action action-view-cart" href="<?php echo $BASE_URL; ?>/gio-hang">Xem giỏ hàng</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="control-wrapper">


                </div>
            </div>
        </div>
    </div>
</div>
<!-- /.modal -->
<script>
    var callBack = function (variant, selector) {
        if (variant) {
            modal = $('#quick-view-modal');
            $('.p-price').html(Haravan.formatMoney(variant.price, "{{amount}}₫"));
            if (variant.compare_at_price > 0)
                modal.find('del').html(Haravan.formatMoney(variant.compare_at_price, "{{amount}}₫"));
            else
                modal.find('del').html('');
            if (variant.available) {
                modal.find('.btn-addcart').css('display', 'block');
                modal.find('.btn-soldout').css('display', 'none');
            } else {
                modal.find('.btn-addcart').css('display', 'none');
                modal.find('.btn-soldout').css('display', 'block');
            }
            if (variant.sku != null) {
                modal.find('.m-sku').html('<span>Mã sản phẩm: </span>' + variant.sku);
            }
        } else {
            modal.find('.btn-addcart').css('display', 'none');
            modal.find('.btn-soldout').css('display', 'block');
        }
    }
    var p_select_data = $('.p-option-wrapper').html();
    var p_zoom = $('.image-zoom').html();
    var quickViewProduct = function (purl) {

        if ($(window).width() < 680) {
            window.location = purl;
            return false;
        }
        modal = $('#quick-view-modal');
        modal.modal('show');
        $.ajax({
            url: purl,
            async: false,
            success: function (product) {
                $.each(product.options, function (i, v) {
                    product.options[i] = v.name;
                })
                modal.find('.p-title').html('<h1>' + product.title + '</h1>');
                modal.find('.p-option-wrapper').html(p_select_data);
                modal.find('.m-vendor').html('<span>Nhà cung cấp: </span>' + product.vendor);
                $('.image-zoom').html(p_zoom);
                modal.find('.p-url').attr('href', product.url);
                if (product.images.length == 0) {
                    modal.find('.p-product-image-feature').attr('src', '//hstatic.net/0/0/global/noDefaultImage6_large.gif');
                } else {
                    $('#p-sliderproduct').remove();
                    $('.image-zoom').append("<div id='p-sliderproduct' class='flexslider'>");
                    $('#p-sliderproduct').append("<ul class='slides'>");

                    $.each(product.images, function (i, v) {
                        elem = $('<li class="product-thumb">').append('<a href="#" data-image="" data-zoom-image=""><img /></a>');
                        elem.find('a').attr('data-image', Haravan.resizeImage(v, 'medium'));
                        elem.find('a').attr('data-zoom-image', v);
                        elem.find('img').attr('data-image', Haravan.resizeImage(v, 'medium'));
                        elem.find('img').attr('data-zoom-image', v);
                        elem.find('img').attr('src', Haravan.resizeImage(v, 'small'));
                        modal.find('.slides').append(elem);
                    })

                    modal.find('.p-product-image-feature').attr('src', product.featured_image);
                    $(".modal-footer .btn-readmore").attr('href', purl);
                    var iflag = 0;
                    $('#p-sliderproduct img').load(function () {
                        iflag++;
                        if (iflag == $('#p-sliderproduct img').length) {
                            $('#p-sliderproduct').flexslider({
                                animation: "slide",
                                controlNav: false,
                                animationLoop: false,
                                slideshow: false,
                                itemWidth: 80
                            });
                        }
                    })
                    modal.find('.owl-item:first-child img').click();
                }
                $.each(product.variants, function (i, v) {
                    modal.find('select#p-select').append("<option value='" + v.id + "'>" + v.title + ' - ' + v.price + "</option>");
                })
                if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1)
                    $('.p-option-wrapper').hide();
                else
                    $('.p-option-wrapper').show();
                if (product.variants.length == 1 && product.variants[0].title.indexOf('Default') != -1) {
                    callBack(product.variants[0], null);
                } else {
                    new Haravan.OptionSelectors("p-select", {product: product, onVariantSelected: callBack});
                    debugger
                    if (product.options.length == 1 && product.options[0].indexOf('Tiêu đề') == -1)
                        modal.find('.selector-wrapper:eq(0)').prepend('<label>' + product.options[0] + '</label>');

                    $('.p-option-wrapper select:not(#p-select)').each(function () {
                        $(this).wrap('<span class="custom-dropdown custom-dropdown--white"></span>');
                        $(this).addClass("custom-dropdown__select custom-dropdown__select--white");
                    });
                    callBack(product.variants[0], null);
                }

            }
        });

        //$('.modal-backdrop').css('opacity', '0');
        return false;
    }
    $('#quick-view-modal ').on('click', '.product-thumb img', function (event) {
        event.preventDefault();
        modal = $('#quick-view-modal');
        modal.find('.p-product-image-feature').attr('src', $(this).attr('data-zoom-image'));
        modal.find('.product-thumb').removeClass('active');
        $(this).parents('li').addClass('active');
        return false;
    })
    $(document).ready(function () {
        $('a.btn-quickview-1').click(function (event) {
            //console.log('abc')
            event.preventDefault();
            quickViewProduct($(this).attr('data-handle'));
        })
    })
</script>
<!--End all modal codes-->

