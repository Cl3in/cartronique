<?php   
require_once __DIR__ . '/../../includes/config.php';

/* ================= SEO META ================= */
$pageTitle = "Step Deck Trailer Transportation Services | Drop Deck Freight Hauling";
$pageDescription = "Professional step deck trailer transportation services for tall, oversized, and heavy freight. Reliable drop deck trucking for construction, industrial, and agricultural equipment.";
$pageKeywords = "step deck trailer, drop deck trailer, step deck trucking, tall cargo transport, heavy equipment hauling, oversized freight transport, step deck logistics";

$canonical = BASE_URL . "services/stepdeck";
$robots = "index, follow";

include BASE_PATH . 'includes/header.php';
?>

<!-- SEO Meta Output -->
<link rel="canonical" href="<?= $canonical ?>">
<meta name="robots" content="<?= $robots ?>">
<meta name="description" content="<?= $pageDescription ?>">
<meta name="keywords" content="<?= $pageKeywords ?>">

<meta property="og:title" content="<?= $pageTitle ?>">
<meta property="og:description" content="<?= $pageDescription ?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $canonical ?>">
<meta property="og:image" content="<?= BASE_URL ?>assets/images/stepdek.webp">

<div class="bg-black text-white">

<!-- ================= HERO ================= -->
<section class="py-28 bg-[#0c0c0c]">
<div class="max-w-7xl mx-auto px-6 grid md:grid-cols-2 gap-20 items-center">

<div class="relative">
<img src="<?= BASE_URL ?>assets/images/stepdek.webp"
alt="Step deck trailer transporting tall industrial cargo for freight logistics"
class="rounded-2xl shadow-2xl">

<div class="absolute -bottom-6 -right-6 bg-red-600 text-white px-6 py-3 rounded-xl text-sm font-semibold shadow-xl">
Lower Deck Advantage
</div>
</div>

<div>

<h1 class="text-5xl font-extrabold mb-6 tracking-tight">
<strong>Step Deck Trailer Transportation</strong> & <strong>Drop Deck Freight Services</strong>
</h1>

<p class="text-red-500 text-sm uppercase tracking-[0.3em] mb-6">
Professional Step Deck Freight & Tall Cargo Transport
</p>

<p class="text-gray-400 text-lg leading-relaxed mb-6">
<strong>Step deck trailer transportation</strong>, also known as 
<strong>drop deck trucking</strong>, is designed for hauling 
<strong>tall cargo, heavy equipment, and oversized freight</strong> 
that cannot fit on standard flatbed trailers.
</p>

<p class="text-gray-500 leading-relaxed mb-6">
Our <strong>step deck trucking services</strong> provide safe and efficient 
transport for <strong>construction equipment, industrial machinery, agricultural equipment</strong>, 
and other high-profile loads across regional and interstate routes.
</p>

<a href="<?= BASE_URL ?>contact"
class="inline-block mt-4 bg-red-600 hover:bg-red-700 px-8 py-4 rounded-lg font-semibold transition">
Request a Freight Quote
</a>

</div>
</div>
</section>


<!-- ================= WHAT IS STEP DECK ================= -->
<section class="py-28 bg-black">
<div class="max-w-6xl mx-auto px-6">

<h2 class="text-4xl font-bold mb-10 text-center">
What Is <strong>Step Deck Transportation</strong>?
</h2>

<p class="text-gray-400 leading-relaxed mb-6 text-center">
A <strong>step deck trailer</strong> features a two-level design with a higher
front deck and a lower rear deck, allowing increased vertical clearance
for transporting <strong>tall freight and oversized cargo</strong>.
</p>

<p class="text-gray-400 leading-relaxed text-center">
This makes <strong>drop deck trailers</strong> ideal for construction machinery,
industrial equipment, generators, and prefabricated structures.
</p>

</div>
</section>


<!-- ================= ADVANTAGES ================= -->
<section class="py-28 bg-[#0f0f0f]">
<div class="max-w-7xl mx-auto px-6">

<h2 class="text-4xl font-bold text-center mb-20">
Advantages of <strong>Step Deck Trailers</strong>
</h2>

<div class="grid md:grid-cols-3 gap-14">

<div class="border-l-4 border-red-600 pl-8">
<h3 class="text-xl font-bold mb-4">Increased Height Clearance</h3>
<p class="text-gray-400 leading-relaxed">
Transport cargo up to 10 feet tall while staying within legal limits.
</p>
</div>

<div class="border-l-4 border-red-600 pl-8">
<h3 class="text-xl font-bold mb-4">Versatile Equipment Transport</h3>
<p class="text-gray-400 leading-relaxed">
Perfect for heavy equipment, machinery, and oversized freight loads.
</p>
</div>

<div class="border-l-4 border-red-600 pl-8">
<h3 class="text-xl font-bold mb-4">Reduced Permit Requirements</h3>
<p class="text-gray-400 leading-relaxed">
Avoid costly oversize permits for many tall loads.
</p>
</div>

</div>
</div>
</section>


<!-- ================= INTERNAL LINKS ================= -->
<section class="py-24 bg-black border-t border-gray-800">
<div class="max-w-6xl mx-auto px-6 text-center">

<h2 class="text-4xl font-bold mb-10">
Other Transportation Services
</h2>

<p class="text-gray-400 mb-10">
Explore our 
<a href="<?= BASE_URL ?>services/flatbed" class="text-red-500 font-semibold">flatbed transportation</a>, 
<a href="<?= BASE_URL ?>services/wideload" class="text-red-500 font-semibold">oversized load hauling</a>, and 
<a href="<?= BASE_URL ?>services/reefer" class="text-red-500 font-semibold">refrigerated freight services</a>.
</p>

</div>
</section>


<!-- ================= CTA ================= -->
<section class="relative py-28">

<div class="absolute inset-0">
<img src="<?= BASE_URL ?>assets/images/flatbed.webp"
class="w-full h-full object-cover blur-sm">
<div class="absolute inset-0 bg-black/80"></div>
</div>

<div class="relative max-w-4xl mx-auto text-center px-6">

<h2 class="text-4xl md:text-5xl font-bold mb-6">
Need Reliable Freight Transport?
</h2>

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
  "name": "Step Deck Trailer Transportation Services",
  "description": "Professional step deck and drop deck trailer transportation for tall cargo, heavy equipment, and oversized freight.",
  "provider": {
    "@type": "Organization",
    "name": "Parrish Family Trucking",
    "url": "<?= BASE_URL ?>"
  },
  "areaServed": {
    "@type": "Place",
    "name": "Southern United States"
  },
  "serviceType": "Freight Transportation"
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
   "name": "What is a step deck trailer?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "A step deck trailer is a two-level trailer designed to transport tall cargo that exceeds standard flatbed height limits."
   }
  },
  {
   "@type": "Question",
   "name": "What can a step deck trailer haul?",
   "acceptedAnswer": {
     "@type": "Answer",
     "text": "Step deck trailers haul construction equipment, industrial machinery, and oversized freight."
   }
  }
 ]
}
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>