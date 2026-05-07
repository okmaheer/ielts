<?php

return [
    /*
     * Master kill switch for all ads across the site.
     * Set ADS_ENABLED=false in .env to disable every ad unit and the sticky footer.
     */
    'enabled' => env('ADS_ENABLED', false),

    'client'  => env('ADS_CLIENT', 'ca-pub-2263600332188384'),
];
