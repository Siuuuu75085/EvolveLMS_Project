<?php
<<<<<<< HEAD
    include_once('../dbConnection.php');
=======
    if(!isset($_SESSION)){
        session_start();
    }
    include_once('../dbConnection.php');

    // checking email
    
    if(isset($_POST['checkemail']) && isset($_POST['stuemail'])){
    $Stuemail = $_POST['stuemail'];
    $sql = "SELECT stu_email FROM student WHERE stu_email = '".
    $Stuemail."'";
    $result = $conn->query($sql);
    $row = $result->num_rows;
    echo json_encode($row);
    }

    // Insert student


>>>>>>> dc12ad9 (init project)
    if (isset($_POST['StuSignUp']) && isset($_POST['StuName']) && isset($_POST['StuEmail'])&& isset($_POST['StuPass'])) {
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
<<<<<<< HEAD




    }


=======
    }

// Student Login verification
if(!isset($_SESSION['is_login'])){
    if(isset($_POST['checkLogemail']) && isset($_POST['StulogEmail']) && isset($_POST['StulogPass'])){
        $StulogEmail=$_POST['StulogEmail'];
        $StulogPasss=$_POST['StulogPass'];

    $sql = "SELECTstu_email, Stu_pass FROM student WHERE Stu_email = 
    ' ".$StulogEmail." ' AND Stu_pass= ' ". $StulogPasss." ' ";

    $result = $conn->query($sql);

    $row = $result->num_rows;

    if($row ==1){
        echo json_encode($row);
        $_SESSION['is_login']=true;
        $_SESSION['StulongEmail']=$StulogEmail;
    } else if ($row === 0){
        echo json_encode($row);
    }
}

    
}
>>>>>>> dc12ad9 (init project)

?>