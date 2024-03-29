// Ajax Call for admin Login verification
function checkAdminLogin() {
    var adminLoginMail = $("#adminLoginMail").val();
    var adminLoginPass = $("#adminLoginPass").val();
    $.ajax({
    url: "Admin/admin.php",
    method: "POST",
    data: {
        checkLogemail: "checklogmail",
        adminLoginMail: adminLoginMail,
        adminLoginPass: adminLoginPass,
        },
    successs: function (data) {
        if(data ==0 ){
            $(statusAdminLogMsg"").html(
                '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
            ); 
        } else if(data==1){
            $(statusAdminLogMsg"").html(
                '<small class="alert alert-success">Success Loading...</small>'
            ); 
            setTimeout() => {
                window.location.href = "Admin/adminDashboard.php";
            },1000);
        }
        },
    });
}