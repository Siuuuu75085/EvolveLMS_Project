<?php
  include("mainPart/header.php");
?>
<!---------------------------Start Video BackGround------------------------------>
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
  <video playinline autoplay muted loop >
    <source src="video/vecteezy_online-learning-education-by-using-laptop_27146970.mp4" >
  </video>
  <div class="vid-overlay"></div>
</div>
  <div class="vid-content">
    <h1 class="my-content text-primary">Welcome to Evolve</h1>
    <small class="my-content text-primary">The next generation of learning</small><br>
<<<<<<< HEAD
   <!-- <a href="#" class="btn btn-danger">Get Started</a> -->
        <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#StuLogin">
      Get Started
        </button>
=======
   <?php
   if(!isset($_SESSION['is_login'])){
    echo '<!-- <a href="#" class="btn btn-danger mt-3">Get Started</a> -->
    <button type="button" class="btn btn-danger mt-3" data-bs-toggle="modal" data-bs-target="#StuLogin">
  Get Started
    </button>';
   } else {
    echo '<a class="btn btn-primary mt-3" href="#">My Profile</a>';
   }

   ?>
>>>>>>> dc12ad9 (init project)
</div>
</div>
<!------------------------------- End Video BackGround--------------------->


<!--------------------------------- Start Text Banner---------------------------->
<div class ="container-fluid bg-danger txt-banner">
<div class="row bottom-banner">
  <div class="col-sm">
    <h5> <i class="fas fa-book-open mr-3"></i> 200+ Online Courses</h5>
  </div>
  <div class="col-sm">
    <h5><i class= "fas fa-users mr-3"></i> Expert Instructors</h5>
  </div>
  <div class="col-sm">
    <h5><i class="fas fa-keyboard mr-3"></i> Lifetime Access</h5>

  </div>
  <div class="col-sm">
    <h5><i class="fas fa-dollar-sign mr-3"></i> Money Back Guarantee</h5>
  </div>
</div>
</div>


<!------------------- End Text Banner--------------------------------->
<!---------------------------------Start Most Popular Course------------------------>
<div class="container mt-5">
  <h1 class="text-center">Popular Course</h1>
  <!-- Start Most Popular Course 1st Card Deck-->
  <div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="image/BA.png" class="card-img-top" alt="Business Administration">
      <div class="card-body">
        <h5 class="card-title">Learn Business Administration</h5>
        <p class="card-text">Take some important Key of Business to get Rich</p>
      </div>
      <div class="card-footer">
          <p class="card-text d-inline"> Price: <small><del> &#8377 4300 </del></del></small><span
          class="font-weight-bolder">&#8377 430</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
      </div>
    </div>
  </div>
  
  <div class="col">
    <div class="card h-100">
      <img src="image/JavaScript.png" class="card-img-top" alt="JavaScript" />
      <div class="card-body">
        <h5 class="card-title">Learn JavaScript Course</h5>
        <p class="card-text">One of these common Language for Coder to code</p>
      </div>
      <div class="card-footer">
          <p class="card-text d-inline"> Price: <small><del> &#8377 4300 </del></del></small><span
          class="font-weight-bolder">&#8377 430</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="image/BT.png" class="card-img-top" alt="Biology Technology" />
      <div class="card-body">
      <h5 class="card-title">Learn Biology Technology Course</h5>
      <p class="card-text">Identifies the original of our human life, Development of people in the future</p>
      </div>
      <div class="card-footer">
          <p class="card-text d-inline"> Price: <small><del> &#8377 4300 </del></del></small><span
          class="font-weight-bolder">&#8377 430</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
      </div>
    </div>
  </div>
</div>
<!--End Course 1---------------------------------------------------------->
<!-- Start Most Popular Course 2sd Card Deck---------------------------------------------->





<div class="row row-cols-1 row-cols-md-3 g-4">
  <div class="col">
    <div class="card h-100">
      <img src="image/BA.png" class="card-img-top" alt="Business Administration">
      <div class="card-body">
        <h5 class="card-title">Learn Business Administration</h5>
        <p class="card-text">Take some important Key of Business to get Rich</p>
      </div>
      <div class="card-footer">
          <p class="card-text d-inline"> Price: <small><del> &#8377 4300 </del></del></small><span
          class="font-weight-bolder">&#8377 430</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="image/JavaScript.png" class="card-img-top" alt="JavaScript" />
      <div class="card-body">
        <h5 class="card-title">Learn JavaScript Course</h5>
        <p class="card-text">One of these common Language for Coder to code</p>
      </div>
      <div class="card-footer">
          <p class="card-text d-inline"> Price: <small><del> &#8377 4300 </del></del></small><span
          class="font-weight-bolder">&#8377 430</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
      </div>
    </div>
  </div>

  <div class="col">
    <div class="card h-100">
      <img src="image/BT.png" class="card-img-top" alt="Biology Technology" />
      <div class="card-body">
      <h5 class="card-title">Learn Biology Technology Course</h5>
      <p class="card-text">Identifies the original of our human life, Development of people in the future</p>
      </div>
      <div class="card-footer">
          <p class="card-text d-inline"> Price: <small><del> &#8377 4300 </del></del></small><span
          class="font-weight-bolder">&#8377 430</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
      </div>
    </div>
  </div>
</div>
<!--End Course 2nd Card Deck------------------------------------------------>
<div class="text-center m-2">
  <a class="btn btn-danger btn-sm" href="#">View All Course</a>

</div>
</div>
<!--End Most Popular Course------------------------------------------------->

<!--Contact Us---------------------------------------------------->
<?php
  include('./contactUs.php');
?>
<!-- end of contactUs -->
<!--Section-------------------------------------------------------->
<div class="container-fluid p-4" style="background-color:antiquewhite">
  <div class="container" style="background-color:antiquewhite">
  <div class="row text-center">
    <div class="col-sm">
      <h5>About Us </h5>
      <p> EnvolveLMS provides universal access to the world's best education, partnering with top universities and organizations to offer courses online.</p>

    </div>
    <div class="col-sm">
      <h5> Category</h5>
      <a class="text-dark" href ="#">Web Development</a><br/>
      <a class="text-dark" href ="#">Web Designing</a><br/>
      <a class="text-dark" href ="#">Android App Dev</a><br/>
      <a class="text-dark" href ="#">Ios Development</a><br/>
      <a class="text-dark" href ="#">Data Analysis</a><br/>
    </div>
    <div class="col-sm">
      <h5> Contact Us </h5>
      <p>EnvolveLMS <br> IU Campus Thu Duc City <br> Ph. 1234567"></Ph></p>
    </div>
  </div>
  </div>
</div>
  <!--End SSection----------------------------------------------------------->
<!--Footer -->
<?php
  include('mainPart/footer.php');
?>
<!--Footer  -->












<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>



</body>
</html>