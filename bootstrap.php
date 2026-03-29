<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/router.php';

$config = require __DIR__ . '/config.php';
$page   = resolve_page($config);

include __DIR__ . '/views/layout.php';
