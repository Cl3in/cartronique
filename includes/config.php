<?php
// ================================
// 🌍 ENVIRONMENT DETECTION
// ================================
$domain = $_SERVER['HTTP_HOST'];
$isLocal = ($domain === 'localhost' || $domain === '127.0.0.1');

// Force HTTPS only on live server
$protocol = $isLocal ? 'http://' : 'https://';
if (!$isLocal && (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off')) {
    header("Location: https://" . $domain . $_SERVER['REQUEST_URI']);
    exit;
}

// ================================
// 🔐 SESSION CONFIGURATION
// ================================
if (session_status() === PHP_SESSION_NONE) {

    $secure = !$isLocal; // secure cookies only on HTTPS (live)

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
    session_start(); // restart session after destroy
}

$_SESSION['LAST_ACTIVITY'] = time();

// ================================
// 🕒 TIMEZONE
// ================================
date_default_timezone_set('America/New_York'); // change if needed

// ================================
// 📁 PROJECT PATHS (AUTO DETECT)
// ================================
if ($isLocal) {
    // Local XAMPP folder (change if needed)
    $projectFolder = '/cartronique/';
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . $projectFolder);
} else {
    // Live server
    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
}

// Base URL
define('BASE_URL', $protocol . $domain . ($isLocal ? $projectFolder : '/'));

// ================================
// 📦 ASSETS SHORTCUT
// ================================
define('ASSETS', BASE_URL . 'assets/');

// ================================
// 🌐 SITE SETTINGS
// ================================
define('SITE_NAME', 'Parrish Freight Transport');
define('THEME_COLOR', '#FFFFFF');
define('FONT_FAMILY', '"Times New Roman", Times, serif');

// ================================
// ⚙️ ERROR HANDLING
// ================================
if ($isLocal) {
    // Show errors on local
    error_reporting(E_ALL);
    ini_set('display_errors', 1);
} else {
    // Hide errors on live
    error_reporting(0);
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    if (!file_exists(BASE_PATH . 'logs')) {
        mkdir(BASE_PATH . 'logs', 0755, true);
    }
    ini_set('error_log', BASE_PATH . 'logs/error.log');
}