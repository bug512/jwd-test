$(document).ready(function() {
    $('input[type="submit"]').click(function(){
        var email = $('input[name="company_email"]').val();

        if(IsEmail(email)==false){
            $('#invalid_email').show();
            return false;
        }else{
            return true;
        }

    });
});
function IsEmail(email) {
    var regex = /^([a-zA-Z0-9_\.\-\+])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
    if(!regex.test(email)) {
        return false;
    }else{
        return true;
    }
}