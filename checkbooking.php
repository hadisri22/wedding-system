<?php
  include('action.php');
  if(!isset($_SESSION['name'])){
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
  <link href="img/weds3.jpg" rel="icon">
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
            <a class="nav-link js-scroll" href="dasboard.php">Dasboard</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div id="home" class="intro route bg-image" style="background-image: url(img/weds3.jpg)">
    <div class="overlay-itro"></div>
    <div class="intro-content display-table">
      <div class="table-cell">
  <div id="ticketdate" class="container mt-5">
    <div class="row">
      <div class="col-md-3"></div>
       <div class="col-md-6">
        <div class="card">
          <div class="card-header">
            <h3 class="text-center">Enter Details</h3>
          </div>
          <div class="card-body bg-dark">
            <form>
             <div class="form-group">
                   <input type="text" class="form-input form-control" name="usn" id="bid" placeholder="Enter Id "/>    
             </div>
              <div class="form-group">
                   <h4 class="form-input form-control">Select Service  : <select class="form-input" id="select" >
                    <option value="cid">Catering</option>
                      <option value="did">Decoration</option>
                        <option value="pid">PhotoShop</option>
                          <option value="tid">Theme</option>
                            <option value="mid">Music</option>
                              <option value="vid">Venue</option>
                     
                   </select>  </h4>
                      
             </div>
             <div class="form-group">
                   <h4 class="form-input form-control">Date  :  <input type="date" class="form-input" id="date"/> </h4>
                      
             </div>
            </form>
          </div>
          <div class="card-footer bg-dark">
            <div class="btn btn-danger ticketdate">Submit</div>
          </div>
          
        </div>
         </div>
       </div>
        <div class="col-md-3"></div>
    </div>
    <div class="container mt-5" id="result">
    <div class="card" >
      <h2 class="text-center ">Service Details </h2>
      <div class="card-header bg-info">
        <div class="row">
          <div class="col-md-3">
            <h3 class="text-center text-white">Service Type</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Service Name </h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Booking Date</h3>
          </div>
          <div class="col-md-3">
            <h3 class="text-center text-white">Price</h3>
          </div>
        </div>
      </div>
      <div class="card-body bg-dark">
       <div id="dresult"></div>
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
