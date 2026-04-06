<?php  
require_once __DIR__ . '/../../includes/config.php';

/* ================= SEO META ================= */
$pageTitle = "Car Alarm System Installation Kenya | Cartronique System";
$pageDescription = "Professional car alarm system installation in Nairobi Kenya. Protect your vehicle, prevent theft, and integrate with GPS tracking and immobilizers.";
$pageKeywords = "car alarm system Kenya, vehicle security Nairobi, immobilizer installation Kenya, GPS car tracker integration";

$canonical = BASE_URL . "services/car-alarm-system";
$robots = "index, follow";

include BASE_PATH . 'includes/header.php';
?>

<link rel="canonical" href="<?= $canonical ?>">
<meta name="robots" content="<?= $robots ?>">
<meta name="description" content="<?= $pageDescription ?>">
<meta name="keywords" content="<?= $pageKeywords ?>">

<meta property="og:title" content="<?= $pageTitle ?>">
<meta property="og:description" content="<?= $pageDescription ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="<?= BASE_URL ?>assets/images/alarmm.jpg">

<div class="bg-white text-gray-900">

  <!-- ================= CAR ALARM GUIDE ================= -->
  <section class="py-20">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

      <!-- TEXT -->
      <div>
        <h1 class="text-4xl font-bold mb-6 text-red-600">
          Car Alarm System Installation in Kenya
        </h1>

        <p class="text-gray-700 mb-4 leading-relaxed">
          A <strong>car alarm system</strong> is an electronic security device installed to protect your vehicle and valuables. Modern systems detect forced entry, vibration, tilt, ignition tampering, and motion. When triggered, they sound a loud siren, flash lights, and notify you instantly via SMS or mobile app.
        </p>

        <p class="text-gray-700 mb-4 leading-relaxed">
          Car alarm systems are categorized as <strong>OEM</strong> (factory-fitted) or <strong>aftermarket</strong> (professionally installed). Aftermarket systems like <em>Prestige</em> and <em>Autowatch</em> often include immobilizers, shock sensors, remote start, and smartphone integration for superior theft prevention.
        </p>

        <h2 class="text-2xl font-bold text-red-600 mb-3">Why Install a Car Alarm?</h2>
        <ul class="list-disc list-inside text-gray-700 space-y-2 mb-4">
          <li><strong>Theft deterrence:</strong> Audible alarms and immobilizers make your car a hard target.</li>
          <li><strong>Protect valuables:</strong> Reduces smash-and-grab incidents for items left in the vehicle.</li>
          <li><strong>Instant alerts:</strong> Receive notifications on tampering or motion.</li>
          <li><strong>Integration:</strong> Works with GPS trackers, immobilizers, central locking, and dash cams.</li>
          <li><strong>Insurance & resale:</strong> Potential insurance discounts and higher resale value.</li>
        </ul>
      </div>

      <!-- IMAGE -->
      <div class="relative group overflow-hidden rounded-xl shadow-xl">
        <img src="<?= BASE_URL ?>assets/images/alarmm.jpg" 
             alt="Car alarm system installation and central lock kit" 
             class="w-full h-[520px] object-cover transition duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
          <span class="text-white text-3xl font-bold tracking-widest">CAR ALARM SYSTEM</span>
        </div>
      </div>

    </div>
  </section>

  <!-- ================= ADVANTAGES ================= -->
  <section class="py-20 bg-gray-50">
    <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

      <!-- IMAGE -->
      <div class="relative group overflow-hidden rounded-xl shadow-xl">
        <img src="<?= BASE_URL ?>assets/images/advantage.jpg" 
             alt="Car alarm system advantages" 
             class="w-full h-[520px] object-cover transition duration-500 group-hover:scale-105">
        <div class="absolute inset-0 bg-black/30 flex items-center justify-center">
          <span class="text-white text-3xl font-bold tracking-widest">ADVANTAGES</span>
        </div>
      </div>

      <!-- TEXT -->
      <div>
        <h2 class="text-4xl font-bold mb-6 text-red-600"> Advantages of Car Alarm Installation</h2>
        <p class="text-gray-700 mb-6 leading-relaxed">
          A correctly installed alarm system is your vehicle’s first line of defense. Cartronique System fits industry-leading devices tuned to local threats and conditions.
        </p>
        <ul class="list-decimal list-inside text-gray-700 space-y-2">
          <li><strong>Deterrence:</strong> Visible sensors and immobilizers reduce theft attempts.</li>
          <li><strong>Valuables protection:</strong> Minimizes break-ins targeting electronics and belongings.</li>
          <li><strong>Immediate response:</strong> Loud siren + notifications increase chances of recovery.</li>
          <li><strong>Layered security:</strong> Combine with GPS trackers, immobilizers, turbo timers, and dash cams.</li>
          <li><strong>Lower insurance premiums:</strong> Approved anti-theft systems often give discounts.</li>
          <li><strong>Higher resale value:</strong> Buyers prefer vehicles with robust security setups.</li>
        </ul>
      </div>

    </div>
  </section>

