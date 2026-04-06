<?php
require_once __DIR__ . '/includes/config.php';

// FIXED include
require_once BASE_PATH . 'includes/header.php';
?>

<!-- HERO SLIDER -->
<section class="bg-white pt-6 pb-10">
  <div class="max-w-6xl mx-auto px-8">
    <div class="relative rounded-2xl overflow-hidden shadow-2xl h-[450px]">

      <img id="slideA"
        class="absolute inset-0 w-full h-full object-cover object-center scale-110 transition-all duration-[2000ms] ease-linear"
        alt="Automotive Locksmith Service Nairobi">

      <div class="absolute inset-0 bg-black/40"></div>

      <div class="absolute inset-0 flex flex-col justify-center items-start p-10 text-white">
        <h1 id="slideTitle"
          class="text-4xl md:text-5xl font-bold text-red-500 drop-shadow-lg mb-4">
        </h1>

        <p id="slideDesc"
          class="max-w-xl text-lg font-medium leading-relaxed drop-shadow-md">
        </p>
      </div>

      <!-- NAV -->
      <button id="prevSlide" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/60 hover:bg-red-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-xl transition">
        <i class="fa-solid fa-chevron-left"></i>
      </button>

      <button id="nextSlide" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/60 hover:bg-red-600 text-white w-12 h-12 rounded-full flex items-center justify-center shadow-xl transition">
        <i class="fa-solid fa-chevron-right"></i>
      </button>

    </div>
  </div>
</section>

<!-- SERVICES -->
<section class="py-16 bg-[#0B1E3A] text-black">
  <div class="max-w-7xl mx-auto px-6">

    <!-- SEO IMPROVED HEADING -->
    <h1 class="text-4xl sm:text-5xl font-bold text-center mb-4 text-red-500">
      Automotive Locksmith Services in Nairobi and Across Kenya
    </h1>

    <!-- SEO IMPROVED DESCRIPTION -->
    <p class="text-center text-gray-300 max-w-2xl mx-auto mb-12">
      Professional car key replacement, key programming, ignition repair, GPS tracking, emergency lockout services, and advanced vehicle security solutions in Nairobi and across Kenya.
    </p>

    <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">

      <!-- 1 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/vw.jpg" alt="Car Key Replacement Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">Car Key Replacement</h2>
        <p class="text-gray-700 mb-3">Lost your car key? Fast mobile replacement services anywhere in Nairobi.</p>
        <a href="<?= BASE_URL ?>services/key-replacement" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Replace Key 🔑</a>
      </div>

      <!-- 2 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/key-programming.jpg" alt="Car Key Programming Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">Key Programming</h2>
        <p class="text-gray-700 mb-3">Professional ECU, immobilizer, and smart key programming services.</p>
        <a href="<?= BASE_URL ?>services/key-programming" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Program Key 💻</a>
      </div>

      <!-- 3 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/key-cutting.jpg" alt="Car Key Cutting Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">Key Cutting</h2>
        <p class="text-gray-700 mb-3">Accurate key duplication for all car brands and models.</p>
        <a href="<?= BASE_URL ?>services/key-cutting" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Duplicate Key 🔑</a>
      </div>

      <!-- 4 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/GPS.webp" alt="GPS Car Tracking Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">GPS Car Tracking</h2>
        <p class="text-gray-700 mb-3">Real-time GPS tracking systems for vehicle security and monitoring.</p>
        <a href="<?= BASE_URL ?>services/gps-car-tracking" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Install GPS 📍</a>
      </div>

      <!-- 5 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/car-radio.jpg" alt="Car Radio Installation Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">Car Radio Unlocking & Installation</h2>
        <p class="text-gray-700 mb-3">Unlock, repair, or install modern car radio and infotainment systems.</p>
        <a href="<?= BASE_URL ?>services/car-radio-installation" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Fix Radio 📻</a>
      </div>

      <!-- 6 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/MercedesESL.webp" alt="Electronic Steering Lock Repair Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">Electronic Steering Lock (ESL)</h2>
        <p class="text-gray-700 mb-3">Repair and replacement of faulty electronic steering lock systems.</p>
        <a href="<?= BASE_URL ?>services/electronic-steering-lock" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Fix ESL 🔒</a>
      </div>

      <!-- 7 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/dpf-delete.jpg" alt="EGR and DPF Delete Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">EGR & DPF Delete</h2>
        <p class="text-gray-700 mb-3">Improve engine performance with professional EGR and DPF delete services.</p>
        <a href="<?= BASE_URL ?>services/egr-dpf-delete" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Optimize Engine ⚙️</a>
      </div>

      <!-- 8 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/car-alarm.jpg" alt="Car Alarm Installation Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">Car Alarm System</h2>
        <p class="text-gray-700 mb-3">Advanced anti-theft alarm systems installation for vehicle protection.</p>
        <a href="<?= BASE_URL ?>services/car-alarm-system" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Install Alarm 🚨</a>
      </div>

      <!-- 9 -->
      <div class="bg-white border border-red-500 rounded-2xl shadow-lg p-6 hover:shadow-2xl transition">
        <div class="w-full h-56 bg-gray-100 rounded-xl mb-4 flex items-center justify-center">
          <img src="<?= BASE_URL ?>assets/images/ignition-repair.jpg" alt="Ignition Repair Nairobi" class="max-h-full max-w-full object-contain">
        </div>
        <h2 class="text-2xl font-bold text-red-500 mb-2">Ignition Repair</h2>
        <p class="text-gray-700 mb-3">Fix ignition switch problems and restore reliable vehicle starting.</p>
        <a href="<?= BASE_URL ?>services/ignition-repair" class="px-4 py-2 bg-red-600 text-white rounded-full hover:bg-black">Fix Ignition 🔧</a>
      </div>

    </div>
  </div>
