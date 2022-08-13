$(document).ready(function() {
    $.user = {
        login: function() {
            $.ajax({
                type: "POST",
                url: "login.php",
                data: $('#loginForm').serialize(),
                error: function(data) {
                    alert(data);
                },
                success: function(data) {
                    if (data == "0") {
                        $("#userName").val('');
                        $("#passWord").val('');
                        $('#loginScreen').addClass('border-danger');
                        $('#loginWrong').fadeIn();
                    } else {
                        window.location.replace('index.php');
                    }
                }
            })
        }
    }

})