<!-- ================= TYPES OF CAR ALARMS ================= -->
<section id="cas-install" class="py-20 bg-[#0a1f44] text-gray-900">
  <div class="max-w-7xl mx-auto px-6">
    <h2 class="text-4xl font-bold text-red-600 mb-6 text-center">Types of Car Alarm Systems</h2>
    <p class="text-gray-300 mb-8 leading-relaxed text-center">
      Cartronique System offers professional car alarm installation in Nairobi and across Kenya. We tailor installs for saloon cars, SUVs, pickups, trucks, and fleets.
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-6">

      <!-- Prestige -->
      <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition hover:scale-105">
        <img src="<?= BASE_URL ?>assets/images/prestige.jpg" alt="Prestige Car Alarm" class="rounded-lg mb-3 h-40 w-full object-cover">
        <h3 class="text-xl font-bold text-red-600 mb-2">Prestige Car Alarms</h3>
        <p class="text-gray-700 text-sm mb-3">Reliable, cost-effective systems with immobilizer functionality and remote control operation.</p>
        <a href="<?= BASE_URL ?>contact" class="inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
      </div>

      <!-- Autowatch -->
      <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition hover:scale-105">
        <img src="<?= BASE_URL ?>assets/images/auto.jpg" alt="Autowatch Car Alarm" class="rounded-lg mb-3 h-40 w-full object-cover">
        <h3 class="text-xl font-bold text-red-600 mb-2">Autowatch Car Alarm Systems</h3>
        <p class="text-gray-700 text-sm mb-3">Premium, smartphone-enabled systems with advanced encryption and remote management.</p>
        <a href="<?= BASE_URL ?>contact" class="inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
      </div>

      <!-- OEM & Aftermarket -->
      <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition hover:scale-105">
        <img src="<?= BASE_URL ?>assets/images/aftermarket.jpeg" alt="OEM and Aftermarket Alarms" class="rounded-lg mb-3 h-40 w-full object-cover">
        <h3 class="text-xl font-bold text-red-600 mb-2">OEM & Aftermarket Alarms</h3>
        <p class="text-gray-700 text-sm mb-3">We fit factory-equivalent and aftermarket systems depending on your requirements and budget.</p>
        <a href="<?= BASE_URL ?>contact" class="inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
      </div>

      <!-- Smart Alarms -->
      <div class="bg-white p-4 rounded-xl shadow hover:shadow-lg transition hover:scale-105">
        <img src="<?= BASE_URL ?>assets/images/salarm.jpg" alt="Smart Alarms With Mobile Alerts" class="rounded-lg mb-3 h-40 w-full object-cover">
        <h3 class="text-xl font-bold text-red-600 mb-2">Smart Alarms with Mobile Alerts</h3>
        <p class="text-gray-700 text-sm mb-3">Receive push notifications, remote immobilize options, and GPS integration for immediate action.</p>
        <a href="<?= BASE_URL ?>contact" class="inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
      </div>

    </div>

    <p class="text-gray-300 mt-6 text-center text-sm">
      All installations include diagnostics, professional concealment of wiring, and a workmanship warranty. Mobile installation in Nairobi available for convenience.
    </p>
  </div>
</section>

</div>