</section>

<!-- SPLIT CTA -->
<section class="py-10 mx-4 sm:mx-6">
  <div class="max-w-5xl mx-auto rounded-2xl overflow-hidden shadow-lg grid md:grid-cols-2">
    
    <!-- LEFT: TEXT -->
    <div class="bg-gradient-to-r from-red-600 to-red-700 text-white p-8 flex flex-col justify-center">
      
      <h2 class="text-2xl sm:text-3xl font-bold mb-3">
        Emergency Lockout Services
      </h2>

      <p class="text-sm sm:text-base mb-5 text-white/90">
        Locked out of your car? We provide fast and reliable emergency lockout services across Nairobi and its surrounding. Available 24/7 to get you back on the road quickly and safely.
      </p>

      <div class="flex flex-col sm:flex-row gap-3">
        
        <a href="tel:+254792776196"
           class="px-5 py-2 bg-black rounded-full font-semibold text-sm hover:bg-white hover:text-red-600 transition text-center">
           📞 Call Now
        </a>

        <a href="https://wa.me/254792776196"
           class="px-5 py-2 bg-green-600 rounded-full font-semibold text-sm hover:bg-white hover:text-green-600 transition text-center">
           💬 WhatsApp
        </a>

      </div>
    </div>

    <!-- RIGHT: IMAGE PLACEHOLDER -->
    <div class="h-64 md:h-auto bg-gray-100 flex items-center justify-center">
      <img src="<?= BASE_URL ?>assets/images/emergency-lockout.jpg"
           alt="Emergency Lockout Service"
           class="w-full h-full object-cover">
    </div>

  </div>
</section>

<section class="mt-12 max-w-5xl mx-auto px-4">
  <!-- Section Title -->
  <div class="text-center mb-4">
    <h3 class="text-xl font-bold text-[#1E3A8A]">Our Location</h3>
    <p class="text-gray-500 text-sm">Visit us in Kilimani, Nairobi</p>
  </div>

  <!-- Map Container -->
  <div class="relative rounded-xl overflow-hidden shadow-lg">
    <!-- Google Map -->
    <iframe 
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.457108234331!2d36.80477637495077!3d-1.2860614358341854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10e1f14c1f4d%3A0xe3a2c9a2f1c44cf6!2sKesuita%20Square%2C%20Kilimani%2C%20Nairobi!5e0!3m2!1sen!2ske!4v1689971234567!5m2!1sen!2ske" 
      class="w-full h-60 md:h-72" 
      style="border:0;" 
      allowfullscreen="" 
      loading="lazy" 
      referrerpolicy="no-referrer-when-downgrade">
    </iframe>

    <!-- Red Location Icon -->
    <div class="absolute top-1/2 left-1/2 -translate-x-1/2 -translate-y-full">
      <i class="fa-solid fa-map-marker-alt text-red-600 text-3xl drop-shadow-lg"></i>
    </div>
  </div>

  <!-- Open in Google Maps Button -->
       <div class="text-center mt-3">
        <a href="https://www.google.com/maps?q=Kesuita+Square,+Kilimani,+Nairobi,+Kenya"
           target="_blank"
           class="inline-block px-4 py-2 bg-black text-white text-sm rounded-full hover:bg-red-600 transition">
          Open in Google Maps
        </a>
      </div>
