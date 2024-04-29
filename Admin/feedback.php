<?php
if(!isset($_SESSION)) { 
    session_start(); 
}

include('./adinInclude/header.php');
include('../adinConnection.php');

if(isset($_SESSION['is_admin_login'])){
    $adminEmail = $_SESSION['adminLogEmail'];
} else {
    echo "<script> location.href='../index.php'; </script>";
}
?>
<div class="col-sm-9 mt-5">
    <!--Table-->
    <p class=" bg-dark text-white p-2">List of Feedback</p>
    <?php
        $sql = "SELECT * FROM feedback";
        $result = $conn->query($sql);
        if($result->num_rows > 0){
            echo "<table class=\"table\">\n";
            echo "    <thead>\n";
            echo "        <tr>\n";
            echo "            <th scope=\"col\">Feedback ID</th>\n";
            echo "            <th scope=\"col\">Content</th>\n";
            echo "            <th scope=\"col\">Student ID</th>\n";
            echo "            <th scope=\"col\">Action</th>\n";
            echo "        </tr>\n";
            echo "    </thead>\n";
            echo "    <tbody>\n";
            while($row = $result->fetch_assoc()){
                echo "        <tr>\n";
                echo "            <th scope=\"row\">{$row["f_id"]}</th>\n";
                echo "            <td>{$row["f_content"]}</td>\n";
                echo "            <td>{$row["s_id"]}</td>\n";
                echo "            <td><form action=\"\" method=\"POST\" class=\"d-inline\"><input type=\"hidden\" name=\"id\" value=\"{$row["f_id"]}\"><button type=\"submit\" class=\"btn btn-secondary\" name=\"delete\" value=\"Delete\"><i class=\"far fa-trash-alt\"></i></button></form></td>\n";
                echo "        </tr>\n";
            }
            echo "    </tbody>\n";
            echo "</table>\n";
        } else {
            echo "0 Result";
        }
        if(isset($_REQUEST['delete'])) {
            $sql ="DELETE FROM feedback WHERE f_id = {$_REQUEST['id']}";
            if($conn->query($sql) === TRUE){
                echo '<meta http-equiv="refresh" content="0;URL=?deleted" />';
            } else {
                echo "Unable to Delete Data: " . $conn->error;
            } 
        }
    ?>
</div>
</div> <!-- div row close from header -->
</div> <!-- div container-fluid close from header -->
<?php
include('./adinInclude/footer.php');
