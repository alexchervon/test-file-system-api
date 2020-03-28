<?php

return [
    'name' => 'File storage service',

    'table_storage' => [
        'table_name' => 'migrations',
        'version_column_name' => 'version',
        'version_column_length' => 1024,
        'executed_at_column_name' => 'executed_at',
        'execution_time_column_name' => 'execution_time',
    ],

    'migrations_paths' => [
        'App\Database\Migrations' => __DIR__ . '/src/Database/Migrations',
    ],

    'all_or_nothing' => true,
    'check_database_platform' => true,
];
