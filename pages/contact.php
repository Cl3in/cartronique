<?php 
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<!-- CONTACT HERO SECTION -->
<section class="relative py-20 text-white overflow-hidden bg-[#0B1E3A]">

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/75"></div>

  <div class="relative max-w-7xl mx-auto px-6">

    <!-- TITLE -->
    <div class="text-center mb-16">
      <h2 class="text-4xl md:text-5xl font-bold text-red-500 mb-4">
        Get In Touch With Cartronique System
      </h2>
      <p class="max-w-3xl mx-auto text-gray-300 text-lg md:text-xl leading-relaxed">
        Whether you need <a href="<?= BASE_URL ?>pages/services/car-key-replacement.php" class="text-red-400 hover:underline">car key replacement</a>, 
        <a href="<?= BASE_URL ?>pages/services/key-programming.php" class="text-red-400 hover:underline">key programming</a>, 
        <a href="<?= BASE_URL ?>pages/services/ignition-repair.php" class="text-red-400 hover:underline">ignition repair</a>, 
        or any advanced vehicle security solution, we are ready to assist you in Nairobi and across Kenya.
      </p>
    </div>

<!-- SINGLE CONTACT CARD -->
<div class="bg-white rounded-2xl shadow-xl p-6 mb-16 max-w-5xl mx-auto">
  <div class="grid md:grid-cols-3 gap-6 text-center">

    <!-- PHONE -->
    <div class="flex flex-col items-center border-r md:border-r border-gray-200 pr-4">
      <div class="text-3xl mb-2">📞</div>
      <h3 class="text-lg font-semibold text-red-500 mb-1">Phone</h3>
      <p class="text-gray-600 mb-2">Call / Available 24/7</p>
      <a href="tel:+254792776196" class="px-3 py-1 bg-red-500 text-white rounded-full hover:bg-red-600 transition mb-1">+254 792 776 196</a>
      <a href="tel:+254784135485" class="px-3 py-1 bg-red-500 text-white rounded-full hover:bg-red-600 transition">+254 784 135 485</a>
    </div>

    <!-- WHATSAPP -->
    <div class="flex flex-col items-center border-r md:border-r border-gray-200 px-4">
      <div class="text-3xl mb-2">💬</div>
      <h3 class="text-lg font-semibold text-green-600 mb-1">WhatsApp</h3>
      <p class="text-gray-600 mb-2">Quick response to messages</p>
      <a href="https://wa.me/254792776196" target="_blank" class="px-4 py-1 bg-green-600 text-white rounded-full hover:bg-green-500 transition">Message Us</a>
    </div>

    <!-- EMAIL / LOCATION -->
    <div class="flex flex-col items-center pl-4">
      <div class="text-3xl mb-2">✉️</div>
      <h3 class="text-lg font-semibold text-red-500 mb-1">Email & Location</h3>
      <p class="text-gray-600 mb-2">cartroniquesystem@gmail.com</p>
      <a href="mailto:cartroniquesystem@gmail.com" class="px-4 py-1 bg-red-500 text-white rounded-full hover:bg-red-600 transition mb-2">Send Email</a>
      <p class="text-gray-600 text-sm mt-2"> Kesuita Square Kilimani, Denis Pritt Rd, Nairobi, Kenya</p>
      <p class="text-gray-500 text-sm">Mobile service across Kenya</p>
    </div>

  </div>
</div>



<!-- COMPACT DARK BLUE CONTACT FORM -->
<div class="bg-[#0f1e4f]/90 backdrop-blur-lg rounded-xl shadow-xl p-6 max-w-3xl mx-auto">

  <!-- Form Title -->
  <div class="text-center mb-5">
    <h2 class="text-xl font-bold text-white mb-1">Leave Us a Message</h2>
    <p class="text-gray-300 text-sm">We'll respond as soon as possible.</p>
  </div>

  <form method="POST" action="<?= BASE_URL ?>forms/send_contact.php" class="space-y-3">

    <!-- Name & Email -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2.5">
      <input type="text" name="name" required placeholder="Full Name"
             class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition">
      <input type="email" name="email" required placeholder="Email Address"
             class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition">
    </div>

    <!-- Phone & City -->
    <div class="grid grid-cols-1 md:grid-cols-2 gap-2.5">
      <input type="tel" name="phone" required placeholder="Phone Number"
             class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition">
      <input type="text" name="city" required placeholder="City"
             class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition">
    </div>

    <!-- Address -->
    <input type="text" name="address" required placeholder="Street Address"
           class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition">

    <!-- Service Selection -->
    <select id="subjectSelect" name="subject" required
            class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition">
      <option value="" disabled selected>Select Service</option>
      <option value="Car Key Replacement">Car Key Replacement</option>
      <option value="Key Programming">Key Programming</option>
      <option value="Key Cutting">Key Cutting</option>
      <option value="GPS Car Tracking">GPS Car Tracking</option>
      <option value="Car Radio Unlocking & Installation">Car Radio Unlocking & Installation</option>
      <option value="Electronic Steering Lock (ESL)">Electronic Steering Lock (ESL)</option>
      <option value="EGR & DPF Delete">EGR & DPF Delete</option>
      <option value="Car Alarm System">Car Alarm System</option>
      <option value="Ignition Repair">Ignition Repair</option>
      <option value="Other">Other</option>
    </select>

    <!-- Other Subject -->
    <div id="otherSubjectContainer" class="hidden">
      <input type="text" id="otherSubjectInput" name="other_subject" placeholder="Please specify subject"
             class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition">
    </div>

    <!-- Message -->
    <textarea name="message" rows="3" placeholder="Your Message"
              class="w-full border border-gray-600 p-2 rounded-md bg-[#1c2a5a] text-white text-sm placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-red-600 transition"></textarea>

    <!-- reCAPTCHA -->
    <div class="flex justify-center">
      <div class="g-recaptcha" data-sitekey="6Lc4T5MsAAAAAOAFQGLTViwjw7AlKXD19DaU7AH0"></div>
    </div>

    <!-- Small Submit Button -->
    <button type="submit"
            class="w-auto bg-red-600 text-white py-1 px-3 rounded-full hover:bg-red-700 transition font-semibold text-xs shadow-sm hover:shadow-md">
      Send
    </button>

  </form>
</div>


<!-- MAP SECTION -->
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


<!-- JS: Show "Other" input when selected -->
<script>
const subjectSelect = document.getElementById('subjectSelect');
const otherContainer = document.getElementById('otherSubjectContainer');

subjectSelect.addEventListener('change', () => {
  if(subjectSelect.value === 'Other'){
    otherContainer.classList.remove('hidden');
  } else {
    otherContainer.classList.add('hidden');
  }
});
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>