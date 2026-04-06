<?php
require_once __DIR__ . '/../../includes/config.php';

/* ================= SEO META ================= */
$pageTitle = "Key Cutting & Duplication in Kenya | Cartronique System";
$pageDescription = "Professional car key cutting & duplication in Kenya. We duplicate mechanical keys, transponder keys, laser-cut keys & smart keys with precision. Fast, reliable & affordable.";
$pageKeywords = "key cutting Kenya, car key duplication Nairobi, spare car key Kenya, duplicate car key, transponder key cutting, laser cut car key, smart key duplication, automotive locksmith Kenya";

$canonical = BASE_URL . "services/key-cutting";
$robots = "index, follow";

include BASE_PATH . 'includes/header.php';
?>

<!-- SEO -->
<link rel="canonical" href="<?= $canonical ?>">
<meta name="robots" content="<?= $robots ?>">
<meta name="description" content="<?= $pageDescription ?>">
<meta name="keywords" content="<?= $pageKeywords ?>">

<meta property="og:title" content="<?= $pageTitle ?>">
<meta property="og:description" content="<?= $pageDescription ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="<?= BASE_URL ?>assets/images/cuti.jpg">



<div class="bg-black text-white">

<!-- ================= HERO ================= -->
<section class="relative py-28 bg-black">
  <div class="absolute inset-0">
    <img src="<?= BASE_URL ?>assets/images/car-bg.jpg" class="w-full h-full object-cover opacity-30">
  </div>

  <div class="relative max-w-7xl mx-auto px-6 text-center">
    <h1 class="text-5xl font-extrabold mb-4">Key Cutting & Duplication</h1>
    <p class="text-gray-300 mb-6">Professional spare key cutting with precision and accuracy</p>


  </div>
</section>

<!-- ================= MAIN ================= -->
<section class="py-20 bg-white">
  <div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-12 items-center">

    <!-- Image -->
    <img src="<?= BASE_URL ?>assets/images/key-cutting.jpg" 
         alt="Car key cutting and duplication service in Nairobi Kenya"
         class="rounded-xl shadow-lg w-full h-80 object-cover">

    <!-- Text -->
    <div class="text-gray-800">
      <p class="mb-6">
        Cartronique System provides fast and accurate car key cutting and duplication in Kenya. 
        We create precise copies of mechanical keys, transponder chip keys, and smart remote keys 
        using advanced cutting technology. A spare key saves you from lockouts, emergencies, and 
        costly dealership charges. Our experts deliver reliable, affordable duplication for all major 
        car brands quick, accurate, and professionally tested.
      </p>

      <p class="mb-8">
        Our technicians use advanced precision equipment and premium key blanks to ensure every 
        duplicated key functions flawlessly. We follow strict quality standards to guarantee reliability, 
        performance, and customer satisfaction with every key we produce.
      </p>

        <a href="<?= BASE_URL ?>pages/contact.php" 
         class="inline-block bg-red-600 hover:bg-red-700 text-white px-6 py-3 rounded-lg font-semibold transition">
        Get Key Duplicate →
      </a>
    </div>

  </div>
</section>

<!-- ================= WHAT'S INCLUDED ================= -->
<section class="py-20 bg-[#0f0f0f]">
  <div class="max-w-6xl mx-auto px-6">

    <!-- Title -->
    <h2 class="text-3xl md:text-4xl font-bold mb-10 text-center text-white">
      What's Included
    </h2>

    <div class="grid md:grid-cols-2 gap-10 items-center">

      <!-- List -->
      <ul class="space-y-4 text-gray-300 text-lg">
        <li>✓ Professional key analysis</li>
        <li>✓ High-quality key blanks</li>
        <li>✓ Precision cutting</li>
        <li>✓ Edge finishing</li>
        <li>✓ Functional testing</li>
        <li>✓ Quality assurance</li>
      </ul>

      <!-- Image -->
      <img 
        src="<?= BASE_URL ?>assets/images/Car_Key.jpg" 
        alt="Car key cutting and duplication process"
        class="rounded-xl shadow-lg w-full h-80 object-cover"
      >

    </div>
  </div>
</section>

