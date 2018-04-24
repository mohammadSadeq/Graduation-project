<?php
/**
 * Created by PhpStorm.
 * User: Brain
 * Date: 23/2/2018
 * Time: 5:05 PM
 */
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Artisan;

include "twitteroauth/twitteroauth.php";
//include_once "ConnectMongo.php";
$consumer_key = "eA6NwGPsxxqaCj4wPhgNx3JM2";
$consumer_secret = "OBvtUmJ7ZFJ8fribmj3muNQzhVCkecFqakt214wQF7lQ3lqjau";
$access_token = "958777641443741696-M9HF5DrgnGfXgSj75p0KJrnTz2MDD6e";
$access_token_secret = "Pp5w2o46I3lyzypTHyT7LTLeisvfRMNezfKUGJN6xn69p";
$connection = new TwitterOAuth($consumer_key,$consumer_secret,$access_token,$access_token_secret);
//$tweets =$connection->get('https://api.twitter.com/1.1/search/tweets.json?q=jawwal&result_type=recent', ['count' => 200, 'exclude_replies' => true, 'include_rts' => false]);
?>
        <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Twitter API SEARCH</title>
</head>
<body>
<?php

        $con=New MongoClient();
$totalTweets[]=null;
$user = $connection->get("account/verify_credentials");
//$logo=Session::get('newlogo');
$id= \Auth::user()->id;
//$logos=DB::select('select * from contact where id ='. $id);
$logo = DB::table('contact')
    ->where('id', $id)
    ->value('logoname');
/*foreach ($logos as $l){
    $logo=$l["logoname"];
}*/
$db=$con->selectDB("ProDB");
$collection=$db->selectCollection("images".$logo."");
// printing username on screen
echo "Welcome " . $user->screen_name . '<br>'.$id. '<br>'.$logo."<br>";
// getting recent tweeets by user 'snowden' on twitter
$tweets = $connection->get('https://api.twitter.com/1.1/search/tweets.json?', ['count' => 100, 'q' => $logo.'  filter:images -filter:retweets','include_entities'=>'true']);
$start = 1;
$collection->drop();
if($tweets != null){


    echo '1- ';
$page = 0;
    foreach ($tweets->statuses as $page) {
        //  foreach ($page as $key) {
        $collection->insert($page);
      // echo $start . ':' . $page->text . '<br>';
        $start++;
        // }
    }
    foreach ($tweets->statuses as $page) {
        //  foreach ($page as $key) {
        if(isset($page->entities->media)){
            //  try{
            echo $start . '<img src="' . $page->entities->media[0]->media_url .'" height="150" style="float:left"/>'. '<br>';}
        //  catch (Exception $e){}
        // }
    }

for ($count = 100; $count < 200; $count += 100) {


 //  $collection->insert($page);

    $start++;
    //if(count ($tweets->statuses)<=0)break;
    $max = $tweets->statuses[count ($tweets->statuses)-1]->id_str;
        $tweets = $connection->get('https://api.twitter.com/1.1/search/tweets.json', ['count' => 100,'max_id'=>$max, 'q' => $logo.'  filter:images -filter:retweets','include_entities'=>'true']);
    echo '-----  '.$count.'\n';

//$collection->insert($totalTweets);



// printing recent tweets on screen
foreach ($tweets->statuses as $page) {
  //  foreach ($page as $key) {
    if(isset($page->entities->media)){
        //  try{
        echo $start . '<img src="' . $page->entities->media[0]->media_url .'" height="150" style="float:left"/>'. '<br>';}
    $collection->insert($page);
    // echo $start . ':' . $page->text . '<br>';
        $start++;
   // }
}

}}
?>


</body>
</html>