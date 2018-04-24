<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Logo Detection</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">


  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">

</head>
<body>


<header id="header">
  <div class="container">



    <nav id="nav-menu-container">
      <ul class="nav-menu">
        <li class="menu-active"><a style="color: #333;" href="{{ url('home')}}">Home</a></li>

        <li class="menu-active"><a style="color: #333;" href="{{ url('get_instagram_images')}}">Back</a></li>
        <li><a  style="color: #333;"href="{{ url('logout') }}">Logout</a></li>

      </ul>
    </nav><!-- #nav-menu-container -->
  </div>
</header><!-- #header -->





<section id="contact">
    <div class="container wow fadeInUp">
        <div class="section-header"> <br> <br>
            <h3 class="section-title">Where do you want to serarch for your logo ?</h3>
        </div>
    </div>

<br><br>

    <div class="container wow fadeInUp">
        <div class="row justify-content-center">

            <div class="col-lg-3 col-md-6">

            </div>

            <div class="col-lg-5 col-md-8">
                <div class="form">

                    <form action="/get_locationinsta_images" method="GET" >

                        <input type="checkbox" name="city[0]" value="282615" > Nablus<br>
                        <input type="checkbox" name="city[1]" value="282239" > Ramallah <br>
                        <input type="checkbox" name="city[2]" value="281184" > Jerusalem <br>
                        <input type="checkbox" name="city[3]" value="284315" > Bethlehem <br>
                        <input type="checkbox" name="city[4]" value="282476" > Jenin <br>
                        <input type="checkbox" name="city[5]" value="281577" > Tulkarm <br>
                        <input type="checkbox" name="city[6]" value="285066" > Hebron <br>
                        <input type="checkbox" name="city[7]" value="281581" > Tubas <br>
                        <input type="checkbox" name="city[8]" value="281124" > Gaza <br><br><br>
                        <div ><button type="submit">Search for logo in instagram </button></div>
                    </form>
                </div>
            </div>

        </div>

    </div>
</section><!-- #contact -->

<!--==========================
Footer
============================-->
<footer id="footer">
<div class="footer-top">
<div class="container">

</div>
</div>

<div class="container">
<div class="copyright">
  &copy; Copyright. All Rights Reserved
</div>

</div>
</footer><!-- #footer -->

<a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

<!-- JavaScript Libraries -->
<script src="lib/jquery/jquery.min.js"></script>
<script src="lib/jquery/jquery-migrate.min.js"></script>
<script src="lib/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD8HeI8o-c1NppZA-92oYlXakhDPYR7XMY"></script>

<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/superfish/hoverIntent.js"></script>
<script src="lib/superfish/superfish.min.js"></script>

<!-- Contact Form JavaScript File -->
<script src="contactform/contactform.js"></script>

<!-- Template Main Javascript File -->
<script src="js/main.js"></script>
</body>
</html>