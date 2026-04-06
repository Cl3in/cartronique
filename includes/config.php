<?php
// ================================
// 🌍 ENVIRONMENT DETECTION
// ================================
$domain  = $_SERVER['HTTP_HOST'];
$isLocal = ($domain === 'localhost' || $domain === '127.0.0.1');

// ================================
// 🔗 PROTOCOL (HTTP / HTTPS)
// ================================
$isHttps = (
    (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ||
    $_SERVER['SERVER_PORT'] == 443
);

$protocol = ($isLocal || $isHttps) ? 'http://' : 'https://';

// Force HTTPS on live server
if (!$isLocal && !$isHttps) {
    header("Location: https://" . $domain . $_SERVER['REQUEST_URI']);
    exit;
}

// ================================
// 📁 PROJECT PATHS (SAFE & SIMPLE)
// ================================
$projectFolder = '/cartronique/'; // 🔥 CHANGE ONLY IF YOUR FOLDER NAME CHANGES

define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . $projectFolder);
define('BASE_URL',  $protocol . $domain . $projectFolder);

// ================================
// 📦 ASSETS
// ================================
define('ASSETS', BASE_URL . 'assets/');

// ================================
// 🌐 SITE SETTINGS
// ================================
define('SITE_NAME', 'Cartronique System');
define('THEME_COLOR', '#FFFFFF');
define('FONT_FAMILY', '"Times New Roman", Times, serif');

// ================================
// 🕒 TIMEZONE
// ================================
date_default_timezone_set('Africa/Nairobi');

// ================================
// 🔐 SESSION CONFIGURATION
// ================================
if (session_status() === PHP_SESSION_NONE) {

    $secure = !$isLocal;

    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => $secure,
        'httponly' => true,
        'samesite' => 'Strict'
    ]);

    ini_set('session.use_strict_mode', 1);
    session_start();

    // Prevent session fixation
    if (!isset($_SESSION['initiated'])) {
        session_regenerate_id(true);
        $_SESSION['initiated'] = true;
    }
}

// ================================
// ⏱️ SESSION TIMEOUT (15 MIN)
// ================================
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_unset();
    session_destroy();
    session_start();
    session_regenerate_id(true);
}

$_SESSION['LAST_ACTIVITY'] = time();

// ================================
// ⚙️ ERROR HANDLING
// ================================
if ($isLocal) {
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    error_reporting(0);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);

    $logDir = BASE_PATH . 'logs';

    if (!file_exists($logDir)) {
        mkdir($logDir, 0755, true);
    }

    ini_set('error_log', $logDir . '/error.log');
}