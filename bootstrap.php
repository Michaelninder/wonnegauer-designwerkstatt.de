<?php

require_once __DIR__ . '/config.php';
require_once __DIR__ . '/helpers.php';
require_once __DIR__ . '/router.php';

$config = require __DIR__ . '/config.php';

// catch any PHP errors and show the 500 view
set_error_handler(function (int $errno, string $errstr) use ($config): bool {
    // only handle fatal-level errors
    if (!($errno & (E_ERROR | E_USER_ERROR | E_PARSE | E_CORE_ERROR | E_COMPILE_ERROR))) {
        return false; // let PHP handle the rest
    }
    global $page;
    $page = error_page();
    include __DIR__ . '/views/layout.php';
    exit;
});

set_exception_handler(function (Throwable $e) use ($config): void {
    global $page;
    $page = error_page();
    include __DIR__ . '/views/layout.php';
    exit;
});

$page = resolve_page($config);

include __DIR__ . '/views/layout.php';
