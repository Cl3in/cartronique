<?php
require_once __DIR__ . '/includes/config.php';
include BASE_PATH . 'includes/header.php';
?>




<!-- INTRO SECTION -->
<section class="relative py-28 text-white overflow-hidden">
    
    

  <!-- SLIGHTLY BLURRED BACKGROUND IMAGE WITH DARK OVERLAY -->
  <div class="absolute inset-0">
    <img src="<?= BASE_URL ?>assets/images/tarmac.jpg"
         class="w-full h-full object-cover brightness-[0.0] blur-sm scale-22">
    <div class="absolute inset-0 bg-black/25"></div>
  </div>

  <div class="relative max-w-7xl mx-auto px-6">

    <div class="grid lg:grid-cols-5 gap-12 items-center">

      <!-- LEFT CONTENT -->
      <div class="lg:col-span-2 flex flex-col items-center justify-center lg:justify-start text-center lg:text-left space-y-2">
        <h2 class="text-7xl font-extrabold tracking-widest text-red-500 drop-shadow-[0_0_20px_rgba(239,68,68,0.7)]">
          PFT
        </h2>
        <p class="text-gray-200 text-lg font-medium tracking-wide">
          Reliable Nationwide Freight Solutions
        </p>
      </div>

      <!-- RIGHT IMAGE SLIDER -->
      <div class="lg:col-span-3 relative">

        <div class="relative overflow-hidden rounded-2xl
                    shadow-[0_25px_70px_rgba(0,0,0,0.5)]
                    h-[360px] sm:h-[420px] lg:h-[500px]
                    border border-white/20">

          <img id="slideA"
               class="absolute inset-0 w-full h-full object-cover opacity-100 transition-opacity duration-1000"
               alt="Freight Transport">

          <img id="slideB"
               class="absolute inset-0 w-full h-full object-cover opacity-0 transition-opacity duration-1000"
               alt="Freight Transport">

        </div>

        <!-- LEFT ARROW -->
        <button id="prevSlide"
                class="absolute left-5 top-1/2 -translate-y-1/2
                       bg-black/60 hover:bg-red-600
                       text-white w-12 h-12 rounded-full
                       flex items-center justify-center
                       shadow-xl transition">
          <i class="fa-solid fa-chevron-left"></i>
        </button>

        <!-- RIGHT ARROW -->
        <button id="nextSlide"
                class="absolute right-5 top-1/2 -translate-y-1/2
                       bg-black/60 hover:bg-red-600
                       text-white w-12 h-12 rounded-full
                       flex items-center justify-center
                       shadow-xl transition">
          <i class="fa-solid fa-chevron-right"></i>
        </button>

      </div>

    </div>

  </div>

</section>


<!-- ABOUT / CONTACT / CAREERS -->
<section class="relative text-white py-10 overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <div class="absolute inset-0">
    <img src="<?= BASE_URL ?>assets/images/tarm.jpg"
         class="w-full h-full object-cover brightness-[0.30]">
  </div>



  <!-- CONTENT -->
  <div class="relative max-w-5xl mx-auto px-5">

    <div class="grid md:grid-cols-3 gap-7 text-center mb-10">

<!-- ABOUT -->
<a href="<?= BASE_URL ?>about"
class="group relative overflow-hidden rounded-xl
h-[220px] sm:h-[260px] lg:h-[320px]
bg-white border border-gray-200 hover:border-blue-500
hover:shadow-lg hover:shadow-blue-200
transition duration-300 flex items-start sm:items-center">

  <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-transparent"></div>

  <div class="relative z-10 w-full p-4 sm:p-5 lg:p-6 flex flex-col items-center text-center">

    <h3 class="text-gray-900 font-bold text-lg sm:text-xl mb-3 flex items-center justify-center gap-2 group-hover:text-red-500">
      <i class="fa-solid fa-circle-info text-red-500"></i>
      ABOUT US
    </h3>

    <div class="text-xs sm:text-sm leading-relaxed text-gray-600">

