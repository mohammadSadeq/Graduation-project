<?php
require 'C:/Users/hp/vendor/autoload.php';
//namespace App\Http\Controllers\src\InstagramScraper;
use App\Http\Controllers\src\InstagramScraper\Instagram;

set_time_limit(0);



function rudr_instagram_api_curl_connect( $api_url ){
    $connection_c = curl_init(); // initializing
    curl_setopt( $connection_c, CURLOPT_URL, $api_url ); // API URL to connect
    curl_setopt( $connection_c, CURLOPT_RETURNTRANSFER, 1 ); // return the result, do not print
    curl_setopt( $connection_c, CURLOPT_TIMEOUT, 20 );
    $json_return = curl_exec( $connection_c ); // connect and get json data
    curl_close( $connection_c ); // close connection
    return json_decode( $json_return ); // decode and return
}

try {

    $connection = new MongoClient();
} catch (MongoConnectionException $e) {
}
$db=$connection->ProDB;
try {
    $collection = $db->selectCollection("Jawwalimages");
} catch (Exception $e) {
}

try {
    $collection2 = $db->selectCollection("Wataniyaimages");
} catch (Exception $e) {
}
$response = $collection->drop();
$response2 = $collection2->drop();

$instagram = Instagram::withCredentials('htwesam.1996achp_insta', '12345Abc', '/path/to/cache/folder');
try {
    $instagram->login();
} catch (\InstagramScraper\Exception\InstagramAuthException $e) {
} catch (\InstagramScraper\Exception\InstagramException $e) {
}

try {
    $medias = $instagram->getMediasByTag('jawwal', 1900);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}
for ($x = 0; $x < 1900 ; $x++){
$media = $medias[$x];

$document = array(
                "url" => $media->getImageHighResolutionUrl() 
            );
try {
            $collection->insert($document);
        } catch (MongoCursorTimeoutException $e) {
        } catch (MongoCursorException $e) {
        } catch (MongoException $e) {
        }

        }



        //***********************************************Wataniya***************************************
        
try {
    $medias4 = $instagram->getMediasByTag('wataniya', 1900);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}
for ($x4 = 0; $x4 < 1900 ; $x4++){
    $media4 = $medias4[$x4];

    $document4 = array(
        "url" => $media4->getImageHighResolutionUrl()
    );
    try {
        $collection2->insert($document4);
    } catch (MongoCursorTimeoutException $e) {
    } catch (MongoCursorException $e) {
    } catch (MongoException $e) {
    }

}

        //*****************************************************************************************************

$a=0;
$cursor = $collection->find();
foreach($cursor as $document){

    $a++;
}



$b=0;
$cursor2 = $collection2->find();
foreach($cursor2 as $document2){

    $b++;
}

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
                <li class="menu-active"><a href="<?php echo e(url('searchimages')); ?>">Back</a></li>
                <li><a href="<?php echo e(url('logout')); ?>">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<section id="hero">
    <div class="hero-container">

        <?php echo "<h3>". $a . "  Images have been collected with Hashtag #Jawwal" . "</h3>" ?>
      <?php echo "<h3>". $b . "  Images have been collected with Hashtag #Wataniya" . "</h3>" ?>

        <br>  <br>
        <form  action="insta_logo_exist" method="get" >
            <button type="submit" class="btn-get-started"> Search images for Jawwal and wataniya logo </button>
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

