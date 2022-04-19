
$(document).ready(function(){
    $('#text-kirim').show();
    $('#loading-kirim').hide();

    let border_error   = {
        'border'       : '#ff3939 solid 1px',
        'border-top'   : '0',
        'border-right' : '0',
        'border-left'  : '0'
    };

    let border_success = {
        'border'       : '#39e1ff solid 1px',
        'border-top'   : '0',
        'border-right' : '0',
        'border-left'  : '0'
    };

    function success() {
        $('#nama').css(border_success);
        $('#notelp').css(border_success);
        $('#email').css(border_success);
        $('#catatan').css(border_success);
        show();
    }
    
    function error(nama, notelp, email, catatan) {
        $('#nama').css((nama) ? border_success : border_error);
        $('#notelp').css((notelp) ? border_success : border_error);
        $('#email').css((email) ? border_success : border_error);
        $('#catatan').css((catatan) ? border_success : border_error);
        show();
    }
    
    function show() {
        $('#send_btn').prop('disabled', false);
        $(':input').prop('disabled', false);
        $('#text-kirim').show();
        $('#loading-kirim').hide();
    }
    
    function hide() {    
        $('#send_btn').prop('disabled', true);
        $(':input').prop('disabled', true);
        $('#text-kirim').hide();
        $('#loading-kirim').show();
    }
    
    $(document).on('click','#send_btn',function(){
        hide();
        let nama    = $('#nama').val();
        let notelp  = $('#notelp').val();
        let email   = $('#email').val();
        let catatan = $('#catatan').val();
    
        if (
            nama &&
            notelp &&
            email &&
            catatan
        ) {
            $.ajax({
                url      : 'email',
                method   : 'POST',
                dataType : 'JSON',
                data     : {
                    nama    : nama,
                    notelp  : notelp,
                    email   : email,
                    message : catatan
                },
                success:function(response) {
                    success();
                },
                error:function(){
                    show();
                }
            });
        } else {
            error(nama, notelp, email, catatan);
        }
    });
    
    $(document).on('click','#info',function(){
        $('#info').hide();
    });
});