<p class="mb-4">
  <strong>PFT Logistics</strong> delivers dependable
  <strong>freight and logistics solutions</strong> across
  <strong>North America</strong>. We specialize in
  <strong>flatbed transportation</strong>,
  <strong>step deck hauling</strong>, and
  <strong>oversized load transport</strong>.
  <strong>Reefer transport coming soon</strong> to handle temperature-sensitive shipments!
</p>

      <div class="mt-3">
        <span class="inline-flex items-center gap-2 px-4 py-2
        bg-blue-50 border border-blue-500 text-blue-600
        rounded-full text-[11px] sm:text-xs font-semibold tracking-wide
        group-hover:bg-red-500 group-hover:border-red-500 group-hover:text-white
        transition duration-300">

        Explore Company
        <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>

        </span>
      </div>

    </div>

  </div>
</a>


<!-- CONTACT -->
<a href="<?= BASE_URL ?>contact"
class="group relative overflow-hidden rounded-xl
h-[220px] sm:h-[260px] lg:h-[320px]
bg-white border border-gray-200 hover:border-blue-500
hover:shadow-lg hover:shadow-blue-200
transition duration-300 flex items-start sm:items-center">

  <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-transparent"></div>

  <div class="relative z-10 w-full p-4 sm:p-5 lg:p-6 flex flex-col items-center text-center">

    <h3 class="text-gray-900 font-bold text-lg sm:text-xl mb-3 flex items-center justify-center gap-2 group-hover:text-red-500">
      <i class="fa-solid fa-envelope text-red-500"></i>
      CONTACT US
    </h3>

    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-4">
      Reach out to <strong>PFT Logistics</strong> for
      <strong>freight transportation services</strong>,
      <strong>logistics support</strong>, or to request a
      <strong>nationwide freight shipping quote</strong>.
    </p>

    <div class="mt-3">
      <span class="inline-flex items-center gap-2 px-4 py-2
      bg-blue-50 border border-blue-500 text-blue-600
      rounded-full text-[11px] sm:text-xs font-semibold tracking-wide
      group-hover:bg-red-500 group-hover:border-red-500 group-hover:text-white
      transition duration-300">

      Start Conversation
      <i class="fa-solid fa-paper-plane text-xs group-hover:translate-x-1 transition"></i>

      </span>
    </div>

  </div>
</a>


<!-- CAREERS -->
<a href="<?= BASE_URL ?>forms/driver-application.php"
class="group relative overflow-hidden rounded-xl
h-[220px] sm:h-[260px] lg:h-[320px]
bg-white border border-gray-200 hover:border-blue-500
hover:shadow-lg hover:shadow-blue-200
transition duration-300 flex items-start sm:items-center">

  <div class="absolute inset-0 bg-gradient-to-r from-white via-white/90 to-transparent"></div>

  <div class="relative z-10 w-full p-4 sm:p-5 lg:p-6 flex flex-col items-center text-center">

    <h3 class="text-gray-900 font-bold text-lg sm:text-xl mb-3 flex items-center justify-center gap-2 group-hover:text-red-500">
      <i class="fa-solid fa-briefcase text-red-500"></i>
      EMPLOYMENT
    </h3>

    <p class="text-gray-600 text-xs sm:text-sm leading-relaxed mb-4">
      Drive your career with <strong>PFT Logistics</strong>.
      Join our team of professional
      <strong>flatbed</strong> and <strong>step deck drivers</strong>
      providing reliable <strong>freight transportation</strong>
      across the nation.
    </p>

    <div class="mt-3">
      <span class="inline-flex items-center gap-2 px-4 py-2
      bg-blue-50 border border-blue-500 text-blue-600
      rounded-full text-[11px] sm:text-xs font-semibold tracking-wide
      group-hover:bg-red-500 group-hover:border-red-500 group-hover:text-white
      transition duration-300">

      Join Our Drivers
      <i class="fa-solid fa-arrow-right text-xs group-hover:translate-x-1 transition"></i>

      </span>
    </div>

  </div>
