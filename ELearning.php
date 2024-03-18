<!DOCTYPE html>
<html Lang="en">
<head>
            <meta charset="UTF-8">
            <meta name="viewport" content ="width=device-width, initial-scale=1.0">
            <link rel="stylesheet" href="css/bootstrap.min.css">

            <link ref="stylesheet" href="css/all.min.css">
          <!--Google Font-->
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
           
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&display=swap" rel="stylesheet"><!-- CSS -->
    
            <link rel="preconnect" href="https://fonts.googleapis.com">
            <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
            <link href="https://fonts.googleapis.com/css2?family=DM+Serif+Display:ital@0;1&family=Lora:ital,wght@0,400..700;1,400..700&family=Pacifico&display=swap" rel="stylesheet">

           
            <!-------------------------custom css---------------------->
<link rel ="stylesheet" href="css/style.css">
    <title>EvolveLMS</title>
</head>
<body>
<!---------------------------------Start Navigation------------------------->
<nav class="navbar navbar-expand-sm navbar-dark bg-dark pl-5 fixed-top">
  <div class="container-fluid">
    <a class="navbar-brand" href="">Evolve</a>
    <span class="navbar-text" >Learn and Implement</span>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav custom-nav">
      
        <a class="nav-link" href="">Home</a>
        <a class="nav-link" href="">Courses</a>
        <a class="nav-link" href="">My Profile</a>
        <a class="nav-link" href="">Login</a>
        <a class="nav-link" href="">Logout</a>
        <a class="nav-link" href="">SignUp</a>
        <a class="nav-link" href="">Feedback</a>
        <a class="nav-link" href="">Contact</a>
      
      </div>
    </div>
  </div>
</nav>
<!-----------------------------End Navigation--------------------------------->

<!---------------------------Start Video BackGround------------------------------>
<div class="container-fluid remove-vid-marg">
  <div class="vid-parent">
  <video playinline autoplay muted loop >
    <source src="video/vecteezy_online-learning-education-by-using-laptop_27146970.mp4" >
  </video>
  <div class="vid-overlay"></div>
</div>
  <div class="vid-content">
    <h1 class="my-content text-primary">Welcome to EvolveLMS</h1>
    <small class="my-content text-primary"> Learn and Implement</small><br>
   <a href="#" class="btn btn-danger">Get Started</a>
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
  <div class="card-deck mt-4">
    <a href="#" class="btn" style="text-align: left; padding:0px;margin:0px;">
    <div class="card">
      <img src ="image/Guitar.png" class="card-img-top" alt="Guitar"/>
      <div class="card-body">
        <h5 class="card-title">Learn Guitar By The Easy Way</h5>
        <p class="card-text">Get music and get happy life</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline"> Price: <small><del> &#8377 4300 </del></del></small><span
        class="font-weight-bolder">&#8377 430</span></p>
        <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>

      </div>
    </div>
    </a>
    <a href="#" class="btn" style="text-align: left; padding:0px;margin:0px;">
      <div class="card">
        <img src ="image/GS.png" class="card-img-top" alt="Galaxy Space Course"/>
        <div class="card-body">
          <h5 class="card-title">Interesting OutSide Of The World</h5>
          <p class="card-text">Experience All of New Things</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline"> Price: <small><del> &#8377 2550 </del></del></small><span
          class="font-weight-bolder">&#8377 250</span></p>
          <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
        </div>
      </div>
      </a>
      <a href="#" class="btn" style="text-align: left; padding:0px;margin:0px;">
        <div class="card">
          <img src ="image/Piano.png" class="card-img-top" alt="Piano"/>
          <div class="card-body">
            <h5 class="card-title"> Learn Piano </h5>
            <p class="card-text"> Music like a friend of our life </p>
          </div>
          <div class="card-footer">
            <p class="card-text d-inline"> Price: <small><del> &#8377 1500 </del></del></small><span
            class="font-weight-bolder">&#8377 130</span></p>
            <a class="btn btn-primary text-white font-weight-bolder float-right" href="#">Join</a>
          </div>
        </div>
        </a>
  </div>
