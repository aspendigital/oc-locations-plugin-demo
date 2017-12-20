<?php
/*
| For additional options see
| https://github.com/octobercms/october/blob/master/config/app.php
*/

return [
    'debug' => env('APP_DEBUG', true),
    'url' => env('APP_BASEURL', 'http://localhost'),
    'timezone' => env('TZ', 'America/Denver'),
    'key' => env('APP_KEY', '0123456789ABCDEFGHIJKLMNOPQRSTUV'),
];