</a>

    </div>


<!-- SERVICES (UNCHANGED) -->
<div class="text-center mb-10">

<h2 class="text-2xl font-bold text-white tracking-wide flex items-center justify-center gap-2">
<i class="fa-solid fa-truck-moving text-red-500"></i>
SERVICES
</h2>

</div>


<div class="grid md:grid-cols-4 gap-8">

<a href="<?= BASE_URL ?>services/flatbed"
class="group text-center bg-[#121826] border border-white/10 rounded-lg p-4
hover:border-red-500 transition">

<h4 class="font-semibold mb-3 text-gray-200">
FLATBED
</h4>

<img src="<?= BASE_URL ?>assets/images/flat.jpeg"
class="w-full h-auto rounded shadow-md group-hover:scale-105 transition"
alt="Flatbed Freight Transportation">

<div class="mt-4 flex justify-center">
<span class="inline-flex items-center gap-2 px-5 py-2
text-xs font-semibold bg-blue-600 text-white
rounded-full shadow-md
group-hover:bg-red-500 transition duration-300">

View Service
<i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition"></i>

</span>
</div>

</a>


<a href="<?= BASE_URL ?>services/stepdeck"
class="group text-center bg-[#121826] border border-white/10 rounded-lg p-4
hover:border-red-500 transition">

<h4 class="font-semibold mb-3 text-gray-200">
STEPDECK
</h4>

<img src="<?= BASE_URL ?>assets/images/stepdeck.jpeg"
class="w-full h-auto rounded shadow-md group-hover:scale-105 transition"
alt="Stepdeck Freight Transport">

<div class="mt-4 flex justify-center">
<span class="inline-flex items-center gap-2 px-5 py-2
text-xs font-semibold bg-blue-600 text-white
rounded-full shadow-md
group-hover:bg-red-500 transition duration-300">

View Service
<i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition"></i>

</span>
</div>

</a>


<a href="<?= BASE_URL ?>services/wideload"
class="group text-center bg-[#121826] border border-white/10 rounded-lg p-4
hover:border-red-500 transition">

<h4 class="font-semibold mb-3 text-gray-200">
OVERSIZED LOAD
</h4>

<img src="<?= BASE_URL ?>assets/images/wide.jpeg"
class="w-full h-auto rounded shadow-md group-hover:scale-105 transition"
alt="Oversized Load Freight Transport">

<div class="mt-4 flex justify-center">
<span class="inline-flex items-center gap-2 px-5 py-2
text-xs font-semibold bg-blue-600 text-white
rounded-full shadow-md
group-hover:bg-red-500 transition duration-300">

View Service
<i class="fa-solid fa-arrow-right text-[10px] group-hover:translate-x-1 transition"></i>

</span>
</div>

</a>

<a href="<?= BASE_URL ?>services/reefer"
class="group text-center bg-[#121826] border border-white/10 rounded-lg p-4
hover:border-red-500 transition">

<h4 class="font-semibold mb-3 text-gray-200">
REEFER (COMING SOON)
</h4>

<img src="<?= BASE_URL ?>assets/images/stepdek8.webp"
class="w-full h-auto rounded shadow-md group-hover:scale-105 transition"
alt="Refrigerated Freight Transport">

<div class="mt-4 flex justify-center">
<span class="inline-flex items-center gap-2 px-5 py-2
text-xs font-semibold bg-gray-600 text-white
rounded-full shadow-md">

Coming Soon
</span>
</div>

</a>




</div>

</div>
</section>


