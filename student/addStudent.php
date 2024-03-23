<?php
    include_once('../dbConnection.php');
    if (isset($_POST['StuSignup']) && isset($_POST['StuName']) && isset($_POST['StuEmail'])&& isset($_POST['StuPass'])) {
        # code...

        $StuName= $_POST['StuName'];
        $StuEmail= $_POST['StuEmail'];
        $StuPass=$_POST['StuPass'];

        $sql= "INSERT INTO student(Stu_Name, Stu_Email, Stu_Pass) VALUES('$StuName', '$StuEmail', '$StuPass')"; 

        if ($conn->query($sql)==TRUE) {
            # code...
            echo json_encode("OK");
        } else {
            echo json_encode("Failed");
        }




    }



?>