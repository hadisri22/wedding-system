<?php
  include('action.php');
  if(!isset($_SESSION['uname'])){
    header('location:index.php');
  } 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Wedding System</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">
  <link href="img/wed3.jpg" rel="icon">
  <link href="img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">
  <link href="lib/ionicons/css/ionicons.min.css" rel="stylesheet">
  <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
</head>

<body id="page-top">

  <nav class="navbar navbar-b navbar-trans navbar-expand-md fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll" href="#page-top">Haditya Wedding System</a>
      <button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarDefault"
        aria-controls="navbarDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span></span>
        <span></span>
        <span></span>
      </button>
      <div class="navbar-collapse collapse justify-content-end" id="navbarDefault">
        <ul class="navbar-nav">
          <li class="nav-item">
            <a class="nav-link js-scroll active" href="profile.php">Home</a>
          </li>                          
           <li class="nav-item">
            <a class="nav-link js-scroll" href="#das"><?php echo $_SESSION['urname']; ?></a>
          </li>
       
        </ul>
      </div>
    </div>
  </nav>
  <div id="home" class="intro route bg-image" style="background-image: url(img/weds3.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
        <div class="container">         
          <h1 class="intro-title mb-4">Haditya Wedding System</h1>
          <p class="intro-subtitle"><span class="text-slider-items">Make Your Wedding Memorable,Hire Us.</span><strong class="text-slider"></strong></p>
          </div>
      </div>
    </div>
  </div>
<div id="#das">
 <h2 class="text-center">Decoration Details</h2>
  <br>
   <div class="container">
     <div class="card">
       <div class="card-header bg-info">
         <div class="row">
           <div class="col-md-3">Name</div>
           <div class="col-md-3">Price</div>
           <div class="col-md-3">Description</div>
           <div class="col-md-3">Action</div>
          
         </div>
       </div>
        <div class="card-body">
         <?php
            if (isset($_SESSION['uname'])) {
              $sql="SELECT * FROM decoration";
              $run=mysqli_query($con,$sql);
              while ($row=mysqli_fetch_array($run)) {
                $name=$row['name'];
                $did=$row['did'];
                $price=$row['price'];
                $desc=$row['descr'];
                  echo " <div class='row'>
                        <div class='col-md-3'><h5>$name</h5></div>
                        <div class='col-md-3'><h5>$price</h5></div>
                        <div class='col-md-3'><h5>$desc</h5></div>
                        <div class='col-md-3'><h5><div class='btn btn-outline-info add4' rname='$name' rid='$did'>ADD</div></h5></div>
                       </div><br>";
               
              }
              
            }
          ?>
       </div>
     </div>
   </div>
</div>
   
  <div class="section-counter paralax-mf bg-image" style="background-image: url(img/weds.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-checkmark-round"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter"></p>
              <span class="counter-text">WORKS COMPLETED</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-calendar-outline"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter"></p>
              <span class="counter-text">YEARS OF EXPERIENCE</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ios-people"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter"></p>
              <span class="counter-text">TOTAL CLIENTS</span>
            </div>
          </div>
        </div>
        <div class="col-sm-3 col-lg-3">
          <div class="counter-box pt-4 pt-md-0">
            <div class="counter-ico">
              <span class="ico-circle"><i class="ion-ribbon-a"></i></span>
            </div>
            <div class="counter-num">
              <p class="counter"></p>
              <span class="counter-text">AWARD WON</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
 

 <section id="about" class="about-mf sect-pt4 route">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="box-shadow-full">
            <div class="row">
              <div class="col-md-6">
                    <div class="about-img">
                      <img src="img/weds2.jpg" class="img-fluid rounded b-shadow-a" alt="">
                    </div>
                 
              </div>
              <div class="col-md-6">
                <div class="about-me pt-4 pt-md-0">
                  <div class="title-box-2">
                    <h5 class="title-left">
                      About me
                    </h5>
                  </div>
                  <p class="lead">                  
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <div class="testimonials paralax-mf bg-image" style="background-image: url(img/weds1.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div id="testimonial-mf" class="owl-carousel owl-theme">
            <div class="testimonial-box">
              <div class="author-test">               
                <span class="author">Haditya </span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <section class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(img/weds2.jpg)">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="contact-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-6">
                  <div class="title-box-2 pt-4 pt-md-0">
                    <h5 class="title-left">
                      Get in Touch
                    </h5>
                  </div>
                  <div class="more-info">
                    <p class="lead">
                      Sri Wedding Services
                     </p>
                    <ul class="list-ico">
                      <li><span class="ion-ios-location"></span>Stone Hills,Ooty</li>
                      <li><span class="ion-ios-telephone"></span> +911234567890</li>
                      <li><span class="ion-email"></span> sri235@gmail.com</li>
                    </ul>
                  </div>
                  <div class="socials">
                    <ul>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-facebook"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-instagram"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-twitter"></i></span></a></li>
                      <li><a href=""><span class="ico-circle"><i class="ion-social-pinterest"></i></span></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <footer>
      <div class="container">
        <div class="row">
          <div class="col-sm-12">
            <div class="copyright-box">
              <p class="copyright">&copy; Copyright <strong>Haditya Wedding System</strong>. All Rights Reserved</p>
              <div class="credits">
                Designed by <a href="#">Sri Haditya</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </footer>
  </section>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
  <div id="preloader"></div>
  <script src="lib/jquery/jquery.min.js"></script>
  <script src="lib/jquery/jquery-migrate.min.js"></script>
  <script src="lib/popper/popper.min.js"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="lib/easing/easing.min.js"></script>
  <script src="lib/counterup/jquery.waypoints.min.js"></script>
  <script src="lib/counterup/jquery.counterup.js"></script>
  <script src="lib/owlcarousel/owl.carousel.min.js"></script>
  <script src="lib/lightbox/js/lightbox.min.js"></script>
  <script src="lib/typed/typed.min.js"></script>
  <script src="contactform/contactform.js"></script>
  <script src="js/main.js"></script>

</body>
</html>
