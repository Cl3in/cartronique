<?php  
require_once __DIR__ . '/../../includes/config.php';

/* ================= SEO META ================= */
$pageTitle = "Oversized & Wide Load Transportation | Heavy Haul Freight Services";
$pageDescription = "Professional oversized and wide load transportation services. Heavy haul logistics for construction equipment, industrial machinery, and large freight with permits and escort coordination.";
$pageKeywords = "oversized load transport, wide load trucking, heavy haul transportation, oversized freight, wide load logistics, heavy equipment hauling";

$canonical = BASE_URL . "services/wideload";
$robots = "index, follow";

include BASE_PATH . 'includes/header.php';
?>

<!-- SEO Meta -->
<link rel="canonical" href="<?= $canonical ?>">
<meta name="robots" content="<?= $robots ?>">
<meta name="description" content="<?= $pageDescription ?>">
<meta name="keywords" content="<?= $pageKeywords ?>">

<meta property="og:title" content="<?= $pageTitle ?>">
<meta property="og:description" content="<?= $pageDescription ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="<?= BASE_URL ?>assets/images/wide.jpeg">

<div class="bg-black text-white">

<!-- ================= INTRO ================= -->
<section class="py-24 bg-[#0d0d0d]">
<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-16 items-center">

<div>

<h1 class="text-5xl font-extrabold mb-6 tracking-tight">
<strong>Oversized & Wide Load Transportation</strong> Services
</h1>

<p class="text-red-500 text-sm uppercase tracking-[0.3em] mb-6">
Heavy Haul & Oversized Freight Logistics
</p>

<p class="text-gray-300 text-lg leading-relaxed mb-6">
<strong>Oversized load transportation</strong> and 
<strong>wide load trucking services</strong> are essential for moving 
<strong>heavy equipment, industrial machinery, and large freight</strong> 
that exceed standard legal dimensions.
</p>

<p class="text-gray-300 leading-relaxed mb-6">
Our <strong>heavy haul logistics team</strong> handles route planning, 
permit coordination, and safety compliance to ensure every 
<strong>oversized freight shipment</strong> is transported efficiently and legally.
</p>

<p class="text-gray-300 leading-relaxed">
Need professional <strong>wide load transport</strong>? 
<a href="<?= BASE_URL ?>contact" class="text-red-500 underline font-semibold">
Request a freight quote today
</a>.
</p>

<a href="<?= BASE_URL ?>contact"
class="inline-block mt-6 bg-red-600 hover:bg-red-700 px-8 py-4 rounded-lg font-semibold transition">
Request Freight Quote
</a>

</div>

<div>
<img src="<?= BASE_URL ?>assets/images/wide.jpeg"
alt="Wide load truck transporting oversized heavy equipment on highway"
class="rounded-2xl shadow-2xl">
</div>

</div>
</section>


<!-- ================= CAPABILITIES ================= -->
<section class="relative py-28">

<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/wide.jpeg"
class="w-full h-full object-cover blur-sm scale-110"
alt="Oversized freight logistics background">
<div class="absolute inset-0 bg-black/70"></div>
</div>

<div class="relative max-w-7xl mx-auto px-6 text-center">

<h2 class="text-4xl font-extrabold mb-14">
Our <strong>Wide Load Transport Capabilities</strong>
</h2>

<div class="grid md:grid-cols-3 gap-12">

<div class="bg-black/60 border border-gray-700 p-10 rounded-2xl">
<h3 class="text-xl font-bold text-red-500 mb-4">Oversized Equipment</h3>
<p class="text-gray-200">
Transporting construction machinery, industrial generators,
steel structures, and heavy equipment.
</p>
</div>

<div class="bg-black/60 border border-gray-700 p-10 rounded-2xl">
<h3 class="text-xl font-bold text-red-500 mb-4">Permit & Route Planning</h3>
<p class="text-gray-200">
We handle permits, route surveys, bridge clearance,
and logistics planning for oversized loads.
</p>
</div>

