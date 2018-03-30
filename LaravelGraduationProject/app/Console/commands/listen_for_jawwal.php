<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use TwitterStreamingApi;
//use App\TwitterStream;
use MongoClient;
class listen_for_jawwal extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $twitterStream=0;

    protected  $collection;
    protected $signature = 'twitter:listen-for-jawwal';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Listen for hashtags being used on Twitter';

    /**
     * Execute the console command.
     *
     * @return mixed
     */
   public function __construct()
    {
        parent::__construct();
    }
 /*   public function handle()
    {
        $twitter_consumer_key = env('eA6NwGPsxxqaCj4wPhgNx3JM2', '');
        $twitter_consumer_secret = env('OBvtUmJ7ZFJ8fribmj3muNQzhVCkecFqakt214wQF7lQ3lqjau', '');

        $this->twitterStream->consumerKey = $twitter_consumer_key;
        $this->twitterStream->consumerSecret = $twitter_consumer_secret;
        $this->twitterStream->setTrack(array('scotch_io'));
        $this->twitterStream->consume();
    }
*/
    public function handle()
    {
        $con=new MongoClient();
        $db=$con->selectDB("ProDB");
        $collection=$db->selectCollection("TJawwalimages");
        TwitterStreamingApi::publicStream()
            ->whenHears ('jawwal', function (array $tweet) use ($collection) {
                if(isset($tweet['entities']['media'])){
                    $collection->insert($tweet);
                    dump($tweet['entities']['media'][0]['media_url']);}
                dump($this->twitterStream++);
            })

            ->startListening();
    }
}