<!-- ================= ACCESSORIES ================= -->
<section id="cas-accessories" class="cas-section cas-accessories py-20 bg-[#0a1f44] text-gray-900">
  <div class="cas-container max-w-7xl mx-auto px-6">
    <h2 class="text-3xl font-bold mb-4 text-white"> Car Alarm Accessories & Prices</h2>
    <p class="cas-lead mb-8 text-gray-300">
      Quality accessories to strengthen your car alarm system — prices shown
      are indicative and subject to vehicle compatibility.
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-4">

      <!-- Accessory 1 -->
      <article class="cas-access-card bg-white rounded-xl shadow p-4 hover:shadow-lg transition">
        <img src="<?= BASE_URL ?>assets/images/central-lock-full-set.jpg" alt="Central Lock Kit - Full Set" class="cas-access-img rounded mb-3 h-40 w-full object-cover">
        <div class="cas-access-body">
          <h3 class="font-semibold mb-1 text-gray-900">Central Lock Kit - Full Set (AL007)</h3>
          <p class="text-gray-700 text-sm mb-2">Compatible with remote car alarms. Easy to install, controls front doors.</p>
          <div class="cas-access-price text-gray-900 text-sm mb-2">
            Installation inclusive: <strong>Ksh 6,000</strong>
          </div>
          <a href="<?= BASE_URL ?>contact" class="cas-btn inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
        </div>
      </article>

      <!-- Accessory 2 -->
      <article class="cas-access-card bg-white rounded-xl shadow p-4 hover:shadow-lg transition">
        <img src="<?= BASE_URL ?>assets/images/cut.jpg" alt="Cut-Out Switch 12V" class="cas-access-img rounded mb-3 h-40 w-full object-cover">
        <div class="cas-access-body">
          <h3 class="font-semibold mb-1 text-gray-900">Cut-Out Switch 12V (AL009)</h3>
          <p class="text-gray-700 text-sm mb-2">High-speed switching with compact design for micro analog signals.</p>
          <div class="cas-access-price text-gray-900 text-sm mb-2">
            Installation inclusive: <strong>Ksh 1,500</strong>
          </div>
          <a href="<?= BASE_URL ?>contact" class="cas-btn inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
        </div>
      </article>

      <!-- Accessory 3 -->
      <article class="cas-access-card bg-white rounded-xl shadow p-4 hover:shadow-lg transition">
        <img src="<?= BASE_URL ?>assets/images/turbo.jpg" alt="Turbo Timer" class="cas-access-img rounded mb-3 h-40 w-full object-cover">
        <div class="cas-access-body">
          <h3 class="font-semibold mb-1 text-gray-900">Turbo Timer (AL009)</h3>
          <p class="text-gray-700 text-sm mb-2">Safety circuit with LCD display. DC12V, detects parking brake, protects turbo.</p>
          <div class="cas-access-price text-gray-900 text-sm mb-2">
            Installation inclusive: <strong>Ksh 6,500</strong>
          </div>
          <a href="<?= BASE_URL ?>contact" class="cas-btn inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
        </div>
      </article>

      <!-- Accessory 4 -->
      <article class="cas-access-card bg-white rounded-xl shadow p-4 hover:shadow-lg transition">
        <img src="<?= BASE_URL ?>assets/images/CAR-IMMOBILIZER.jpg" alt="Car Immobilizer" class="cas-access-img rounded mb-3 h-40 w-full object-cover">
        <div class="cas-access-body">
          <h3 class="font-semibold mb-1 text-gray-900">Car Immobilizer (AL017)</h3>
          <p class="text-gray-700 text-sm mb-2">Engine immobilizer with anti-robbery & anti-carjacking features. GHz RF and dialogue code.</p>
          <div class="cas-access-price text-gray-900 text-sm mb-2">
            Installation inclusive: <strong>Ksh 4,500</strong>
          </div>
          <a href="<?= BASE_URL ?>contact" class="cas-btn inline-block bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded text-sm">GET ONE</a>
        </div>
      </article>

    </div>
  </div>
</section>

<!-- ================= SERVICE SCHEMA ================= -->
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Service",
 "name": "Car Alarm System Installation",
 "description": "Professional car alarm system installation in Nairobi Kenya with GPS integration and immobilizer support.",
 "provider": {
   "@type": "Organization",
   "name": "Cartronique System",
   "url": "<?= BASE_URL ?>"
 },
 "serviceType": "Vehicle Security Installation"
}
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>