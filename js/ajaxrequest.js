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
        $("#statusMsg2").html('<small style="color:red;">Please Enter vaild Email e.g. evolvelms@gmail.com !</small>');
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
}