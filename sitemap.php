<?php
header("Content-Type: application/xml; charset=utf-8");

// Your website domain
$domain = "https://www.parrishft.com";

// Folders for main pages and services
$folders = [
    'main' => __DIR__ . '/pages',               // Main pages folder
    'services' => __DIR__ . '/pages/services', // Services folder
];

// Function to scan a folder for PHP pages
function getPages($folder) {
    $files = [];
    if (is_dir($folder)) {
        foreach (scandir($folder) as $file) {
            if ($file === '.' || $file === '..') continue;
            $path = $folder . '/' . $file;
            if (is_dir($path)) {
                // Recursively scan subfolders
                $files = array_merge($files, getPages($path));
            } elseif (pathinfo($file, PATHINFO_EXTENSION) === 'php') {
                $files[] = $path;
            }
        }
    }
    return $files;
}

// Function to format last modified date in YYYY-MM-DD
function lastMod($file) {
    return date('Y-m-d', filemtime($file));
}

// Begin XML output
echo '<?xml version="1.0" encoding="UTF-8"?>' . PHP_EOL;
echo '<urlset xmlns="https://www.sitemaps.org/schemas/sitemap/0.9">' . PHP_EOL;

// =======================
// Homepage (index.php)
// =======================
$homepageFile = __DIR__ . '/index.php'; // index.php is in root
$homepageLastMod = file_exists($homepageFile) ? lastMod($homepageFile) : date('Y-m-d');
echo "  <url>\n";
echo "    <loc>$domain/</loc>\n";
echo "    <lastmod>$homepageLastMod</lastmod>\n";
echo "    <changefreq>weekly</changefreq>\n";
echo "    <priority>1.0</priority>\n";
echo "  </url>\n";

// =======================
// Main Pages (/pages/)
// =======================
$mainPages = is_dir($folders['main']) ? getPages($folders['main']) : [];
foreach ($mainPages as $page) {
    $url = str_replace([__DIR__ . '/pages', '.php'], '', $page);
    if ($url === '/index') continue;           // skip homepage
    if (strpos($url, '/services/') === 0) continue; // skip services
    $url = str_replace('\\', '/', $url);      // fix Windows slashes
    $lastmod = lastMod($page);

    echo "  <url>\n";
    echo "    <loc>$domain$url</loc>\n";
    echo "    <lastmod>$lastmod</lastmod>\n";
    echo "    <changefreq>monthly</changefreq>\n";
    echo "    <priority>0.8</priority>\n";
    echo "  </url>\n";
}

// =======================
// Services Pages (/pages/services/)
// =======================
$servicePages = is_dir($folders['services']) ? getPages($folders['services']) : [];
foreach ($servicePages as $page) {
    $url = str_replace([__DIR__ . '/pages', '.php'], '', $page);
    $url = str_replace('\\', '/', $url);
    $lastmod = lastMod($page);

    echo "  <url>\n";
    echo "    <loc>$domain$url</loc>\n";
    echo "    <lastmod>$lastmod</lastmod>\n";
    echo "    <changefreq>weekly</changefreq>\n";
    echo "    <priority>0.9</priority>\n";
    echo "  </url>\n";
}

echo '</urlset>';