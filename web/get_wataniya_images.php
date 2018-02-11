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
$connection=new MongoClient();
$db=$connection->ProDB;
$collection=$db->selectCollection("Wataniyaimages");
$response = $collection->drop();
//print_r($response);

$access_token = '1455132285.e029fea.94ca6432a5b345539805cb5183af5188';
$count = 33; 
$tag = 'wataniya';
 
$result[0] = rudr_instagram_api_curl_connect('https://api.instagram.com/v1/tags/' . $tag . '/media/recent?access_token=' . $access_token . '&count=' . $count);
 
foreach ($result[0]->data as $post[0]) {
	//echo '<a href="' . $post[0]->link . '"><img src="' . $post[0]->images->thumbnail->url . '" /></a>';
	//echo 'loc is'. ' ' .$post[0]->location ;
	$document = array( 
      "url" => $post[0]->images->thumbnail->url 
   );
	$collection->insert($document);
   
            
}
	
for ($x = 1; $x <= 100; $x++){ 
$result[$x]  = rudr_instagram_api_curl_connect( $result[$x-1]->pagination->next_url ); // API request for the next 33 photos
//$result[0] = rudr_instagram_api_curl_connect( 'https://api.instagram.com/v1/tags/' . $tag . '/media/recent?access_token=' . $access_token . '&count=' . $count . '&max_tag_id=' . $result->pagination->next_max_tag_id );
 
foreach ($result[$x]->data as $post[$x]) {
	//echo '<a href="' . $post[$x]->link . '"><img src="' . $post[$x]->images->thumbnail->url . '" /></a>';
	//echo 'loc'.$post[0]->location ;
	$document = array( 
      "url" => $post[$x]->images->thumbnail->url 
  );
	$collection->insert($document);
}
}
$cursor = $collection->find();
 foreach($cursor as $document){
 	
	//echo '<img src="' . $document["url"] . '" />';
	$x++;
        }

echo $x;


?>	