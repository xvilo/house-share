<?php

/**
 * Get data for Composer Packages.
 */
require_once __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../private/loadAppData.php';

/**
 * Temporary config for first development:
 */
$config = [
    'unsecure_url' => 'http://flat.dev/',
    'secure_url'   => 'https://flat.dev/',
    'database'     => [
        'user'  => 'user',
        'password' => 'password',
        'database' => 'database',
        'host'     => 'host',
    ]
];

$app = new App($config);
$app->run();