</section>
<section class="py-14 bg-[#0B1E3A] text-white">
  <div class="max-w-7xl mx-auto px-6 text-center">

    <!-- HEADER -->
    <h2 class="text-3xl sm:text-4xl font-bold mb-4">
      ⭐ Trusted by Clients Across Nairobi & Kenya
    </h2>

    <p class="text-gray-300 max-w-2xl mx-auto mb-10">
      Real feedback from customers who have used our automotive locksmith services across Kenya.
    </p>

    <!-- CAROUSEL WRAPPER -->
    <div class="relative overflow-hidden">

      <div id="reviewCarousel" class="flex transition-transform duration-700">

        <!-- CARD 1 -->
        <div class="min-w-full px-4">
          <div class="bg-white text-black p-6 rounded-2xl shadow-lg max-w-xl mx-auto">

            <div class="flex items-center justify-center gap-2 mb-3">
              <span class="text-green-600 font-bold text-sm flex items-center gap-1">
                ✔ Verified
              </span>
            </div>

            <div class="flex justify-center text-yellow-400 text-lg animate-pulse mb-3">
              ⭐⭐⭐⭐⭐
            </div>

            <p class="text-gray-700 mb-4">
              “Fast and professional service! They came to my location in Weslands and replaced my lost key within 30 minutes.”
            </p>

            <h4 class="font-bold">— David K., Nairobi</h4>
          </div>
        </div>

        <!-- CARD 2 -->
        <div class="min-w-full px-4">
          <div class="bg-white text-black p-6 rounded-2xl shadow-lg max-w-xl mx-auto">

            <div class="flex items-center justify-center gap-2 mb-3">
              <span class="text-green-600 font-bold text-sm flex items-center gap-1">
                ✔ Verified
              </span>
            </div>

            <div class="flex justify-center text-yellow-400 text-lg animate-pulse mb-3">
              ⭐⭐⭐⭐⭐
            </div>

            <p class="text-gray-700 mb-4">
              “Excellent key programming service. Very affordable and highly professional.”
            </p>

            <h4 class="font-bold">— Sarah W., Mombasa</h4>
          </div>
        </div>

        <!-- CARD 3 -->
        <div class="min-w-full px-4">
          <div class="bg-white text-black p-6 rounded-2xl shadow-lg max-w-xl mx-auto">

            <div class="flex items-center justify-center gap-2 mb-3">
              <span class="text-green-600 font-bold text-sm flex items-center gap-1">
                ✔ Verified
              </span>
            </div>

            <div class="flex justify-center text-yellow-400 text-lg animate-pulse mb-3">
              ⭐⭐⭐⭐⭐
            </div>

            <p class="text-gray-700 mb-4">
              “Locked out in Kitengela and they arrived quickly. Great service across Kenya.”
            </p>

            <h4 class="font-bold">— Brian M., Kajiado</h4>
          </div>
        </div>

      </div>
    </div>

  </div>
</section>


<section id="statsSection" class="py-8 bg-gray-100">

  <div class="max-w-6xl mx-auto px-6">

    <div class="bg-white shadow-lg rounded-xl p-6 grid grid-cols-1 md:grid-cols-3 text-center gap-6">

      <!-- Happy Clients -->
      <div>
        <h3 class="text-3xl font-bold text-red-600 counter" data-target="3430">0</h3>
        <p class="text-gray-600 text-sm mt-1">Happy Clients</p>
      </div>

      <!-- Cars Serviced -->
      <div>
        <h3 class="text-3xl font-bold text-red-600 counter" data-target="8980">0</h3>
        <p class="text-gray-600 text-sm mt-1">Cars Serviced</p>
      </div>

      <!-- Experience -->
      <div>
        <h3 class="text-3xl font-bold text-red-600 counter" data-target="10">0</h3>
        <p class="text-gray-600 text-sm mt-1">Years of Experience</p>
      </div>

    </div>

  </div>

</section>


<script>

const counters = document.querySelectorAll('.counter');
let started = false;

