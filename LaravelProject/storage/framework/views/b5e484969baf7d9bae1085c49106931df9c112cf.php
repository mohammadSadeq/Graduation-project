<?php
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
$response = $collection->drop();
//print_r($response);


$access_token = '7296837844.092a6e4.c43c0cf407f947f8bb11a871a27f1a3e';
$count = 33;
$tag = 'jawwal';

$result[0] = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag . '/media/recent?access_token=' . $access_token . '&count=' . $count);

if (!empty($post)) {
    foreach ($result[0]->data as $post[0]) {

        if (!empty($post)) {
            $document = array(
                "url" => $post[0]->images->thumbnail->url
            );
        }
        try {
            $collection->insert($document);
        } catch (MongoCursorTimeoutException $e) {
        } catch (MongoCursorException $e) {
        } catch (MongoException $e) {
        }


    }
}


for ($x = 1; $x <= 33 ; $x++){
    if (!empty($result[$x])) {
        if (!empty($result)) {
            $result[$x]  = rudr_instagram_api_curl_connect( $result[$x-1]->pagination->next_url );
        }
    }
     // API request for the next 33 photos

    if (!empty($post)) {
        foreach ($result[$x]->data as $post[$x]) {

            $document = array(
                "url" => $post[$x]->images->thumbnail->url
            );
            try {
                $collection->insert($document);
            } catch (MongoCursorTimeoutException $e) {
            } catch (MongoCursorException $e) {
            } catch (MongoException $e) {
            }
        }
    }
}
$a=0;
$cursor = $collection->find();
foreach($cursor as $document){

    $a++;
}


try {
    $collection2 = $db->selectCollection("Wataniyaimages");
} catch (Exception $e) {
}
$response = $collection2->drop();


$tag2 = 'الوطنية_موبايل';

$count2 = 33;


$result2[0] = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag2 . '/media/recent?access_token=' . $access_token . '&count=' . $count2);

if (!empty($post2)) {
    foreach ($result2[0]->data as $post2[0]) {

        if (!empty($post2)) {
            $document2 = array(
                "url" => $post2[0]->images->thumbnail->url
            );
        }
        try {
            $collection2->insert($document2);
        } catch (MongoCursorTimeoutException $e) {
        } catch (MongoCursorException $e) {
        } catch (MongoException $e) {
        }


    }
}

for ($x2 = 1; $x2 <= 18; $x2++){

if (!empty($result2[$x2])) {
if (!empty($result2)) {
            $result2[$x2]  = rudr_instagram_api_curl_connect( $result2[$x2-1]->pagination->next_url );
      }
      }
     // API request for the next 33 photos

    if (!empty($post2)) {
        foreach ($result2[$x2]->data as $post2[$x2]) {

            $document2 = array(
                "url" => $post2[$x2]->images->thumbnail->url
            );
            try {
                $collection2->insert($document2);
            } catch (MongoCursorTimeoutException $e) {
            } catch (MongoCursorException $e) {
            } catch (MongoException $e) {
            }
        }
    }
}



$tag3 = 'وطنية_موبايل';

$count3 = 33;


$result3[0] = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag3 . '/media/recent?access_token=' . $access_token . '&count=' . $count3);

if (!empty($post3)) {
    foreach ($result3[0]->data as $post3[0]) {

        if (!empty($post3)) {
            $document3 = array(
                "url" => $post3[0]->images->thumbnail->url
            );
        }
        try {
            $collection2->insert($document3);
        } catch (MongoCursorTimeoutException $e) {
        } catch (MongoCursorException $e) {
        } catch (MongoException $e) {
        }


    }
}

for ($x3 = 1; $x3 <= 2; $x3++){
if (!empty($result3[$x3])) {
if (!empty($result3)) {
        $result3[$x3]  = rudr_instagram_api_curl_connect( $result3[$x3-1]->pagination->next_url );
        }
        }
    // API request for the next 33 photos

    if (!empty($post3)) {
        foreach ($result3[$x3]->data as $post3[$x3]) {

            $document3 = array(
                "url" => $post3[$x3]->images->thumbnail->url
            );
            try {
                $collection2->insert($document3);
            } catch (MongoCursorTimeoutException $e) {
            } catch (MongoCursorException $e) {
            } catch (MongoException $e) {
            }
        }
    }
}




$tag4 = 'wataniya_mobile';

$count4 = 33;


$result4[0] = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag4 . '/media/recent?access_token=' . $access_token . '&count=' . $count4);

if (!empty($post4)) {
    foreach ($result4[0]->data as $post4[0]) {

        if (!empty($post4)) {
            $document4 = array(
                "url" => $post4[0]->images->thumbnail->url
            );
        }
        try {
            $collection2->insert($document4);
        } catch (MongoCursorTimeoutException $e) {
        } catch (MongoCursorException $e) {
        } catch (MongoException $e) {
        }


    }
}




$tag5 = 'wataniya';

$count5 = 33;


$result5[0] = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag5 . '/media/recent?access_token=' . $access_token . '&count=' . $count5);

if (!empty($post5)) {
    foreach ($result5[0]->data as $post5[0]) {

        if (!empty($post5)) {
            $document5 = array(
                "url" => $post5[0]->images->thumbnail->url
            );
        }
        try {
            $collection2->insert($document5);
        } catch (MongoCursorTimeoutException $e) {
        } catch (MongoCursorException $e) {
        } catch (MongoException $e) {
        }


    }
}

for ($x5 = 1; $x5 <= 10; $x5++){
if (!empty($result5[$x5])) {
if (!empty($result5)) {
        $result5[$x5]  = rudr_instagram_api_curl_connect( $result5[$x5-1]->pagination->next_url );
        }
        }
     // API request for the next 33 photos

    if (!empty($post5)) {
        foreach ($result5[$x5]->data as $post5[$x5]) {

            $document5 = array(
                "url" => $post5[$x5]->images->thumbnail->url
            );
            try {
                $collection2->insert($document5);
            } catch (MongoCursorTimeoutException $e) {
            } catch (MongoCursorException $e) {
            } catch (MongoException $e) {
            }
        }
    }
}



$b=0;
$cursor2 = $collection2->find();
foreach($cursor2 as $document){

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