<!-- ================= CAR KEY TYPES & PROCESS ================= -->
<section class="py-20 bg-black">
  <div class="max-w-5xl mx-auto px-6">

    <!-- White Content Card -->
    <div class="bg-white rounded-xl shadow-xl p-8 md:p-12">

      <!-- Title -->
      <h2 class="text-3xl md:text-4xl font-bold text-center text-black mb-8">
        Car Key Duplication Services in Nairobi
      </h2>

      <p class="text-gray-700 text-lg leading-relaxed mb-10 text-center">
        At <strong class="text-red-600">Cartronique System</strong>, we provide professional 
        <strong>car key cutting and duplication services in Nairobi and across Kenya</strong>. 
        Our automotive locksmith specialists duplicate all types of vehicle keys using advanced 
        precision equipment to ensure perfect compatibility, durability, and reliable performance 
        for your vehicle.
      </p>

      <!-- Types Section -->
      <h3 class="text-2xl font-semibold text-red-600 mb-4">
        Types of Car Keys We Duplicate
      </h3>

      <p class="text-gray-700 leading-relaxed mb-10">
        We duplicate a wide range of vehicle keys for both modern and traditional cars. 
        Our services include <strong>mechanical car keys</strong>, <strong>transponder chip keys</strong>, 
        <strong>laser-cut keys</strong>, <strong>smart proximity keys</strong>, and 
        <strong>remote key fobs</strong>. We also provide duplication for 
        <strong>commercial and fleet vehicle keys</strong>. Whether you need a spare key 
        for emergencies or a replacement for a worn or damaged key, our locksmith technicians 
        ensure precise duplication so your new key works smoothly with your vehicle’s ignition 
        and locking system.
      </p>

      <!-- Process Section -->
      <h3 class="text-2xl font-semibold text-red-600 mb-4">
        Our Professional Car Key Duplication Process
      </h3>

      <p class="text-gray-700 leading-relaxed">
        Our duplication process begins with a <strong>professional key examination</strong> to 
        determine the exact key type and compatibility with your vehicle. We then select a 
        <strong>high-quality key blank</strong> designed for your specific car model. Using 
        advanced cutting machines, we perform <strong>precision key cutting</strong> that 
        matches the original key pattern perfectly. After cutting, our technicians conduct 
        <strong>quality inspection and finishing</strong> to ensure smooth performance. 
        Finally, every duplicated key undergoes a <strong>functional test</strong> to confirm 
        it works flawlessly before it is delivered to you.
      </p>

    </div>

  </div>
</section>

<!-- ================= BENEFITS ================= -->
<section class="py-20 bg-black">
  <div class="max-w-6xl mx-auto px-6 grid md:grid-cols-2 gap-10 items-center">

    <img src="<?= BASE_URL ?>assets/images/Replacement-Car-Ke.jpg" class="rounded-xl">

    <div>
      <h2 class="text-3xl font-bold mb-6">Why You Need a Spare Key</h2>

      <ul class="space-y-3 text-gray-300">
        <li>🔒 Peace of mind</li>
        <li>⏱️ Saves time</li>
        <li>💰 Cost effective</li>
        <li>🚗 Multi-user convenience</li>
        <li>🛡️ Security backup</li>
      </ul>
    </div>

  </div>
</section>

<!-- ================= CTA ================= -->
<!-- ================= CALL TO ACTION ================= -->
<section class="py-14 bg-red-600 text-white">
  <div class="max-w-5xl mx-auto px-6 text-center">

    <h2 class="text-2xl md:text-3xl font-bold mb-4">
      Get Your Spare Car Key Today
    </h2>

    <p class="text-red-100 mb-8 max-w-2xl mx-auto">
      Need a duplicate or replacement car key? Cartronique System provides fast,
      reliable car key cutting and duplication services across Nairobi and Kenya.
      Contact us today for quick assistance.
    </p>

    <div class="flex flex-col sm:flex-row justify-center items-center gap-4">
      <a href="tel:+254792776196"
         class="bg-black hover:bg-gray-900 px-6 py-3 rounded-lg font-semibold transition">
         Call Now
      </a>

      <a href="https://wa.me/254792776196"
         class="bg-black hover:bg-gray-900 px-6 py-3 rounded-lg font-semibold transition">
         WhatsApp
      </a>

      <a href="<?= BASE_URL ?>contact"
         class="bg-black hover:bg-gray-900 px-6 py-3 rounded-lg font-semibold transition">
         Send Message
      </a>
    </div>

  </div>
</section>

</div>


<!-- ================= SCHEMA ================= -->
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Service",
 "name": "Car Key Cutting & Duplication",
 "provider": {
   "@type": "LocalBusiness",
   "name": "Cartronique System",
   "url": "<?= BASE_URL ?>"
 }
}
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>