<!-- OPENING HOURS -->
<section class="py-16 bg-black text-white">

  <div class="max-w-4xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold mb-8">
      Opening Hours
    </h2>

    <div class="bg-[#111] border border-[#222] rounded-2xl shadow-xl p-8">

      <div class="mb-6 flex justify-center items-center gap-3 text-lg">
        <i class="fa-solid fa-clock text-green-500"></i>
        <span id="mainStatus" class="font-semibold"></span>
      </div>

      <div class="space-y-4 text-lg">

        <div class="flex justify-between border-b border-gray-800 pb-3">
          <span class="flex items-center gap-2 text-gray-400">
            <i class="fa-solid fa-calendar-days"></i>
            Monday - Saturday
          </span>
          <span class="font-semibold text-green-500">8:00 AM – 7:00 PM</span>
        </div>

        <div class="flex justify-between border-b border-gray-800 pb-3">
          <span class="flex items-center gap-2 text-gray-400">
            <i class="fa-solid fa-calendar-xmark"></i>
            Sunday
          </span>
          <span class="font-semibold text-red-500">Closed</span>
        </div>

      </div>

    </div>

  </div>

</section>

<!-- PARTNERS -->
<section class="py-16 bg-black text-white">
    
    
    
<div class="max-w-5xl mx-auto px-6">

<div class="bg-white/95 rounded-2xl py-12 px-8 text-center shadow-2xl">

<h2 class="text-3xl font-bold mb-10 text-black">
Our Professional Partnerships
</h2>

<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

<a href="https://www.verizonconnect.com/" target="_blank"
class="group bg-white shadow-md rounded-xl p-6 flex flex-col items-center hover:shadow-xl transition">

<img src="<?= BASE_URL ?>assets/images/verizon-connect.png"
class="h-16 object-contain mb-4"
alt="Verizon Connect">

<span class="text-lg font-semibold text-gray-800">
Our Freight Tracking
</span>

</a>

<a href="#"
class="group bg-white shadow-md rounded-xl p-6 flex flex-col items-center hover:shadow-xl transition">

<img src="<?= BASE_URL ?>assets/images/sdvo_s.jpg"
class="h-16 object-contain mb-4"
alt="SDVOB Certified">

<span class="text-lg font-semibold text-gray-800">
SDVOB Certified
</span>

</a>

<a href="https://nastc.com/" target="_blank"
class="group bg-white shadow-md rounded-xl p-6 flex flex-col items-center hover:shadow-xl transition">

<img src="<?= BASE_URL ?>assets/images/nastc.png"
class="h-16 object-contain mb-4"
alt="NASTC Member">

<span class="text-lg font-semibold text-gray-800">
Member of NASTC
</span>

</a>

</div>

</div>

</div>

</section>




<!-- LOCATION -->
<section class="py-14 bg-[#181818] text-white">
  <div class="max-w-4xl mx-auto px-6 text-center">

    <h2 class="text-3xl font-bold mb-6">
      Our Location
    </h2>

    <div class="rounded-lg overflow-hidden shadow-xl border border-[#222] mb-5">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3245.8920387837855!2d-85.30897748471114!3d35.03751538031588!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8863143fcfd0a2e1%3A0x8240b3ff9f6f6b32!2s14%20Pryor%20Dr%20%23417%2C%20Chattanooga%2C%20TN%2037421!5e0!3m2!1sen!2sus!4v1700837200000!5m2!1sen!2sus"
        width="100%"
        height="280"
        style="border:0;"
        allowfullscreen=""
        loading="lazy"
        referrerpolicy="no-referrer-when-downgrade">
      </iframe>
    </div>

    <p class="text-gray-300">
      14 Pryor Dr Suite 417<br>
      Chattanooga, TN 37421, United States
    </p>

  </div>
</section>

