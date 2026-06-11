<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Livestream Configuration
    |--------------------------------------------------------------------------
    |
    | Configure the YouTube Live embed URL for the homepage
    | livestream section. Set LIVESTREAM_ENABLED=false in your .env to hide
    | the section entirely without removing the code.
    |
    | YouTube Live:
    |   Use a channel-level live link so it auto-shows the active stream:
    |   https://www.youtube.com/embed/live_stream?channel=YOUR_CHANNEL_ID
    |   Or use a specific video embed:
    |   https://www.youtube.com/embed/VIDEO_ID
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

    'youtube_recorded_url' => env(
        'LIVESTREAM_YOUTUBE_RECORDED_URL',
        'https://www.youtube.com/@buseco/streams'
    ),

];
