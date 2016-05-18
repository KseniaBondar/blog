$(document).ready(function () {

    $("#login-form").submit(function(event){
        event.preventDefault();
        $('.login-empty-error').hide();
        $('.login-error').hide();
        if($('#login-form input[name="login"]').val() === '' || $('#login-form input[name="password"]').val() === ''){

            $('.login-empty-error').show();
          //  return;
        }
        $.ajax({
            url: '/php/login.php',
            method: 'POST',
            dataType : 'json',
            data: {
                login: $('#login-form input[name="login"]').val(),
                password: $('#login-form input[name="password"]').val()
            },
            success: function(data){
                if(data.isError  && data.errorCode == 0){
                    $('.login-empty-error').show();
                }else if(data.isError  && data.errorCode == 1){
                    $('.login-error').show();
                }else if(!data.isError){
                    location.reload();
                }
            }
        });
        return;
    });
/*    $.ajax({
        url: 'login.php',
        success: function () {
            alert('Success');
        }

    });*/
})
;