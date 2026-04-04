<?php
// ================================
// 🌍 FORCE HTTPS (SEO + SECURITY)
// ================================
if (empty($_SERVER['HTTPS']) || $_SERVER['HTTPS'] === 'off') {
    header("Location: https://" . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']);
    exit;
}


// ================================
// 🔐 Secure Session Configuration
// ================================
if (session_status() === PHP_SESSION_NONE) {

    session_set_cookie_params([
        'lifetime' => 0,
        'path'     => '/',
        'secure'   => true, // always true now
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
// ⏱️ Session Timeout (15 min)
// ================================
if (isset($_SESSION['LAST_ACTIVITY']) && (time() - $_SESSION['LAST_ACTIVITY'] > 900)) {
    session_unset();
    session_destroy();
}

$_SESSION['LAST_ACTIVITY'] = time();


// ================================
// 🕒 TIMEZONE (IMPORTANT)
// ================================
date_default_timezone_set('America/New_York'); // change if needed


// ================================
// 📁 Project Paths (Auto Detect)
// ================================
$domain = $_SERVER['HTTP_HOST'];
$protocol = 'https://'; // force https always

if ($domain === 'localhost' || $domain === '127.0.0.1') {

    $projectFolder = '/pft-website/';

    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . $projectFolder);
    define('BASE_URL', $protocol . $domain . $projectFolder);

} else {

    define('BASE_PATH', $_SERVER['DOCUMENT_ROOT'] . '/');
    define('BASE_URL', $protocol . $domain . '/');
}


// ================================
// 📦 Assets Shortcut
// ================================
define('ASSETS', BASE_URL . 'assets/');


// ================================
// 🌐 Site Settings
// ================================
define('SITE_NAME', 'Parrish Freight Transport');
define('THEME_COLOR', '#FFFFFF');
define('FONT_FAMILY', '"Times New Roman", Times, serif');


// ================================
// ⚙️ Production Error Handling
// ================================
error_reporting(0);
ini_set('display_errors', 0);
ini_set('log_errors', 1);

if (!file_exists(BASE_PATH . 'logs')) {
    mkdir(BASE_PATH . 'logs', 0755, true);
}

ini_set('error_log', BASE_PATH . 'logs/error.log');