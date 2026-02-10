<?php
define('SITE_NAME', 'Lighting Africa In SOLAR');
$base = rtrim(dirname($_SERVER['SCRIPT_NAME'] ?? ''), '/');
define('BASE_URL', ($base === '' || $base === '/') ? '' : $base);
define('ASSETS_URL', BASE_URL ? BASE_URL . '/assets' : 'assets');

// --- Language detection & helper ---
const SUPPORTED_LANGS = ['en', 'fr'];

// Handle explicit ?lang=... toggle and persist as cookie
if (isset($_GET['lang']) && in_array($_GET['lang'], SUPPORTED_LANGS, true)) {
    $selected = $_GET['lang'];
    setcookie('lang', $selected, time() + 365 * 24 * 60 * 60, '/');

    // Redirect to same URL without the lang parameter to avoid duplicated params
    $requestUri = $_SERVER['REQUEST_URI'] ?? '/';
    $parts = explode('?', $requestUri, 2);
    header('Location: ' . $parts[0]);
    exit;
}

// Determine current language
$langCode = 'en';
if (!empty($_COOKIE['lang']) && in_array($_COOKIE['lang'], SUPPORTED_LANGS, true)) {
    $langCode = $_COOKIE['lang'];
} else {
    $accept = $_SERVER['HTTP_ACCEPT_LANGUAGE'] ?? '';
    if (stripos($accept, 'fr') === 0 || strpos($accept, 'fr-') === 0) {
        $langCode = 'fr';
    }
}

// Load language file
$langFile = __DIR__ . '/../lang/' . $langCode . '.php';
$LANG = is_file($langFile) ? require $langFile : require __DIR__ . '/../lang/en.php';
define('LANG_CODE', $LANG['lang_code'] ?? $langCode);

function t(string $key): string {
    global $LANG;
    return $LANG[$key] ?? $key;
}

function asset($path) {
    return ASSETS_URL . '/' . ltrim($path, '/');
}

/** Full absolute URL for an asset (required for og:image, etc.) */
function full_asset_url($path) {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    $base = BASE_URL ? rtrim(BASE_URL, '/') . '/' : '/';
    return $protocol . '://' . $host . $base . 'assets/' . ltrim($path, '/');
}

/** Full canonical URL for current page */
function full_page_url() {
    $protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? 'https' : 'http';
    $host = $_SERVER['HTTP_HOST'] ?? 'localhost';
    return $protocol . '://' . $host . ($_SERVER['REQUEST_URI'] ?? '');
}

function current_page() {
    return basename($_SERVER['PHP_SELF'], '.php');
}

function is_current($page) {
    return current_page() === $page;
}
