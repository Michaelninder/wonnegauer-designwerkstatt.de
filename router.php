<?php

/**
 * Resolves the current URI to a page key defined in config.php.
 * Returns the page config array or falls back to a 404 page.
 */
function resolve_page(array $config): array {
    $uri = strtok($_SERVER['REQUEST_URI'], '?'); // strip query string
    $uri = rtrim($uri, '/');
    $uri = $uri === '' ? '/' : $uri;

    // map URI path to page key
    // e.g. /aktuell -> 'aktuell', / -> 'index'
    $slug = ltrim($uri, '/');
    $slug = $slug === '' ? 'index' : $slug;

    if (isset($config['pages'][$slug])) {
        return array_merge($config['pages'][$slug], ['slug' => $slug]);
    }

    // 404 fallback
    http_response_code(404);
    return [
        'title'       => 'Seite nicht gefunden',
        'description' => '',
        'view'        => '404',
        'slug'        => '404',
    ];
}
