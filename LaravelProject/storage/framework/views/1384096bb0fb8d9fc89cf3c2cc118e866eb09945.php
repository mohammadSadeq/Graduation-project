<?php
    require 'vendor/autoload.php';
    require_once __DIR__ . '/src/InstagramScraper.php';

    use InstagramScraper\Instagram;

    $Instagram = new Instagram();

    //print_r($Instagram->getMedias('_mattGrubb'));
//try {
 //   print_r($Instagram->getMedias('getheartbeatapp', 1));
//} catch (\InstagramScraper\Exception\InstagramException $e) {
//}


try {
    $post= $Instagram->getMediasByTag('#jawwal',1, '' ,null);
} catch (\InstagramScraper\Exception\InstagramException $e) {
}