<!-- FREIGHT STATISTICS CARD -->
<section id="freight-stats" class="relative py-16 text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <div class="absolute inset-0">
    <img src="<?= BASE_URL ?>assets/images/tarmac.jpg"
         class="w-full h-full object-cover brightness-[0.35] blur-sm">
  </div>

  <!-- glowing divider -->
  <div class="absolute top-0 left-0 w-full h-[2px] bg-gradient-to-r from-transparent via-red-500 to-transparent opacity-70"></div>

  <div class="relative max-w-7xl mx-auto px-6">

    <!-- TITLE -->
    <div class="text-center mb-12">
      <h2 class="text-2xl font-bold tracking-wide flex items-center justify-center gap-2">
        <i class="fa-solid fa-chart-line text-red-500"></i>
        FREIGHT STATISTICS
      </h2>
      <p class="text-gray-300 text-sm mt-2">
        Performance numbers that reflect our <strong>nationwide freight logistics reliability</strong>
      </p>
    </div>

    <!-- SINGLE CARD -->
    <div class="relative bg-black/50 backdrop-blur-sm rounded-2xl shadow-2xl p-10 flex flex-col md:flex-row justify-around items-center gap-8 border border-white/10">

      <!-- STAT ITEM -->
      <div class="stat flex flex-col items-center">
        <div class="text-red-500 text-4xl mb-3">
          <i class="fa-solid fa-boxes-stacked"></i>
        </div>
        <h3 class="text-4xl font-bold counter" data-target="25000">0</h3>
        <p class="text-gray-300 text-sm mt-1 text-center font-semibold">
          Freight Loads Delivered
        </p>
      </div>

      <!-- STAT ITEM -->
      <div class="stat flex flex-col items-center">
        <div class="text-red-500 text-4xl mb-3">
          <i class="fa-solid fa-road"></i>
        </div>
        <h3 class="text-4xl font-bold counter" data-target="12000000">0</h3>
        <p class="text-gray-300 text-sm mt-1 text-center font-semibold">
          Miles Driven Nationwide
        </p>
      </div>

      <!-- STAT ITEM -->
      <div class="stat flex flex-col items-center">
        <div class="text-red-500 text-4xl mb-3">
          <i class="fa-solid fa-calendar-check"></i>
        </div>
        <h3 class="text-4xl font-bold counter" data-target="15">0</h3>
        <p class="text-gray-300 text-sm mt-1 text-center font-semibold">
          Years Logistics Experience
        </p>
      </div>

      <!-- STAT ITEM -->
      <div class="stat flex flex-col items-center">
        <div class="text-red-500 text-4xl mb-3">
          <i class="fa-solid fa-handshake"></i>
        </div>
        <h3 class="text-4xl font-bold counter" data-target="5000">0</h3>
        <p class="text-gray-300 text-sm mt-1 text-center font-semibold">
          Satisfied Freight Clients
        </p>
      </div>

    </div>
  </div>

  <!-- moving truck -->
  <div class="absolute bottom-4 left-[-120px] text-3xl text-red-500 truck">
    <i class="fa-solid fa-truck-fast"></i>
  </div>

</section>


