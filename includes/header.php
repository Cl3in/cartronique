<?php 
require_once __DIR__ . '/config.php';

// Dynamic URL for canonical & OG
$protocol = (!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off') ? "https://" : "http://";

$currentUrl = $protocol . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];

// Dynamic title (fallback)
$pageTitle = $pageTitle ?? "Cartronique Automotive Locksmith";
?>

<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<title><?= $pageTitle ?> | <?= SITE_NAME ?></title>
<meta name="description" content="Cartronique Automotive Locksmith provides expert car key programming, replacement, key cutting, GPS tracking, ignition repair, car alarm installation, and more in Nairobi, Kenya.">
<meta name="keywords" content="car locksmith, key programming, key replacement, key cutting, car GPS tracking, ignition repair, car alarm system, electronic steering lock">
<meta name="author" content="<?= SITE_NAME ?>">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="robots" content="index, follow">
<link rel="canonical" href="<?= $currentUrl ?>">
<link rel="icon" type="image/png" href="<?= BASE_URL ?>assets/images/favicon.png">

<!-- Tailwind -->
<script src="https://cdn.tailwindcss.com"></script>

<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css"/>

<!-- Main CSS -->
<link rel="stylesheet" href="<?= BASE_URL ?>assets/css/main.css">
</head>

<body class="bg-[#141414] text-black">

<!-- HEADER -->
<header class="sticky top-0 z-50 shadow-sm">

  <!-- TOP BAR: OPENING HOURS -->
<div class="w-full bg-black border-b border-[#222] text-white z-50">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 py-2 flex justify-between items-center text-sm sm:text-base">

    <!-- STATUS -->
    <div class="flex items-center gap-3">

      <!-- CLOCK -->
      <i class="fa-solid fa-clock text-white-500 text-lg"></i>

      <!-- STATUS DOT -->
      <span id="statusDot" class="w-3 h-3 rounded-full inline-block"></span>

      <!-- TEXT -->
      <span id="liveStatus" class="font-semibold">
        Checking...
      </span>

    </div>

    <!-- HOURS -->
<div class="flex flex-col sm:flex-row sm:items-center sm:gap-6 gap-2 text-gray-400">

  <!-- Working Hours -->
  <div class="flex items-center gap-2 text-sm">
    <i class="fa-solid fa-calendar-days"></i>
    <span>Mon - Fri: 8AM – 6PM</span>
  </div>

  <!-- Location -->
  <div class="flex items-center gap-2 text-sm">
    <i class="fa-solid fa-location-dot text-red-600"></i>
    <span>Kesuita Square, Kilimani</span>
  </div>

</div>

  </div>
</div>

<!-- MAIN NAV -->
<div class="bg-white max-w-7xl mx-auto px-6 py-2 flex items-center justify-between">

  <!-- LOGO -->
  <a href="<?= BASE_URL ?>" class="text-1xl font-extrabold tracking-tight">
    <span class="text-black uppercase font-bold">CARTRONIQUE</span> 
    <span class="text-red-600 uppercase font-bold">SYSTEM</span>
  </a>
<!-- DESKTOP NAV -->
<nav class="hidden md:flex flex-1 justify-center gap-6 font-medium text-[#1E3A8A]">

  <a href="<?= BASE_URL ?>index.php" class="flex items-center gap-2 hover:text-red-500 transition duration-300">
    <i class="fa-solid fa-house"></i> Home
  </a>

  <a href="<?= BASE_URL ?>pages/about.php" class="flex items-center gap-2 hover:text-red-500 transition duration-300">
    <i class="fa-solid fa-building"></i> About Us
  </a>

  <!-- SERVICES MEGA MENU -->
  <div class="relative">
    <button class="flex items-center gap-2 hover:text-red-500 transition duration-300" id="servicesBtn">
      <i class="fa-solid fa-key"></i> Services <i class="fa fa-chevron-down text-xs"></i>
    </button>
    <div id="megaMenu" class="absolute hidden bg-white p-6 shadow-lg mt-3 rounded-lg min-w-[360px] z-50 text-[#1E3A8A] grid grid-cols-2 gap-4 transition-all duration-300">
<a href="<?= BASE_URL ?>pages/services/key-programming.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-key"></i> Car Key Programming & ECU
</a>

<a href="<?= BASE_URL ?>pages/services/key-replacement.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-key"></i> Lost Car Key Replacement
</a>

