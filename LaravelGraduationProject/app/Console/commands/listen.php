<?php

namespace App\Console\Commands;
use Illuminate\Support\Facades\DB;
use Illuminate\Console\Command;
use TwitterStreamingApi;
//use App\TwitterStream;
use MongoClient;
class listen extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $twitterStream=0;

    protected  $collection;
    protected $signature = 'twitter:listen';

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

    {   $id= \Auth::user()->id;
        $logo = DB::table('contact')
        ->where('id', $id)
        ->value('logoname');
        $con=new MongoClient();
        $db=$con->selectDB("ProDB");
        $collection=$db->selectCollection("images".$logo);
        TwitterStreamingApi::publicStream()
            ->whenHears ($logo, function (array $tweet) use ($collection) {
                if(isset($tweet['entities']['media'])){
                    $collection->insert($tweet);}
                    //dump($tweet['entities']['media'][0]['media_url']);}
               // dump($this->twitterStream++."  ".$tweet['text']);
            })

            ->startListening();
    }
}