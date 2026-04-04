<?php
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="relative min-h-screen flex items-center justify-center px-6 py-24">

<!-- Background -->
<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/flatbed1.webp"
class="w-full h-full object-cover"
loading="lazy"
alt="Flatbed truck on highway">
</div>

<!-- Overlay -->
<div class="absolute inset-0 bg-black/75"></div>

<div class="relative z-10 max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-center">

<!-- LEFT -->
<div class="text-white">

<h1 class="text-5xl md:text-7xl font-bold mb-4">
Join Our <span class="text-red-500">Driver Network</span>
</h1>

<p class="text-red-500 uppercase tracking-widest text-sm mb-6">
Professional Truck Driver Opportunities
</p>

<p class="text-lg text-gray-300 mb-10 max-w-xl">
Submit your driver profile and join a reliable,
professional trucking network with steady freight.
</p>

<div class="space-y-3 text-gray-300">
<div>✔ Competitive pay</div>
<div>✔ Reliable equipment</div>
<div>✔ Consistent loads</div>
<div>✔ Dedicated dispatch</div>
</div>

</div>

<!-- FORM -->
<div>

<?php if(isset($_GET['driver'])): ?>

<?php if($_GET['driver'] == "success"): ?>
<div class="bg-green-600 p-4 rounded mb-6 text-center">Profile submitted successfully.</div>

<?php elseif($_GET['driver'] == "error"): ?>
<div class="bg-red-600 p-4 rounded mb-6 text-center">Something went wrong.</div>

<?php elseif($_GET['driver'] == "invalid_email"): ?>
<div class="bg-red-600 p-4 rounded mb-6 text-center">Invalid email.</div>

<?php endif; ?>

<?php endif; ?>

<form action="<?= BASE_URL ?>forms/send_driver_profile.php"
method="POST"
class="bg-black/70 backdrop-blur-lg p-8 rounded-2xl shadow-xl border border-gray-700 space-y-6">

<!-- HONEYPOT -->
<input type="text" name="company" class="hidden">

<h2 class="text-2xl font-bold text-white text-center">
Driver Profile
</h2>

<input type="text" name="driver_name" required placeholder="Full Name *" class="input">

<input type="email" name="driver_email" required placeholder="Email *" class="input">

<input type="tel" name="driver_phone" required placeholder="Phone *" class="input">

<input type="date" name="driver_birthday" required class="input">

<input type="text" name="driver_address" required placeholder="Address *" class="input">

<div class="grid md:grid-cols-2 gap-4">
<input type="text" name="driver_city" required placeholder="City *" class="input">
<input type="text" name="driver_state" required placeholder="State *" class="input">
</div>

<div class="grid md:grid-cols-2 gap-4">
<input type="text" name="driver_zip" required placeholder="Zip Code *" class="input">
<input type="number" name="driver_experience" min="0" required placeholder="Years of Experience *" class="input">
</div>

<!-- RECAPTCHA -->
<div class="flex justify-center">
<div class="g-recaptcha" data-sitekey="6Lc4T5MsAAAAAOAFQGLTViwjw7AlKXD19DaU7AH0"></div>
</div>

<button type="submit"
class="w-full bg-red-600 py-2 rounded-full font-bold hover:bg-red-700 transition">
Submit Driver Profile
</button>

<a href="<?= BASE_URL ?>pages/careers.php"
class="block text-center text-gray-400 hover:text-red-500">
← Back to Careers
</a>

</form>

</div>

</div>
</section>


<!-- CARDS CONTAINER -->
<section class="bg-gray-900 py-10 px-6">
  <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">

    <!-- SEO / Careers Card -->
    <div data-aos="fade-up" data-aos-delay="100"
         class="bg-gradient-to-br from-gray-800 to-gray-700 rounded-2xl shadow-2xl p-10 text-center flex flex-col justify-between hover:scale-105 transition-transform duration-300">
      <h2 class="text-3xl font-bold text-white mb-4 flex items-center justify-center gap-2">
        <i class="fa fa-truck text-red-500"></i> Professional Truck Drivers Wanted
      </h2>
      <p class="text-gray-300 mb-6">
        We are expanding our network of CDL drivers across major U.S. routes. 
        Flatbed experience and a strong safety record are highly valued.
      </p>
      <a href="<?= BASE_URL ?>pages/careers.php"
         class="inline-block bg-red-600 px-8 py-3 rounded-full text-white font-semibold hover:bg-red-700 shadow-md">
        View Careers
      </a>
    </div>

    <!-- CTA Card -->
    <div data-aos="fade-up" data-aos-delay="200"
         class="bg-gradient-to-br from-red-600 to-red-500 rounded-2xl shadow-2xl p-10 text-center flex flex-col justify-between hover:scale-105 transition-transform duration-300">
      <h2 class="text-3xl font-bold text-white mb-4 flex items-center justify-center gap-2">
        <i class="fa fa-play-circle text-black"></i> Ready to Drive With Us?
      </h2>
      <p class="text-white mb-6">
        Join a professional trucking network focused on reliability and growth.
      </p>
      <a href="<?= BASE_URL ?>forms/driver-application.php"
         class="bg-black px-8 py-3 rounded-full hover:bg-gray-900 shadow-md">
        Apply Now
      </a>
    </div>

  </div>
</section>

<style>
.input {
    width: 100%;
    padding: 14px;
    border-radius: 8px;
    background: #111;
    border: 1px solid #444;
    color: #fff;
}
.input:focus {
    border-color: #ef4444;
    outline: none;
}
</style>
<!-- AOS JS -->
<script src="https://cdn.jsdelivr.net/npm/aos@3.0.0-beta.6/dist/aos.js"></script>
<script>
  AOS.init({
    duration: 800, // animation duration in ms
    easing: 'ease-out', // easing type
    once: true // animate only once
  });
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>