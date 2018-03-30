<?php

namespace Spatie\LaravelTwitterStreamingApi;

use Spatie\TwitterStreamingApi\UserStream;
use Illuminate\Contracts\Config\Repository;
use Spatie\TwitterStreamingApi\PublicStream;

class TwitterStreamingApi
{
    /** @var array */
    protected $config;

    public function __construct(Repository $config)
    {
        $this->config = $config['laravel-twitter-streaming-api'];
    }

    public function publicStream(): PublicStream
    {
        return new PublicStream(
            '958777641443741696-M9HF5DrgnGfXgSj75p0KJrnTz2MDD6e',
           'Pp5w2o46I3lyzypTHyT7LTLeisvfRMNezfKUGJN6xn69p',
            'eA6NwGPsxxqaCj4wPhgNx3JM2',
           'OBvtUmJ7ZFJ8fribmj3muNQzhVCkecFqakt214wQF7lQ3lqjau'
        );
    }

    public function userStream(): UserStream
    {
        return new UserStream(
            $this->config['access_token'],
            $this->config['access_token_secret'],
            $this->config['consumer_key'],
            $this->config['consumer_secret']
        );
    }
}
