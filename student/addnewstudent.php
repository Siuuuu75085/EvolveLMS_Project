<?php
if(!isset($_SESSION)){
    session_start();
}

include('./admininclue/header.php');
include('../dbConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}


if(isset($_REQUEST['newStuSubmitBtn'])){
    // CHecking for Empty Fields
    if(($_REQUEST['stu_name']  == "")  || ($_REQUEST['stu_email'] =="") || ($_REQUEST['stu_pass'] =="") || ($_REQUEST['stu_occ'] =="")){
        $msg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2">Fill All Fields</div>';
    } else {
        $stu_name = $_REQUEST['stu_name'];
        $stu_email = $_REQUEST['stu_email'];
        $stu_pass = $_REQUEST['stu_pass'];
        $stu_occ = $_REQUEST['stu_occ'];
        
        $sql = "INSERT INTO student (stu_name, stu_email, stu_pass, stu_occ) VALUES ('$stu_name', '$stu_email', '$stu_pass', '$stu_occ')";
        if($conn->query($sql) == TRUE){
            $msg = '<div class= "alert alert-success col-sm-6 ml-5 mt-2">Unable to Add Student</div>';
        }
    }
}

?>

<div class="col-sm-6 mt-5 mx-3 jumbotron">
    <h3 class="text-center">Add New Student</h3>
    <from action="" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <lable for="stu_name">Student Name</label>
            <input type="text" class="form-control" id="stu_name"
            name="stu_name">
            </div>
<div class="form-group">
<label for="stu_email">Student email</label>
<textarea class="form-control" id="stu_email"
name="stu_email" row=2></textarea>
</div>
<div class="form-group">
<label for="stu_pass">Pass</label>
<input type="text" class="form-control" id="stu_pass"
name="stu_pass">
</div>
<div class="form-group">
<label for="stu_occ">occ</label>
<input type="text" class="form-control" id="stu_occ" name="stu_occ">
</div>
<?php if(isset($msg)) {echo $msg;} ?>
</form>
</div>
</div> <!-- div Row close from header -->
</div> <!-- div Conatiner-fluid close from header !
<?php
include('./admininclude/footer.php');
?>

