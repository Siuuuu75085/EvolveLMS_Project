<form id="StuRegForm">
          <div class="form-group">
            <!-- <i class="fas fa-user"></i> -->
            <label for="StuName" class="pl-2 font-weight-bold">Name</label>
            <small id="statusMsg1"></small>
            <input type="text" class="form-control" placeholder="Name" name="StuName" id="StuName">
          </div>
          <div class="form-group">
            <label for="StuEmail">Email address</label>
            <small id="statusMsg2"></small>
            <input type="email" class="form-control" 
            id="StuEmail" name="StuEmail"
            aria-describedby="emailHelp">
            <small id="emailHelp" class="form-text
            text-muted"> We'll never share your email with anyone else.
            </small>
          </div>
          <label for="StuPass">Password</label>
              <small id="statusMsg3"></small>
              <input type="StuPass" id="StuPass" class="form-control" aria-describedby="passwordHelpBlock">
              <div id="passwordHelpBlock" class="form-text">
                Your password must be 8-20 characters long, contain letters and numbers, and must not contain spaces, special characters, or emoji.
          </div>
</form>