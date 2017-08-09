<?php

/**
 * Get data for Composer Packages.
 */
require_once '../vendor/autoload.php';
require_once '../private/app.php';

$app = new App($config);
$app->run();
