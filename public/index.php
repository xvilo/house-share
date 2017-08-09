<?php

/**
 * Get data for Composer Packages.
 */
require_once __DIR__ . '../vendor/autoload.php';
require_once __DIR__ . '../private/loadAppData.php';

$app = new App($config);
$app->run();