<div class="bg-black/60 border border-gray-700 p-10 rounded-2xl">
<h3 class="text-xl font-bold text-red-500 mb-4">Escort Coordination</h3>
<p class="text-gray-200">
Pilot cars and escort vehicles are arranged
to ensure safety and regulatory compliance.
</p>
</div>

</div>

</div>
</section>


<!-- ================= FREIGHT TYPES ================= -->
<section class="py-24 bg-[#0d0d0d]">
<div class="max-w-6xl mx-auto px-6">

<h2 class="text-4xl font-bold mb-10 text-center">
Common <strong>Oversized Freight</strong>
</h2>

<p class="text-gray-300 leading-relaxed mb-8 text-center">
We specialize in transporting <strong>wide load and oversized cargo</strong> 
across multiple industries with precision and safety.
</p>

<ul class="text-gray-300 grid md:grid-cols-2 gap-4 list-disc pl-6">
<li>Large construction equipment</li>
<li>Wind turbine components</li>
<li>Industrial generators</li>
<li>Structural steel</li>
<li>Mining equipment</li>
<li>Bridge components</li>
<li>Manufacturing machinery</li>
<li>Infrastructure materials</li>
</ul>

</div>
</section>


<!-- ================= INTERNAL LINKS (SEO BOOST) ================= -->
<section class="py-24 bg-black border-t border-gray-800">
<div class="max-w-6xl mx-auto px-6 text-center">

<h2 class="text-4xl font-bold mb-10">
Related Freight Services
</h2>

<p class="text-gray-400 mb-10">
Explore our 
<a href="<?= BASE_URL ?>services/flatbed" class="text-red-500 font-semibold">flatbed transportation</a>, 
<a href="<?= BASE_URL ?>services/stepdeck" class="text-red-500 font-semibold">step deck trucking</a>, and 
<a href="<?= BASE_URL ?>services/reefer" class="text-red-500 font-semibold">refrigerated freight services</a>.
</p>

</div>
</section>


<!-- ================= CTA ================= -->
<section class="relative py-28">

<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/flatbed.webp"
class="w-full h-full object-cover blur-sm"
alt="Heavy haul freight transport truck">
<div class="absolute inset-0 bg-black/80"></div>
</div>

<div class="relative max-w-4xl mx-auto text-center px-6">

<h2 class="text-4xl md:text-5xl font-bold mb-6">
Need Heavy Haul Transportation?
</h2>

<p class="text-gray-300 text-lg mb-10">
Our logistics experts are ready to handle your 
<strong>oversized and wide load transport needs</strong>.
</p>

<a href="<?= BASE_URL ?>contact"
class="bg-red-600 hover:bg-red-700 px-10 py-4 rounded-full font-semibold text-lg transition">
Request A Quote
</a>

</div>
</section>

</div>


<!-- ================= SERVICE SCHEMA ================= -->
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "Service",
 "name": "Oversized & Wide Load Transportation",
 "description": "Heavy haul and oversized freight transportation services including permits, escort coordination, and logistics planning.",
 "provider": {
   "@type": "Organization",
   "name": "Parrish Family Trucking",
   "url": "<?= BASE_URL ?>"
 },
 "serviceType": "Heavy Haul Transportation"
}
</script>


<!-- ================= FAQ SCHEMA ================= -->
<script type="application/ld+json">
{
 "@context": "https://schema.org",
 "@type": "FAQPage",
 "mainEntity": [
  {
   "@type": "Question",
   "name": "What is considered a wide load?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "A wide load is any cargo that exceeds standard legal width limits, typically over 8.5 feet, requiring special permits and escort vehicles."
   }
  },
  {
   "@type": "Question",
   "name": "Do oversized loads require permits?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "Yes, oversized freight requires permits, route planning, and sometimes escort vehicles depending on size and regulations."
   }
  }
 ]
}
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>