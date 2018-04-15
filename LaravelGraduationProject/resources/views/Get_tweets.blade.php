<?php

include "twitteroauth/twitteroauth.php";
$consumer_key = "W40MRUBE4sE2F0kk8CuNdjdOI";
$consumer_secret = "UbhQzECTfd10w7zwUcuU1xnxYta7DVLb08kCjwYh5YUygMQIXo";
$access_token = "958672155545427968-cXRxFccuZSMCThJvOSwOmfBEfCaL23D";
$access_token_secret = "fVbzf0xKXs2HiADVjH41om69rdeADnKUULNH0T0e4Po88";
$connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
//$tweets =$connection->get('https://api.twitter.com/1.1/search/tweets.json?q=jawwal&result_type=recent', ['count' => 200, 'exclude_replies' => true, 'include_rts' => false]);

set_time_limit(0);
$totalTweets[]=null;
$user = $connection->get("account/verify_credentials");

$logo=Session::get('newlogo');
try {

    $connection1 = new MongoClient();
} catch (MongoConnectionException $e) {
}

$db=$connection1->ProDB;
try {
    $collection = $db->selectCollection("TNewLogoimages");
} catch (Exception $e) {
}
$tweets = $connection->get('https://api.twitter.com/1.1/search/tweets.json', ['count' => 100, 'q' => ''.$logo.'  filter:images -filter:retweets','include_entities'=>'true']);

$collection->drop();
//if($tweets != null){


    foreach ($tweets->statuses as $page) {

        if(isset($page->entities->media)){

            echo '<img src="' . $page->entities->media[0]->media_url .'" height="150" style="float:left"/>'. '<br>';
            echo "[" . $page->created_at . "]\n";
            $collection->insert($page);
    }
   // }
/**
for ($count = 100; $count < 4000; $count += 100) {

    $max = $tweets->statuses[count ($tweets->statuses)-1]->id_str;
    //echo($max);
        $tweets = $connection->get('https://api.twitter.com/1.1/search/tweets.json', ['count' => 100,'max_id'=>$max, 'q' => $logo]);

// printing recent tweets on screen
foreach ($tweets->statuses as $page1) {

    if(isset($page1->entities->media)){

        //echo '<img src="' . $page->entities->media[0]->media_url .'" height="150" style="float:left"/>'. '<br>';}
    $collection->insert($page1);
}
}

}
**/
}
$c=0;
$cursor3 = $collection->find();
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
        <?php echo "<h3>". $c . "  Images have been collected with Hashtag ". $logo  . "</h3>" ?>



        <br>  <br>
        <form  action="twitter_logo_exist" method="get" >
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
