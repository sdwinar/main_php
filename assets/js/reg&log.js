$(document).ready(function(){
        $("#toggleForm").click(function() {
            $("#loginForm").toggle();
            $("#registerForm").toggle();
            var currentTitle = $("#formTitle").text();
            var newTitle = currentTitle === "Login" ? "Register" : "Login";
            $("#formTitle").text(newTitle);
            return false;
        });


    // ******************************اجاكس فورم تسجيل جديد****************************
$(function() {
    $("#registerForm").ajaxForm({
        beforeSend: function() {
            $("#regrusalt").html(
                "<img src='assets/media/img/main/lod.gif' width='140px' style='margin-top: 15px;width: 28%;height: 4vh;' />");
        },
        success: function(data) {
            $("#regrusalt").html(data);
        },
        error: function(er) {
            alert(er)
        }
    });
});
// ******************************اجاكس فورم تسجيل جديد****************************
    // ******************************ajax form login***************************
    $(function() {
        $("#loginForm").ajaxForm({
            beforeSend: function() {
                $("#logrusalt").html(
                    "<img src='assets/media/img/main/lod.gif' width='140px' style='margin-top: 15px;width: 28%;height: 4vh;' />");
            },
            success: function(data) {
                $("#logrusalt").html(data);
            },
            error: function(er) {
                alert(er)
            }
        });
    });
    // ******************************اجاكس فورم تسجيل جديد****************************
});