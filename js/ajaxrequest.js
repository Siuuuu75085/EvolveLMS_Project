function addStu(){
    var StuName=$("#StuName").val();
    var StuEmail=$("#StuEmail").val();
    var StuPass=$("#StuPass").val();
    
    $.ajax({
        url:'student/addStudent.php',
        method:'POST',
        data:{
            StuSignUp: "StuSignUp",
            StuName: StuName,
            StuEmail: StuEmail,
            StuPass: StuPass,
        },
        success:function(data){
            console.log(data);
        },


    });
}