<!--End Course 1---------------------------------------------------------->
<!-- Start Most Popular Course 2sd Card Deck---------------------------------------------->
<div class="card-deck mt-4">
  <a href="#" class="btn" style="text-align: left; padding:0px;">
  <div class="card">
    <img src="image/BA.png" class="card-img-top" alt="Business Administration" />
    <div class="card-body">
      <h5 class="card-title">Learn Business Administration</h5>
      <p class="card-text">Take some important Key of Business to get Rich</p>
    </div>
    <div class="card-footer">
      <p class="card-text d-inline">Price: <small><del> &#8377 2999</del></small>
        <span class="font-weight-bolder">&#8377 299</p</span>
      </p><a
      class="btn btn-primary text-while font-weight-bolder float-right" href="#">Join</a>
    </div>
  </div>
  </a>
  <a href="#" class="btn" style="text-align: left; padding:0px;">
    <div class="card">
      <img src="image/JavaScript.png" class="card-img-top" alt="JavaScript" />
      <div class="card-body">
        <h5 class="card-title">Learn JavaScript Course</h5>
        <p class="card-text">One of these common Language for Coder to code</p>
      </div>
      <div class="card-footer">
        <p class="card-text d-inline">Price: <small><del> &#8377 1700</del></small>
          <span class="font-weight-bolder">&#8377 700</p</span>
        </p><a
        class="btn btn-primary text-while font-weight-bolder float-right" href="#">Join</a>
      </div>
    </div>
    </a>
    <a href="#" class="btn" style="text-align: left; padding:0px;">
      <div class="card">
        <img src="image/BT.png" class="card-img-top" alt="Biology Technology" />
        <div class="card-body">
          <h5 class="card-title">Learn Biology Technology Course</h5>
          <p class="card-text">Identifies the original of our human life, Development of people in the future</p>
        </div>
        <div class="card-footer">
          <p class="card-text d-inline">Price: <small><del> &#8377 2780</del></small>
            <span class="font-weight-bolder">&#8377 230</p</span>
          </p><a
          class="btn btn-primary text-while font-weight-bolder float-right" href="#">Join</a>
        </div>
      </div>
      </a>
</div>
<!--End Course 2nd Card Deck------------------------------------------------>
<div class="text-center m-2">
  <a class="btn btn-danger btn-sm" href="#">View All Course</a>

</div>
</div>
<!--End Most Popular Course------------------------------------------------->

<!--Contact Us---------------------------------------------------->
<div class="container mt-4" id="Contact">

  <h2 class="text-center mb-4"> Contact US</h2>
  <div class="row">
<div class="col-md-8">
  <form action="" method="post">
    <input type="text" class="form-control" name="name"
    placeholder="Name"><br>
    <input type="text" class="form-control" name="subject"
    placeholder="Subject"><br>
    <input type="text" class="form-control" name="email"
    placeholder="E-mail"><br>
    <textarea class="form-control" name="message"
    placeholder="How Can I help You ?" style="height:150px;"></textarea><br>
    <input class="btn btn-primary" type="submit"
    value="Send" name="submit"><br><br>
  </form>
</div>
<div class="col-md-4 stripe text=white text-center">
  <h4>EnvolveLMS</h4>
  <p>EnvolveLMS,
    IU Campus Thu Duc City
    Phone: +1234567<br />
    www.EnvolveLMS.com
  </p>
  </div>
  </div>
  </div>
  <div class="container-fluid bg-danger">
    <div class="row text-white text-center p-1">
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-facebook-f"></i> Facebook</a>

      </div>
      <div class="col-sm">
        <a class="text-white social-hover href="#"><i class="fab fa-twitter"></i> Twitter</a>

      </div>
      <div class="col-sm">
        <a class="text-white social-hover" href="#"><i class="fab fa-whatsapp"></i>Whatsapp</a>
      </div>
        <div class="col-sm">
          <a class="text-white social-hover" href="#"><i class="fab fa-instagram"></i>Instagram</a>
      </div>
    </div>
  </div>
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
  <!--Footer------------------------------------->
  <footer class="container-fluid bg-dark text-center p-2">
    <small class="text-white">Copyright &copy; 2024 || Designed by E-Learning || Admin Login</small>
  </footer>
 <!------------------------END Footer------------------------------------->

<!---------------------- Start Modal -->
<!----------------------- Start Student SignUp ------------>




<!----------------------- END StudentSignUP --------------------->
<!----------------------- EndModal---------------- -->











<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/all.min.js"></script>



</body>
</html>