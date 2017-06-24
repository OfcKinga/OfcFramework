<?php

define('BASE_DIR', getcwd());
define('FRAMEWORK_DIR', getcwd() . '/framework');

// Start the fun
require './framework/starter.php';

$app = new OfcEngine( require('settings.php') );