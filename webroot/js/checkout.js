$(document).ready(function(){
    checkoutInputs();
    checkout();
});

function checkoutInputs() {
    $('#billing_address_full_name').on('change', function(){
        var val = $(this).val();
        $('#fullname span').html(val);
    });
    $('#billing_address_phone').on('change', function(){
        var val = $(this).val();
        $('#phone_number span').html(val);
    });
    $('#order_email').on('change', function(){
        var val = $(this).val();
        $('#email_address span').html(val);
    });
    $('#billing_address_address1').on('change', function(){
        var val = $(this).val();
        $('#address_number span').html(val);
    });
}

function checkout() {
    var error = false;
    $('.btn-checkout').unbind('click').bind('click', function() {
        $('.required').each(function(e) {
            var val = $(this).val();
            if (val == '') {
                error = true;
            }
        });

        if (error) {
            $('.new_order').addClass('error');
            $('.error.summary').show();
        } else {
            $('#forminfo').submit();
        }
    });
    
}


