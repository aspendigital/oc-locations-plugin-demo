<?php
/*
| For additional options see
| https://github.com/octobercms/october/blob/master/config/database.php
|
| When using a container to serve a database, the host value will need to be
|  set as the service name defined in your docker-compose.yml
*/

return [
    'default' => env('DB_TYPE','sqlite'), // sqlite, mysql, etc
    'connections' => [
        'sqlite' => [
            'driver'   => 'sqlite',
            'database' => 'storage/database.sqlite',
            'prefix'   => '',
        ],
        'mysql' => [
            'host'      => env('DB_HOST'),
            'database'  => env('DB_DATABASE'),
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD'),
        ],
    ],
    'redis' => [
        'cluster' => false,
        'default' => [
            'host'     => env('REDIS_DB_HOST','queue'),
            'password' => env('REDIS_DB_PASSWORD',null),
            'port'     => env('REDIS_DB_PASSWORD',6379),
            'database' => 0,
        ],
    ],
];
