<?php
// Ensure we're in the right directory
$_SERVER['SCRIPT_NAME'] = '/index.php';
$_SERVER['SCRIPT_FILENAME'] = __DIR__ . '/../public/index.php';

// Change to Laravel root
chdir(dirname(__DIR__));

// Load Laravel
require_once __DIR__ . '/../public/index.php';
