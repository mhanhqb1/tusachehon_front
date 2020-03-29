
if ($('#purchase-form').find('.show__info').length == 0){
	$('#billing_address_address1').attr('placeholder','số nhà/đường/phường');
	var init_el_info = '<div class="show__info"><h2>Thông tin mua hàng của bạn</h2><ul>';
	init_el_info += '<li id="fullname">Họ và Tên: <span>' + $('#billing_address_full_name').val() + '</span></li>';
	init_el_info += '<li id="phone_number">Số điện thoại: <span>' + $('#billing_address_phone').val() + '</span></li>';
	init_el_info += '<li id="email_address">Email: <span></span>' + $('#order_email').val() + '</li>';
	init_el_info += '<li id="address_number">Số nhà/đường/phường: <span>' + $('#billing_address_address1').val() + '</span></li>';
	init_el_info += '<li id="province">Tỉnh/Thành phố: <span>' + $('#billing_address_province').find('option:selected').text() + '</span></li>';
	init_el_info += '<li id="district">Quận/Huyện: <span>' + $('#shipping_district').find('option:selected').text() + '</span></li>';
	init_el_info += '</ul></div>';
	$(init_el_info).insertAfter('.shiping-ajax');
}
$("#billing_address_full_name").keyup(function(){
	$("#fullname span").text(this.value);
});
$("#billing_address_phone").keyup(function(){
	$("#phone_number span").text(this.value);
});
$("#order_email").keyup(function(){
	$("#email_address span").text(this.value);
});
$("#billing_address_address1").keyup(function(){
	$("#address_number span").text(this.value);
});
$('#billing_address_province').bind('change', function(){
	$('#province span').text($(this).find('option:selected').text());
});
$('#shipping_district').bind('change', function(){
	$('#district span').text($(this).find('option:selected').text());
});

function addToCart2($pId, $qty) {
    if (typeof $pId == 'undefined') {
        $pId = false;
    }
    if (typeof $qty == 'undefined') {
        var selectQty = $('#quantity').val();
        if (selectQty) {
            $qty = selectQty;
        } else {
            $qty = 1;
        }
    }
    if ($pId) {
        var loader = $('.loader');
        var $param = {
            'type': 'POST',
            'url': BASE_URL + '/ajax/addtocart',
            'data': {
                'product_id': $pId,
                'qty': $qty
            },
            'callback': function (result) {
                window.location.href = BASE_URL + '/gio-hang';
            }
        };
        cms_adapter_ajax($param);
    }
    return false;
}

function addToCart($pId, $qty) {
    if (typeof $pId == 'undefined') {
        $pId = false;
    }
    if (typeof $qty == 'undefined') {
        var selectQty = $('#quantity').val();
        if (selectQty) {
            $qty = selectQty;
        } else {
            $qty = 1;
        }
    }
    if ($pId) {
        var loader = $('.loader');
        var $param = {
            'type': 'POST',
            'url': BASE_URL + '/ajax/addtocart',
            'data': {
                'product_id': $pId,
                'qty': $qty
            },
            'callback': function (result) {
                var obj = JSON.parse(result);
                var _qty = obj.data.qty;
                var _total = obj.total;
                var _image = obj.data.image;
                var _name = obj.data.name;
                var _price = obj.data.price + 'đ';
                var _html = obj.html;
                
                $('#modal-product .product-pic').html("<img src='"+_image+"'/>");
                $('#modal-product .modal-quantity span').html(_qty);
                $('#modal-product .product-info h3').html(_name);
                $('#modal-product .price-new').html(_price);
                $('#modal-product .modal-price').html(_price);
                
                $('#modal-product').modal();
                $('#cart-block .cart-block').html(_html);
            }
        };
        cms_adapter_ajax($param);
    }
    return false;
}

function updateCart($pId, $qty) {
    if (typeof $pId == 'undefined') {
        $pId = false;
    }
    if (typeof $qty == 'undefined') {
        $qty = 0;
    }
    if ($pId) {
        var loader = $('.loader');
        var $param = {
            'type': 'POST',
            'url': BASE_URL + '/ajax/updatecart',
            'data': {
                'product_id': $pId,
                'qty': $qty
            },
            'beforeSend': function () {
                loader.show();
            },
            'callback': function (data) {
                if (data != 'Error') {
                    $('#layout-page').html(data);
                }
            },
            'complete': function() {
                loader.hide();
            }
        };
        cms_adapter_ajax($param);
    }
    return false;
}

/*
 * Process ajax request
 *
 * $param là một object {'type','url', 'data', 'callback'}
 *
 * default type POST
 /*********************************************************************/
function cms_adapter_ajax($param) {
    if (typeof $param.complete == 'undefined') {
        $param['complete'] = function(){};
    }
    if (typeof $param.beforeSend == 'undefined') {
        $param['beforeSend'] = function(){};
    }
    $.ajax({
        headers: {
            'X-CSRF-Token': _csrfToken
        },
        url: $param.url,
        type: $param.type,
        data: $param.data,
        async: true,
        beforeSend: $param.beforeSend,
        success: $param.callback,
        complete: $param.complete
    });
}