function startCounters(){

  counters.forEach(counter => {

    const updateCounter = () => {

      const target = +counter.getAttribute('data-target');
      const current = +counter.innerText;

      const increment = target / 200;

      if(current < target){
        counter.innerText = Math.ceil(current + increment);
        setTimeout(updateCounter, 10);
      } else {
        counter.innerText = target.toLocaleString() + "+";
      }

    };

    updateCounter();

  });

}

const observer = new IntersectionObserver(entries => {

  entries.forEach(entry => {

    if(entry.isIntersecting && !started){
      startCounters();
      started = true;
    }

  });

},{ threshold: 0.5 });

observer.observe(document.querySelector("#statsSection"));

</script>

<!-- CAROUSEL SCRIPT -->
<script>
const carousel = document.getElementById("reviewCarousel");
let reviewIndex = 0;

setInterval(() => {
  reviewIndex = (reviewIndex + 1) % 3;
  carousel.style.transform = `translateX(-${reviewIndex * 100}%)`;
}, 5000);
</script>
<!-- SLIDER SCRIPT -->
<script>
document.addEventListener("DOMContentLoaded", function(){

let slideIndex = 0;

const slides = [
    {
      img: "<?= BASE_URL ?>assets/images/key-programming.jpg",
      title: "Key Programming",
      desc: "Lost your car key? Our mobile automotive locksmith team can quickly replace lost or damaged car keys for most vehicle models anywhere in Nairobi and surrounding areas."
    },
    {
      img: "<?= BASE_URL ?>assets/images/key-replacement.jpg",
      title: "Lost Car Key Replacement",
      desc: "Professional car key programming for modern vehicles using advanced diagnostic tools including ECU pairing, immobilizer programming, and smart key setup."
    },
    {
      img: "<?= BASE_URL ?>assets/images/key-cutting.jpg",
      title: "Key Cutting",
      desc: "High-precision car key cutting and duplication services for most vehicle brands including Toyota, Nissan, Subaru, Mazda, BMW and Mercedes-Benz."
    },
    {
      img: "<?= BASE_URL ?>assets/images/gps-car-tracker.jpg",
      title: "GPS Car Tracking",
      desc: "Secure your vehicle with advanced GPS tracking systems offering real-time location monitoring, anti-theft alerts, and remote vehicle tracking."
    },
    {
      img: "<?= BASE_URL ?>assets/images/car-radio.jpg",
      title: "Car Radio Unlocking & Installation",
      desc: "Professional car radio unlocking, installation and system upgrades to restore entertainment and functionality in your vehicle."
    },
    {
      img: "<?= BASE_URL ?>assets/images/MercedesESL.webp",
      title: "Electronic Steering Lock (ESL)",
      desc: "Expert repair and replacement of Electronic Steering Lock systems for modern vehicles to restore safe and secure ignition operation."
    },
    {
      img: "<?= BASE_URL ?>assets/images/dpf-delete.jpg",
      title: "EGR & DPF Delete",
      desc: "Improve engine efficiency and performance with professional EGR and DPF delete services for compatible diesel vehicles."
    },
    {
      img: "<?= BASE_URL ?>assets/images/car-alarm.jpg",
      title: "Car Alarm System",
      desc: "Protect your vehicle with advanced car alarm system installation including anti-theft protection and smart security features."
    },
    {
      img: "<?= BASE_URL ?>assets/images/ignition-repair.jpg",
      title: "Ignition Repair",
      desc: "Reliable ignition repair and ignition switch replacement services for vehicles experiencing starting or key turning problems."
    }
  ];


  let index = 0;
  const slideImg = document.getElementById("slideA");
  const title = document.getElementById("slideTitle");
  const desc = document.getElementById("slideDesc");

  function showSlide(i){
    slideImg.style.opacity = 0;
    setTimeout(() => {
      slideImg.src = slides[i].img;
      title.textContent = slides[i].title;
      desc.textContent = slides[i].desc;
      slideImg.style.opacity = 1;
    }, 300);
  }

  function nextSlide(){
    index = (index + 1) % slides.length;
    showSlide(index);
  }

  document.getElementById("nextSlide").onclick = nextSlide;
  document.getElementById("prevSlide").onclick = () => {
    index = (index - 1 + slides.length) % slides.length;
    showSlide(index);
  };

  setInterval(nextSlide, 5000);
  showSlide(index);

});
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>