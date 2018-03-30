<?php
require __DIR__ . '/../vendor/autoload.php';

$instagram = \InstagramScraper\Instagram::withCredentials('htwesam.1996achp_insta', '12345Abc', '/path');
$instagram->login();

$result = $instagram->getPaginateMediasByTag('jawwal');
$medias = $result['medias'];

if ($result['hasNextPage'] === true) {
    $result = $instagram->getPaginateMediasByTag('jawwal', $result['maxId']);
    $medias = array_merge($medias, $result['medias']);
}

//echo json_encode($medias);
//echo print_r($medias);

