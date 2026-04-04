<?php
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="relative min-h-screen flex items-center py-24 px-6">

<!-- Background -->
<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/flatbed6.webp"
class="w-full h-full object-cover"
loading="lazy"
alt="Flatbed truck hauling freight">
</div>

<!-- Overlay -->
<div class="absolute inset-0 bg-black/80"></div>

<div class="relative z-10 max-w-7xl mx-auto grid md:grid-cols-2 gap-16 items-start">

<!-- LEFT CONTENT -->
<div class="text-white">

<h1 class="text-5xl md:text-7xl font-bold mb-4 leading-tight">
Apply To <span class="text-red-500">Drive With Us</span>
</h1>

<p class="text-red-500 uppercase tracking-[0.3em] text-sm mb-6">
Professional Truck Driver Careers
</p>

<p class="text-lg text-gray-300 mb-10 max-w-xl">
Join Parrish Family Trucking and become part of a reliable,
professional team with steady freight and strong support.
</p>

<div class="space-y-4 text-gray-300">

<div class="flex gap-3"><span class="text-red-500">✔</span> Competitive pay</div>
<div class="flex gap-3"><span class="text-red-500">✔</span> Dedicated dispatch</div>
<div class="flex gap-3"><span class="text-red-500">✔</span> Reliable equipment</div>
<div class="flex gap-3"><span class="text-red-500">✔</span> Fast hiring process</div>

</div>

</div>

<!-- FORM -->
<div>

<?php if(isset($_GET['application'])): ?>

<?php if($_GET['application'] == "success"): ?>
<div class="bg-green-600 p-4 rounded mb-6 text-center">Application submitted successfully.</div>

<?php elseif($_GET['application'] == "error"): ?>
<div class="bg-red-600 p-4 rounded mb-6 text-center">Something went wrong. Try again.</div>

<?php elseif($_GET['application'] == "invalid_email"): ?>
<div class="bg-red-600 p-4 rounded mb-6 text-center">Invalid email address.</div>

<?php elseif($_GET['application'] == "invalid_file"): ?>
<div class="bg-red-600 p-4 rounded mb-6 text-center">Invalid file format.</div>

<?php elseif($_GET['application'] == "file_too_large"): ?>
<div class="bg-red-600 p-4 rounded mb-6 text-center">File must be under 5MB.</div>

<?php endif; ?>
<?php endif; ?>

<form action="<?= BASE_URL ?>forms/send_application.php"
method="POST"
enctype="multipart/form-data"
class="bg-black/70 backdrop-blur-lg p-8 rounded-2xl shadow-xl border border-gray-700 space-y-6">

<input type="hidden" name="MAX_FILE_SIZE" value="5242880">

<!-- HONEYPOT -->
<input type="text" name="company" class="hidden">

<h2 class="text-2xl font-bold text-center text-white">
Driver Application
</h2>

<!-- NAME -->
<div class="grid md:grid-cols-3 gap-4">
<input type="text" name="first_name" required placeholder="First Name *" class="input">
<input type="text" name="middle_name" placeholder="Middle Name" class="input">
<input type="text" name="last_name" required placeholder="Last Name *" class="input">
</div>

<!-- CONTACT -->
<div class="grid md:grid-cols-2 gap-4">
<input type="email" name="email" required placeholder="Email *" class="input">
<input type="tel" name="phone" required placeholder="Phone *" class="input">
</div>

<!-- PERSONAL -->
<div class="grid md:grid-cols-2 gap-4">
<input type="date" name="driver_birthday" required class="input">
<select name="gender" required class="input">
<option value="">Select Gender</option>
<option>Male</option>
<option>Female</option>
<option>Prefer not to say</option>
</select>
</div>

<!-- ADDRESS -->
<div class="grid md:grid-cols-2 gap-4">
<input type="text" name="driver_address" required placeholder="Street Address *" class="input">
<input type="text" name="driver_city" required placeholder="City *" class="input">
</div>

<div class="grid md:grid-cols-2 gap-4">
<input type="text" name="driver_state" required placeholder="State *" class="input">
<input type="text" name="driver_zip" required placeholder="Zip Code *" class="input">
</div>

<!-- EXPERIENCE -->
<input type="number" name="experience" min="0" required placeholder="Years of Experience *" class="input">

<textarea name="message" rows="4" required placeholder="Describe your experience..." class="input"></textarea>

<!-- FILE -->
<div>
<label class="text-gray-300 text-sm">Upload Resume *</label>
<input type="file" name="resume" required accept=".pdf,.doc,.docx"
class="w-full bg-gray-900 border border-gray-700 p-3 rounded text-gray-300">
</div>

<!-- RECAPTCHA -->
<div class="flex justify-center">
<div class="g-recaptcha" data-sitekey="6Lc4T5MsAAAAAOAFQGLTViwjw7AlKXD19DaU7AH0"></div>
</div>

<!-- SUBMIT -->
<button type="submit"
class="w-full bg-red-600 py-2 rounded-full font-bold hover:bg-red-700 transition">
Submit Application
</button>

<a href="<?= BASE_URL ?>pages/careers.php"
class="block text-center text-gray-400 hover:text-red-500">
← Back to Careers
</a>

</form>

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

<?php include BASE_PATH . 'includes/footer.php'; ?>