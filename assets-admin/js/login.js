$(document).ready(function(){
    let email, password;
    $(document).on('click',':button[type="submit"]',function(){
        email    = $('#email').val();
        password = $('#password').val();
        console.log(password);
    });    
});