<a href="<?= BASE_URL ?>pages/services/key-cutting.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-keyboard"></i> Key Cutting & Duplication
</a>

<a href="<?= BASE_URL ?>pages/services/gps-car-tracking.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-location-dot"></i> GPS Car Tracking
</a>

<a href="<?= BASE_URL ?>pages/services/ignition-repair.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-car-battery"></i> Ignition Repair & Replacement
</a>

<a href="<?= BASE_URL ?>pages/services/car-alarm-system.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-bell"></i> Car Alarm System
</a>

<a href="<?= BASE_URL ?>pages/services/car-radio-installation.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-radio"></i> Car Radio Unlocking & Installation
</a>

<a href="<?= BASE_URL ?>pages/services/egr-dpf-delete.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-cogs"></i> EGR & DPF Delete
</a>

<a href="<?= BASE_URL ?>pages/services/electronic-steering-lock.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-lock"></i> Electronic Steering Lock
</a>
    </div>
  </div>

  <a href="<?= BASE_URL ?>pages/service-areas.php" class="flex items-center gap-2 hover:text-red-500 transition duration-300">
    <i class="fa-solid fa-map-location-dot"></i> Service Areas
  </a>

  <a href="<?= BASE_URL ?>pages/contact.php" class="flex items-center gap-2 hover:text-red-500 transition duration-300">
    <i class="fa-solid fa-envelope"></i> Contact Us
  </a>

</nav>

    <!-- MOBILE MENU BUTTON -->
    <button id="menuBtn" class="md:hidden text-black text-2xl ml-3">
      <i class="fa-solid fa-bars"></i>
    </button>
  </div>
</header>

<!-- MOBILE OVERLAY -->
<div id="mobileOverlay" class="fixed inset-0 bg-black/50 hidden z-40 backdrop-blur-sm"></div>

<!-- MOBILE MENU -->
<div id="mobileMenu" class="fixed top-0 right-0 h-full w-80 bg-white shadow-2xl transform translate-x-full transition-transform duration-500 z-50">
  <div class="p-6 flex flex-col gap-6 font-semibold h-full text-[#1E3A8A]">

    <div class="flex justify-between items-center border-b pb-4">
      <span class="text-lg font-bold">CARTRONIQUE <span class="text-red-600">SYSTEM</span></span>
      <button id="closeMenu" aria-label="Close Menu">
        <i class="fa fa-times"></i>
      </button>
    </div>

    <!-- HOME -->
    <a href="<?= BASE_URL ?>" class="flex items-center gap-3 hover:text-red-500"><i class="fa-solid fa-house"></i> Home</a>

    <!-- ABOUT -->
    <a href="<?= BASE_URL ?>pages/about.php" class="flex items-center gap-3 hover:text-red-500">
      <i class="fa-solid fa-building"></i> About Us
    </a>

    <!-- MOBILE SERVICES ACCORDION -->
    <button id="mobileServicesBtn" class="flex justify-between items-center w-full py-2">
      <span class="flex items-center gap-3"><i class="fa-solid fa-key"></i> Services</span>
      <i id="mobileServicesIcon" class="fa fa-chevron-down transition-transform duration-300"></i>
    </button>

    <div id="mobileServicesMenu" class="overflow-hidden max-h-0 opacity-0 transition-all duration-500 flex flex-col ml-4 gap-3">
      <a href="<?= BASE_URL ?>pages/services/key-programming.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-key"></i> Car Key Programming & ECU
</a>

<a href="<?= BASE_URL ?>pages/services/key-replacement.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-key"></i> Lost Car Key Replacement
</a>

<a href="<?= BASE_URL ?>pages/services/key-cutting.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-keyboard"></i> Key Cutting & Duplication
</a>

<a href="<?= BASE_URL ?>pages/services/gps-car-tracking.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-location-dot"></i> GPS Car Tracking
</a>

<a href="<?= BASE_URL ?>pages/services/ignition-repair.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-car-battery"></i> Ignition Repair & Replacement
</a>

<a href="<?= BASE_URL ?>pages/services/car-alarm-system.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-bell"></i> Car Alarm System
</a>

<a href="<?= BASE_URL ?>pages/services/car-radio-installation.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-radio"></i> Car Radio Unlocking & Installation
</a>

<a href="<?= BASE_URL ?>pages/services/egr-dpf-delete.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-cogs"></i> EGR & DPF Delete
</a>

