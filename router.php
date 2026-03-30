<?php

/**
 * Resolves the current URI to a page key defined in config.php.
 * Returns the page config array or falls back to a 404 page.
 */
function resolve_page(array $config): array {
    $uri = strtok($_SERVER['REQUEST_URI'], '?');
    $uri = rtrim($uri, '/');
    $uri = $uri === '' ? '/' : $uri;

    $slug = ltrim($uri, '/');
    $slug = $slug === '' ? 'index' : $slug;

    if (isset($config['pages'][$slug])) {
        return array_merge($config['pages'][$slug], ['slug' => $slug]);
    }

    http_response_code(404);
    return [
        'title'       => 'Seite nicht gefunden',
        'description' => '',
        'view'        => '404',
        'slug'        => '404',
    ];
}

/**
 * Returns the page config for a 500 error.
 */
function error_page(): array {
    http_response_code(500);
    return [
        'title'       => 'Serverfehler',
        'description' => '',
        'view'        => '500',
        'slug'        => '500',
    ];
}
