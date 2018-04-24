<?php
require 'C:/Users/hp/vendor/autoload.php';
//namespace App\Http\Controllers\src\InstagramScraper;
use App\Http\Controllers\src\InstagramScraper\Instagram;

set_time_limit(0);

try {

    $connection = new MongoClient();
} catch (MongoConnectionException $e) {
}
$db=$connection->ProDB;



$instagram = Instagram::withCredentials('htwesam.1996achp_insta', '12345Abc', '/path/to/cache/folder');
try {
    $instagram->login();
} catch (\InstagramScraper\Exception\InstagramAuthException $e) {
} catch (\InstagramScraper\Exception\InstagramException $e) {
}


//******************************************New Logo ***********************************************

$city='';


foreach($_GET['city'] as $item){
   // echo $item;
    switch ($item) {
        case 282615:
            $city='Nablus';
            break;
        case 282239:
            $city='Ramallah';
            break;
        case 281184:
            $city='Jerusalem';
            break;
        case 284315:
            $city='Bethlehem';
            break;
        case 282476:
            $city='Jenin';
            break;
        case 281577:
            $city='Tulkarm';
            break;

        case 285066:
            $city='Hebron';
            break;
        case 281581:
            $city='Tubas';
            break;
        case 281124:
            $city='Gaza';
            break;
        default:
    }

    $collection=$db->selectCollection("insta".$city."images");
    $response = $collection->drop();

try {
    $medias4 = $instagram->getMediasByLocationId($item, 100, 1);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}

for ($x4 = 0; $x4 < 100 ; $x4++){
    $media4 = $medias4[$x4];

    $a=$media4->getSquareThumbnailsUrl();
    $document4 = array(
        "url"=>$a[1],
    );
    try {
        $collection->insert($document4);
    } catch (MongoCursorTimeoutException $e) {
    } catch (MongoCursorException $e) {
    } catch (MongoException $e) {
    }

}
}


//***************************************************************************************************


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
                <li class="menu-active"><a href="{{ url('home')}}">Home</a></li>
                <li class="menu-active"><a href="{{ url('cities')}}">Back</a></li>
                <li><a href="{{ url('logout') }}">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<section id="hero">
    <div class="hero-container">


        <?php

        foreach($_GET['city'] as $item){
            switch ($item) {
                case 282615:
                    $city='Nablus';
                    break;
                case 282239:
                    $city='Ramallah';
                    break;
                case 281184:
                    $city='Jerusalem';
                    break;
                case 284315:
                    $city='Bethlehem';
                    break;
                case 282476:
                    $city='Jenin';
                    break;
                case 281577:
                    $city='Tulkarm';
                    break;

                case 285066:
                    $city='Hebron';
                    break;
                case 281581:
                    $city='Tubas';
                    break;
                case 281124:
                    $city='Gaza';
                    break;
                default:
            }
        echo "<h3>  Images have been collected from " .$city." city </h3>"."\n" ;
        }
        ?>

        <br>  <br>
        <form  action="insta_map" method="get" >
            <button type="submit" class="btn-get-started">   your logo on map </button>
        </form>

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

