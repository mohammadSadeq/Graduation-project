<?php
set_time_limit(0);

try {
    $connection = new MongoClient();
} catch (MongoConnectionException $e) {
}
$db=$connection->ProDB;
try {
    $collection = $db->selectCollection("Wataniyaexist");
} catch (Exception $e) {
}
$response = $collection->drop();
//print_r($response);



$x=0;
$cursor = $collection->find();
foreach($cursor as $document){

    //echo '<img src="' . $document["url"] . '" />';
    $x++;
}

//echo $x . "have been collected with Hashtag #Jawwal";

?>



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
                <li class="menu-active"><a href="<?php echo e(url('home')); ?>">Home</a></li>
                <li class="menu-active"><a href="<?php echo e(url('get_wataniya_images')); ?>">Back</a></li>
                <li><a href="<?php echo e(url('logout')); ?>">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<section id="hero">
    <div class="hero-container">

        <?php echo "<h3>". $x . "  Images from the collected images have Wataniya Logo " . "</h3>" ?>



    </div>
</section><!-- #hero -->



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
