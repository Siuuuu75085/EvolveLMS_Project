<<<<<<< HEAD
=======
$(document).ready(function(){
    // ajax call form Already Exists Email Verification
    $("#Stuemail").on("keypress blur", function(){
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var StuEmail = $("#Stuemail").val();
        $.ajax({
            url: 'Student/addstudent.php',
            method: "POST" ,
            data:{
                checkemail:"checkmail",
                StuEmail: StuEmail,
            },
            success: function(data){
                // console.log(data);
                if (data != 0) {
                $("#statusMsg2").html(
                '<small style="color: red;">Email ID Already Used !</
                 small>'
                );
                $("#signup").attr("disabled", true);
                } else if (data == 0 && reg.test(Stuemail)){
                $("#statusMsg2").html(
                '<small style="color:green; ">There You Go !</small>'
                );
                $("#signup").attr("disabled", false);
                } else if (!reg.test(Stuemail)) {
                    $("#statusMsg2").html(
                        '<small style="color: red;">Please Enter valid Email e.g. evolvelms@gmail.com ! !</
                         small>'
                        );
                        $("#signup").attr("disabled", false);
                    
                }
                if(Stuemail == ""){
                    $("#statusMsg2").html(
                        '<small style="color:red; ">Please Enter Email !</small>'
                    );
                }
            },
        });
    });
});

>>>>>>> dc12ad9 (init project)
function addStu(){
    var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
    var StuName=$("#StuName").val();
    var StuEmail=$("#StuEmail").val();
    var StuPass=$("#StuPass").val();
    
    //Checking form Fields on form Submission
    if (StuName.trim()==""){
        $("#statusMsg1").html('<small style="color:red;">Please Enter Name !</small>');
        $("#StuName").focus();
        return false;
    }else if (StuEmail.trim()==""){
        $("#statusMsg2").html('<small style="color:red;">Please Enter Email !</small>');
        $("#StuPass").focus();
        return false;
    } else if (StuEmail.trim()!="" && !reg.test(StuEmail)){
<<<<<<< HEAD
        $("#statusMsg2").html('<small style="color:red;">Please Enter vaild Email e.g. evolvelms@gmail.com !</small>');
=======
        $("#statusMsg2").html('<small style="color:red;">Please Enter valid Email e.g. evolvelms@gmail.com !</small>');
>>>>>>> dc12ad9 (init project)
        $("#StuPass").focus();
        return false;
    } else if (StuPass.trim() ==""){
        $("#statusMsg3").html('<small style="color:red;">Please Enter Pass !</small>');
        $("#StuPass").focus();
        return false;
    } else {
        $.ajax({
            url:'student/addStudent.php',
            method:'POST',
            dataType:"json",
            data:{
                StuSignUp: "StuSignUp",
                StuName: StuName,
                StuEmail: StuEmail,
                StuPass: StuPass,
            },
            success:function(data){
                console.log(data);
                if(data =="OK"){
                    $('#successMsg').html("<span class='alert alert-success'>Registration Successful !</span>");
                    clearStuRegField();
                } else if(data == "Failed"){
                    $('#successMsg').html("<span class='alert alert-danger'>Unable to Registration!</span>");
                }

            },
    });
    }
}

//empty all fields
function clearStuRegField(){
    $("#StuRegForm").trigger("reset");
    $("#statusMsg1").html(" ");
    $("#statusMsg2").html(" ");    
    $("#statusMsg3").html(" ");
<<<<<<< HEAD
=======
}


// Ajax Call for student Login verification
function checkStuLogin() {
    var StulogEmail = $("#StuLogemail").val();
    var StuLogPass = $("#StuLogpass").val();
    $.ajax({
    url: "Student/addstudent.php",
    method: "POST",
    data: {
        checkLogemail: "checklogmail",
        StulogEmail: StulogEmail,
        StulogPass: StulogPass,
        },
    successs: function (data) {
        if(data ==0 ){
            $(statusLogMsg"").html(
                '<small class="alert alert-danger">Invalid Email ID or Password !</small>'
            ); 
        } else if(data==1){
            $(statusLogMsg"").html(
                '<div class="spinner spinner-border text-success" role="status"></div>'
            ); 
            setTimeout()=>{
                window.location.href = "index.php";
            },1000);
        }
        },
    });
>>>>>>> dc12ad9 (init project)
}