<!---------------------- Start Modal -->
<!----------------------- Start Student Signup ------------>
<div class="modal fade" id="StuSignUp" tabindex="-1" aria-labelledby="StuSignUpLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="StuSignUpLabel">Student Registration</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form>
          <div class="form-group">
            <!-- <i class="fas fa-user"></i> -->
            <label for="StuName" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="StuName" id="StuName">
          </div>
          <div class="form-group">
            <label for="StuEmail">Email address</label>
            <input type="email" class="form-control" 
            id="StuEmail" name="StuEmail"
            aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text
            text-muted"> We'll never share your email with anyone else.
            </small>
          </div>
          <label for="StuPass">Password</label>
              <input type="StuPass" id="StuPass" class="form-control" aria-describedby="passwordHelpBlock">
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary" onclick="addStu()">Sign Up</button>
      </div>
    </div>
  </div>
</div>
<!-----------------------END Student Signup --------------------->
<!-- --------------------Start STUDENT LOGIN ----------------- -->

<div class="modal fade" id="StuLogin" tabindex="-1" aria-labelledby="StuLoginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="StuLoginLabel">Student Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
<!-- end of modal -->

        <form id="StuLoginForm" >
          <!-- <div class="form-group">
            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div> -->
          <div class="form-group">
            <label for="StuLoginMail">Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="StuLoginMail"
            id="StuLoginMail"
            aria-describedby="emailHelp">
          </div>
          <label for="StuLoginPass" class="pl-2 font-weight-bold">
              <input type="StuLoginPass" id="StuLoginPass" class="form-control" placeholder="Password" name="StuLoginPass" aria-describedby="passwordHelpBlock">
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </form>

      </div>
      <div class="modal-footer">
        <h6 class="position-absolute bottom-2 start-0">Don't have an account yet? <a href="#login" data-bs-toggle="modal" data-bs-target="#StuSignUp">Sign Up</a></h6>
        <!-- <a href="#login" data-bs-toggle="modal" data-bs-target="#StuSignUp">Don't have an account yet? Sign Up</a> -->
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="StuLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>

<!----------------------- END Student login --------------------->
<!-- --------------------Start ADMIN login ----------------- -->
<div class="modal fade" id="AdminLogin" tabindex="-1" aria-labelledby="AdminLoginLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="adminLoginLabel">Admin Login</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form id="AdminLoginForm">
          <!-- <div class="form-group">
            <label for="stuname" class="pl-2 font-weight-bold">Name</label>
            <input type="text" class="form-control" placeholder="Name" name="stuname" id="stuname">
          </div> -->
          <div class="form-group">
            <label for="adminLoginMail">Email address</label>
            <input type="email" class="form-control" placeholder="Email" name="adminLoginMail"
            id="adminLoginMail"
            aria-describedby="emailHelp">
          </div>
          <label for="adminLoginPass">Password</label>
              <input type="password" id="adminLoginPass" class="form-control" placeholder="Password" name="adminLoginPass" aria-describedby="passwordHelpBlock">
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>
        <button type="button" class="btn btn-primary" id="adminLoginBtn">Login</button>
      </div>
    </div>
  </div>
</div>
<!-- --------------------Start ADMIN login ----------------- -->
<!----------------------- EndModal---------------- -->

  <!--Footer------------------------------------->
  <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2024 || Designed by E-Learning || <a href="#login" data-bs-toggle="modal" data-bs-target="#AdminLogin">Admin Login</a></small>
  </footer>
 <!------------------------END Footer------------------------------------->
 



<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>


<script src="js/all.min.js"></script>



<script type="text/javascript" src="js/ajaxrequest.js"></script>


</body>
</html>