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
try {
    $collection = $db->selectCollection("Jawwalimages");
} catch (Exception $e) {
}

try {
    $collection2 = $db->selectCollection("Wataniyaimages");
} catch (Exception $e) {
}

try {
    $collection3 = $db->selectCollection("NewLogoimages");
} catch (Exception $e) {
}

//$response = $collection->drop();
//$response2 = $collection2->drop();
$response3 = $collection3->drop();

$instagram = Instagram::withCredentials('htwesam.1996achp_insta', '12345Abc', '/path/to/cache/folder');
try {
    $instagram->login();
} catch (\InstagramScraper\Exception\InstagramAuthException $e) {
} catch (\InstagramScraper\Exception\InstagramException $e) {
}

/**
try {
$medias = $instagram->getMediasByTag('jawwal', 1900);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}
for ($x = 0; $x < 1900 ; $x++){
$media = $medias[$x];

$a=$media->getSquareThumbnailsUrl();
$document = array(
//"url" => $media->getImageHighResolutionUrl() ,
// "url"=>$media->getImageThumbnailUrl()

"url"=>$a[1]

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
$medias2 = $instagram->getMediasByTag('الوطنية_موبايل', 700);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}
for ($x2 = 0; $x2 < 700 ; $x2++){
$media2 = $medias2[$x2];
$a=$media2->getSquareThumbnailsUrl();
$document2 = array(
"url"=>$a[1]
);
try {
$collection2->insert($document2);
} catch (MongoCursorTimeoutException $e) {
} catch (MongoCursorException $e) {
} catch (MongoException $e) {
}

}




try {
$medias3 = $instagram->getMediasByTag('wataniya', 1200);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}
for ($x3 = 0; $x3 < 1200 ; $x3++){
$media3 = $medias3[$x3];
$a=$media3->getSquareThumbnailsUrl();
$document3 = array(
"url"=>$a[1]
);
try {
$collection2->insert($document3);
} catch (MongoCursorTimeoutException $e) {
} catch (MongoCursorException $e) {
} catch (MongoException $e) {
}

}

 **/
//******************************************New Logo ***********************************************



$logo=Session::get('newlogo');

try {
    $medias3 = $instagram->getMediasByTag($logo, 1000);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}
for ($x3 = 0; $x3 < 1000 ; $x3++){
    $media3 = $medias3[$x3];

    $a=$media3->getSquareThumbnailsUrl();
    $document3 = array(
        //"url" => $media->getImageHighResolutionUrl() ,
        // "url"=>$media->getImageThumbnailUrl()

        "url"=>$a[1]

    );
    try {
        $collection3->insert($document3);
    } catch (MongoCursorTimeoutException $e) {
    } catch (MongoCursorException $e) {
    } catch (MongoException $e) {
    }

}

//***************************************************************************************************
/**
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

 **/
$c=0;
$cursor3 = $collection3->find();
foreach($cursor3 as $document3){

    $c++;
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
                <li class="menu-active"><a href="{{ url('home')}}">Home</a></li>
                <li class="menu-active"><a href="{{ url('searchimages')}}">Back</a></li>
                <li><a href="{{ url('logout') }}">Logout</a></li>

            </ul>
        </nav><!-- #nav-menu-container -->
    </div>
</header><!-- #header -->

<section id="hero">
    <div class="hero-container">

        <?php //echo "<h3>". $a . "  Images have been collected with Hashtag #Jawwal" . "</h3>" ?>
        <?php //echo "<h3>". $b . "  Images have been collected with Hashtag #Wataniya" . "</h3>" ?>


        <?php echo "<h3>". $c . "  Images have been collected with Hashtag # ". $logo  . "</h3>" ?>

        <br>  <br>
        <form  action="insta_logo_exist" method="get" >
            <button type="submit" class="btn-get-started"> Search images for your logo </button>
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

