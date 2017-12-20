<?php
/*
| For additional options see
| https://github.com/octobercms/october/blob/master/config/queue.php
*/

return [
    'default' => 'redis',
    'failed' => [
        'database' => env('DB_TYPE','sqlite'), 'table' => 'failed_jobs',
    ],
];