<a href="<?= BASE_URL ?>pages/services/electronic-steering-lock.php" class="hover:text-red-500 flex items-center gap-2">
  <i class="fa-solid fa-lock"></i> Electronic Steering Lock
</a>
</div>

  
    <!-- SERVICE AREAS -->
<a href="<?= BASE_URL ?>pages/service-areas.php" class="flex items-center gap-3 hover:text-red-500">
  <i class="fa-solid fa-map-location-dot"></i> Service Areas
</a>

<!-- CONTACT US -->
<a href="<?= BASE_URL ?>pages/contact.php" class="flex items-center gap-3 hover:text-red-500">
  <i class="fa-solid fa-envelope"></i> Contact Us
</a>

<!-- REQUEST QUOTE BUTTON -->
<a href="<?= BASE_URL ?>pages/contact.php" class="bg-red-600 text-white px-5 py-2 rounded-full text-center mt-auto hover:bg-red-700 transition duration-300">
  Request Quote
</a>

  </div>
</div>

<script>
// MOBILE MENU TOGGLE
const menuBtn = document.getElementById('menuBtn');
const closeMenu = document.getElementById('closeMenu');
const mobileMenu = document.getElementById('mobileMenu');
const mobileOverlay = document.getElementById('mobileOverlay');

menuBtn.onclick = () => {
  mobileMenu.classList.remove('translate-x-full');
  mobileOverlay.classList.remove('hidden');
};
closeMenu.onclick = () => {
  mobileMenu.classList.add('translate-x-full');
  mobileOverlay.classList.add('hidden');
};
mobileOverlay.onclick = closeMenu.onclick;

// MOBILE SERVICES ACCORDION (AUTO HEIGHT)
const servicesBtnMobile = document.getElementById('mobileServicesBtn');
const servicesMenuMobile = document.getElementById('mobileServicesMenu');
const servicesIconMobile = document.getElementById('mobileServicesIcon');

servicesBtnMobile.onclick = () => {
  if (servicesMenuMobile.style.maxHeight && servicesMenuMobile.style.maxHeight !== "0px") {
    servicesMenuMobile.style.maxHeight = "0px";
    servicesMenuMobile.style.opacity = "0";
  } else {
    servicesMenuMobile.style.maxHeight = servicesMenuMobile.scrollHeight + "px";
    servicesMenuMobile.style.opacity = "1";
  }
  servicesIconMobile.classList.toggle('rotate-180');
};

// DESKTOP MEGA MENU
const servicesBtn = document.getElementById('servicesBtn');
const megaMenu = document.getElementById('megaMenu');

servicesBtn.addEventListener('mouseenter', () => megaMenu.classList.remove('hidden'));
servicesBtn.addEventListener('mouseleave', () => {
  setTimeout(() => {
    if (!megaMenu.matches(':hover')) megaMenu.classList.add('hidden');
  }, 100);
});
megaMenu.addEventListener('mouseenter', () => megaMenu.classList.remove('hidden'));
megaMenu.addEventListener('mouseleave', () => megaMenu.classList.add('hidden'));
</script>

<script>
document.addEventListener("DOMContentLoaded", function(){

  const statusText = document.getElementById("liveStatus");
  const statusDot = document.getElementById("statusDot");

  function updateStatus(){

    // Get Kenya time
    const now = new Date().toLocaleString("en-US", {
      timeZone: "Africa/Nairobi"
    });

    const current = new Date(now);

    const day = current.getDay(); // 0 = Sunday
    const hour = current.getHours();

    // Business hours: Mon-Sat (1–6), 8AM–6PM
    const isOpenDay = day >= 1 && day <= 6;
    const isOpenHour = hour >= 8 && hour < 18;

    if(isOpenDay && isOpenHour){
      // OPEN
      statusText.textContent = "Open Now";
      statusText.className = "font-semibold text-green-400";

      statusDot.className = "w-3 h-3 rounded-full bg-green-500 inline-block animate-pulse";
    } else {
      // CLOSED
      statusText.textContent = "Closed";
      statusText.className = "font-semibold text-red-400";

      statusDot.className = "w-3 h-3 rounded-full bg-red-500 inline-block";
    }

  }

  // Run immediately
  updateStatus();

  // Update every minute
  setInterval(updateStatus, 60000);

});
</script>