<!-- SLIDER SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function() {

  const images = [
    "<?= BASE_URL ?>assets/images/loading.jpg",
    "<?= BASE_URL ?>assets/images/stepdek5.webp",
    "<?= BASE_URL ?>assets/images/stepdek6.webp",
    "<?= BASE_URL ?>assets/images/flatbed1.webp",
    "<?= BASE_URL ?>assets/images/flatbed2.webp",
    "<?= BASE_URL ?>assets/images/flatbed3.webp",
    "<?= BASE_URL ?>assets/images/flatbed6.webp",
    "<?= BASE_URL ?>assets/images/stepdek.webp",
    "<?= BASE_URL ?>assets/images/stepdek1.webp",
    "<?= BASE_URL ?>assets/images/stepdek2.webp",
    "<?= BASE_URL ?>assets/images/stepdek9.webp",
    "<?= BASE_URL ?>assets/images/stepdek8.webp",
    "<?= BASE_URL ?>assets/images/flatbed.webp",
    "<?= BASE_URL ?>assets/images/stepdek7.webp"
  ];

  let index = 0;

  const slideA = document.getElementById("slideA");

  const nextBtn = document.getElementById("nextSlide");
  const prevBtn = document.getElementById("prevSlide");

  // Initialize first image
  slideA.src = images[0];

  function showSlide(i) {
    slideA.src = images[i]; // simply update image
  }

  function nextSlide() {
    index++;
    if (index >= images.length) index = 0;
    showSlide(index);
  }

  function prevSlide() {
    index--;
    if (index < 0) index = images.length - 1;
    showSlide(index);
  }

  nextBtn.onclick = nextSlide;
  prevBtn.onclick = prevSlide;

  // Auto slide every 3.5s
  setInterval(nextSlide, 3500);

  // Mobile swipe
  let startX = 0;
  slideA.addEventListener("touchstart", e => { startX = e.touches[0].clientX; });
  slideA.addEventListener("touchend", e => {
    let endX = e.changedTouches[0].clientX;
    if (endX - startX > 50) prevSlide();
    if (startX - endX > 50) nextSlide();
  });

});
</script>

<script>
// COUNTER ANIMATION FUNCTION
const counters = document.querySelectorAll('.counter');
let started = false;

function startCounter(){
  counters.forEach(counter => {
    const target = +counter.getAttribute('data-target');
    let count = 0;

    // Duration in ms
    const duration = 2000;
    const stepTime = Math.max(Math.floor(duration / target), 20); // minimum 20ms per step
    const increment = Math.ceil(target / (duration / stepTime));

    const counterInterval = setInterval(() => {
      count += increment;
      if(count >= target){
        count = target;
        clearInterval(counterInterval);
      }
      counter.innerText = count.toLocaleString();
    }, stepTime);
  });
}

// SCROLL TRIGGER
const statsSection = document.querySelector('#freight-stats');
const stats = document.querySelectorAll('.stat');

const observer = new IntersectionObserver(entries => {
  entries.forEach(entry => {
    if(entry.isIntersecting && !started){
      started = true;
      startCounter();
      stats.forEach((stat,i)=>{
        setTimeout(()=>{
          stat.classList.remove('opacity-0','translate-y-10');
        }, i*200);
      });
    }
  });
},{threshold:0.4});

observer.observe(statsSection);

// TRUCK ANIMATION
const truck = document.querySelector('.truck');

function moveTruck(){
  truck.style.transition = "transform 12s linear";
  truck.style.transform = "translateX(calc(100vw + 200px))";
  setTimeout(()=>{
    truck.style.transition="none";
    truck.style.transform="translateX(0)";
  },12000);
}

setInterval(moveTruck,15000);
</script>

<script>
function updateBusinessStatus() {
  const now = new Date();

  const options = { 
    timeZone: "America/New_York", 
    hour: 'numeric', 
    minute: 'numeric', 
    hour12: false, 
    weekday: 'short' 
  };

  const formatter = new Intl.DateTimeFormat('en-US', options);
  const parts = formatter.formatToParts(now);

  let hour = 0, minute = 0, day = "";

  parts.forEach(p => {
    if (p.type === 'hour') hour = parseInt(p.value);
    if (p.type === 'minute') minute = parseInt(p.value);
    if (p.type === 'weekday') day = p.value;
  });

  const currentTime = hour + (minute / 60);
  const isSunday = day === "Sun";
const isOpen = !isSunday && currentTime >= 8 && currentTime < 19;
  const statusText = isOpen ? "🟢 Open Now" : "🔴 Closed Now";

  document.getElementById("liveStatus").textContent = statusText;
  document.getElementById("mainStatus").textContent = statusText;
}

updateBusinessStatus();
setInterval(updateBusinessStatus, 60000);
</script>



<?php include BASE_PATH . 'includes/footer.php'; ?>