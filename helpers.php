<?php

/**
 * Returns the base URL with an optional path appended.
 */
function url(string $path = ''): string {
    global $config;
    $base = rtrim($config['base_url'] ?? '', '/');
    return $base . '/' . ltrim($path, '/');
}

/**
 * Renders a view file from the /views directory.
 * Passes $page and $config into scope.
 */
function render_view(string $view, array $page, array $config): void {
    $file = __DIR__ . '/views/' . $view . '.php';
    if (file_exists($file)) {
        include $file;
    } else {
        echo '<p>View "' . htmlspecialchars($view) . '" nicht gefunden.</p>';
    }
}

/**
 * Checks whether the given slug is the currently active page.
 */
function is_active(string $slug): bool {
    global $page;
    return ($page['slug'] ?? '') === $slug;
}
