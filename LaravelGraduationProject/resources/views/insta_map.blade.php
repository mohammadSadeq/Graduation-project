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
    $collection1 = $db->selectCollection("Nablusexist");
} catch (Exception $e) {
}

try {
    $collection2 = $db->selectCollection("Ramallahexist");
} catch (Exception $e) {
}

try {
    $collection3 = $db->selectCollection("Jerusalemexist");
} catch (Exception $e) {
}

try {
    $collection4 = $db->selectCollection("Bethlehemexist");
} catch (Exception $e) {
}
try {
    $collection5 = $db->selectCollection("Jeninexist");
} catch (Exception $e) {
}
try {
    $collection6 = $db->selectCollection("Tulkarm");
} catch (Exception $e) {
}
try {
    $collection7 = $db->selectCollection("Hebronexist");
} catch (Exception $e) {
}
try {
    $collection8 = $db->selectCollection("Tubasexist");
} catch (Exception $e) {
}

try {
    $collection9 = $db->selectCollection("Gazaexist");
} catch (Exception $e) {
}


$a1=0; $a2=0; $a3=0; $a4=0; $a5=0; $a6=0; $a7=0; $a8=0; $a9=0;
$cursor = $collection1->find();
foreach($cursor as $document){
    $a1++;
}

$cursor = $collection2->find();
foreach($cursor as $document){
    $a2++;
}
$cursor = $collection3->find();
foreach($cursor as $document){
    $a3++;
}
$cursor = $collection4->find();
foreach($cursor as $document){
    $a4++;
}
$cursor = $collection5->find();
foreach($cursor as $document){
    $a5++;
}
$cursor = $collection6->find();
foreach($cursor as $document){
    $a6++;
}
$cursor = $collection7->find();
foreach($cursor as $document){
    $a7++;
}
$cursor = $collection8->find();
foreach($cursor as $document){
    $a8++;
}
$cursor = $collection9->find();
foreach($cursor as $document){
    $a9++;
}

?>





<!DOCTYPE html>
<html>
<head>
  <title>Logo Detection</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no">
  <meta charset="utf-8">
  <style>
    /* Always set the map height explicitly to define the size of the div
     * element that contains the map. */
    #map {
      height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }
  </style>
</head>
<body>
<div id="map"></div>
<script>
    var map;
    function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
            zoom: 9,
            center: new google.maps.LatLng(31.9522, 35.2332),
            mapTypeId: 'roadmap'
        });

        var icons = {
            cloud: {
                icon:'img/cloud.png'
            }
        };


        //var markerLabel1 = 'GO!';
        var markerLabel1= '<?php echo $a1;?>'
        var marker1 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(32.22111, 35.25444),
            icon:'img/cloud.png',
            label: markerLabel1
        });

        var markerLabel2 = '<?php echo $a2;?>'
        var marker2 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position:new google.maps.LatLng(31.89964, 35.20422),
            icon:'img/cloud.png',
            label: markerLabel2
        });
        var markerLabel3 = '<?php echo $a3;?>'
        var marker3 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position:  new google.maps.LatLng(31.7683, 35.2137),
            icon:'img/cloud.png',
            label: markerLabel3
        });
        var markerLabel4 = '<?php echo $a4;?>'
        var marker4 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(31.70487, 35.20376),
            icon:'img/cloud.png',
            label: markerLabel4
        });
        var markerLabel5 = '<?php echo $a5;?>'
        var marker5 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position:  new google.maps.LatLng(32.45943, 35.30086),
            icon:'img/cloud.png',
            label: markerLabel5
        });
        var markerLabel6 = '<?php echo $a6;?>'
        var marker6 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(32.31037, 35.02863),
            icon:'img/cloud.png',
            label: markerLabel6
        });
        var markerLabel7 = '<?php echo $a7;?>'
        var marker7 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(31.52935,35.0938),
            icon:'img/cloud.png',
            label: markerLabel7
        });
        var markerLabel8 = '<?php echo $a8;?>'
        var marker8 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position:new google.maps.LatLng(31.86667, 35.45),
            icon:'img/cloud.png',
            label: markerLabel8
        });
        var markerLabel9 = '<?php echo $a9;?>'
        var marker9 = new google.maps.Marker({
            map: map,
            animation: google.maps.Animation.DROP,
            position: new google.maps.LatLng(31.5, 34.46667),
            icon:'img/cloud.png',
            label: markerLabel9
        });



        // Create markers.
        features.forEach(function(feature) {
            var marker = new google.maps.Marker({
                position: feature.position,
                icon: icons[feature.type].icon,
                map: map
            });
        });
    }
</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD2IOxRzxs0OsxdhtQ87RNNxf2TQ84UIO0&callback=initMap">
</script>
</body>
</html>