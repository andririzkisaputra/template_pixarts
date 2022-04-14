$(document).on('click','#send_btn',function(){
    let nama           = $('#nama').val();
    let notelp         = $('#notelp').val();
    let email          = $('#email').val();
    let catatan        = $('#catatan').val();
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

    if (
        nama &&
        notelp &&
        email &&
        catatan
    ) {
        subject = nama+' Mengirim Pesan, Hubungi Ke Nomor : ' + notelp + ' atau Email : ' + email
        $.ajax({
            url      : 'email',
            type     : 'post',
            dataType : 'json',
            data     : {
                subject : subject,
                message : catatan
            },
            success:function(response) {
                alert(response);
                $('#nama').css(border_success);
                $('#notelp').css(border_success);
                $('#email').css(border_success);
                $('#catatan').css(border_success);
            },
            error:function(){
                $('#nama').css(border_success);
                $('#notelp').css(border_success);
                $('#email').css(border_success);
                $('#catatan').css(border_success);
                alert("error");
            }
        });
    } else {
        $('#nama').css((nama) ? border_success : border_error);
        $('#notelp').css((notelp) ? border_success : border_error);
        $('#email').css((email) ? border_success : border_error);
        $('#catatan').css((catatan) ? border_success : border_error);
    }
});

$(document).on('click','#info',function(){
    $('#info').hide();
});