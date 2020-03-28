<?php declare(strict_types=1);

define('APP_ROOT', __DIR__);

return [
    'settings' => [
        'displayErrorDetails' => getenv('DISPLAY_ERROR_DETAILS'),
        'db' => [
            'hostname' => getenv('DB_HOSTNAME'),
            'database' => getenv('DB_DATABASE'),
            'username' => getenv('DB_USERNAME'),
            'password' => getenv('DB_PASSWORD'),
        ],
        'doctrine' => [
            // if true, metadata caching is forcefully disabled
            'dev_mode' => true,

            // path where the compiled metadata info will be cached
            // make sure the path exists and it is writable
            'cache_dir' => APP_ROOT . '/../../storage/cache',

            // you should add any other path containing annotated entity classes
            'metadata_dirs' => [APP_ROOT . '/../Models'],

            'connection' => [
                'driver' => 'pdo_mysql',
                'host' => getenv('DB_HOSTNAME'),
                'port' => 3306,
                'dbname' => getenv('DB_DATABASE'),
                'user' => getenv('DB_USERNAME'),
                'password' => getenv('DB_PASSWORD'),
                'charset' => 'utf8'
            ]
        ]
    ],
];
