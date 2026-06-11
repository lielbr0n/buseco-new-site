<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Livestream Configuration
    |--------------------------------------------------------------------------
    |
    | Configure the YouTube Live and Facebook Live embed URLs for the homepage
    | livestream section. Set LIVESTREAM_ENABLED=false in your .env to hide
    | the section entirely without removing the code.
    |
    | YouTube Live:
    |   Use a channel-level live link so it auto-shows the active stream:
    |   https://www.youtube.com/embed/live_stream?channel=YOUR_CHANNEL_ID
    |   Or use a specific video embed:
    |   https://www.youtube.com/embed/VIDEO_ID
    |
    | Facebook Live:
    |   Use the Facebook video plugin URL:
    |   https://www.facebook.com/plugins/video.php?href=ENCODED_VIDEO_URL&show_text=0
    |
    */

    'enabled' => env('LIVESTREAM_ENABLED', true),

    'youtube_url' => env(
        'LIVESTREAM_YOUTUBE_URL',
        'https://www.youtube.com/embed/live_stream?channel=UCxxxxxxxxxxxxxxxxxxxxxx'
    ),

    'youtube_page_url' => env(
        'LIVESTREAM_YOUTUBE_PAGE_URL',
        'https://www.youtube.com/@buseco'
    ),

    'facebook_url' => env(
        'LIVESTREAM_FACEBOOK_URL',
        'https://www.facebook.com/plugins/video.php?href=https%3A%2F%2Fwww.facebook.com%2Fmileslacsa000%2Fvideos%2F974425045362284%2F&show_text=0&width=560&autoplay=true'
    ),

    'facebook_page_url' => env(
        'LIVESTREAM_FACEBOOK_PAGE_URL',
        'https://www.facebook.com/mileslacsa000'
    ),

];
