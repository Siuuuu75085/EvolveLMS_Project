<?php
if(!isset($_SESSION)){
    session_start();
}

include('./stuInclude/header.php');
include_once('../dbConnection.php');

if(isset($_SESSION['is_login'])){
    $stuEmail = $_SESSION['stuLogEmail'];
} else {
    echo "<script> location.href = '../index.php'; </script>";
}

$sql = "SELECT * FROM student WHERE stu_email = '$stuEmail'";
$result = $conn->query($sql);
if($result->num_rows == 1){
    $row = $result->fetch_assoc();
    $stuID = $row['stu_id'];
    $stuName = $row['stu_name'];
    $stuoCC = $row['stu_occ'];
    $stuImg = $row['stu_img'];

}

if(isset($_REQUEST['updatesStuNameBtn'])){
    if(($_REQUEST['stuName'] == "")){
        // msg displayed if required field missing
        $passmsg = '<div class="alert alert-warning col-sm-6 ml-5 mt-2" role="alert"> FILL ALL Fileds </div>';
    } else {
        $stuName = $_REQUEST['stuName'];
        $stuOcc = $_REQUEST['stuOcc'];
        $stu_image = $_FILES['stu_image']['name'];
        $stu_image_temp = $_FILES['stu_image']['tmp_name'];
        $img_folder = '../image/'.$stu_image;
        move_uploaded_file($stu_img_temp, $img_folder);
        $sql = "UPDATE student SET stu_name = '$stuName', stu_occ == '$stuOcc', stu_img = '$stu_image' WHERE stu_email = '$stuEmail'";
        if($conn->query($sql) == TRUE){
            // below msg display on form submit success
            $passmsg = '<div class="alert alert-success col-sm-6 ml-5 mt-2" role="alert"> Updated Successfully </div>';
        } else {
            // below msg display on form submit failed
            $passmsg = '<div class="alert alert-danger col-sm-6 ml-5 mt-2" role="alert"> Unable to Update </div>';
        }
    }
}

?>
    <div class="col-sm-6 mt-5>
    <form class="mx-5" method="POST" enctype="multipart/form-data">
        <div class="form-group">
            <label for="stuId">Student ID</label>
            <input type="text" class="form-control" id="stuId" name="stuId" value="<?php if(isset($stuID)) {echo $stuID;} ?>" readonly>
        </div>
        <div class="form-group">
            <lable for="stuEmail">Email</lable>
            <input type="email" class="form-control" id="stuEmail" value=" <?php echo $stuEmail ?>" readonly>
        </div>
        <div class="form-group">
            <label for="stuName">Name</label>
            <input type="text" class="form-control" id="stuName" value=" <?php if(isset($stuName)) {echo $stuName;} ?>">
        </div>
        <div class="form-group">
            <!-- Student doesnt mean school student it also means learner -->
            <lable for="stuOcc">Occupation</lable>
            <input type="text" class="form-control" id="stuOcc" name="StuOcc" value=" <?php if(isset($stuOcc)) {echo $stuOcc;} ?>">
        </div>
        <div class="form-group">
            <lable fir="stuImg">Upload Image</lable>
            <input type="file" class="form-control-file" id="stuImg" name="stuImg">
        </div>
        <button type="submit" class="btn btn-primary" name="updateStuNameBtn">Upadte</button>
        <?php if(isset($passmsg)) {echo $passmsg;} ?>
    </form>
    </div>

</div> <!-- Close Row Div from header.php -->

<?php
include('./stuInclude/footer.php');
?>