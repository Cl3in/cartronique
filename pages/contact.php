<?php 
require_once __DIR__ . '/../includes/config.php';
include BASE_PATH . 'includes/header.php';
?>

<section class="relative py-20 text-white overflow-hidden">

  <!-- BACKGROUND IMAGE -->
  <div class="absolute inset-0">
      <img src="<?= BASE_URL ?>assets/images/flatbed7.webp"
           alt="Freight Truck"
           class="w-full h-full object-cover blur-sm scale-110">
  </div>

  <!-- DARK OVERLAY -->
  <div class="absolute inset-0 bg-black/75"></div>

  <div class="relative max-w-6xl mx-auto px-3 sm:px-6">

    <!-- SUCCESS MESSAGE -->
    <?php if(isset($_GET['contact']) && $_GET['contact'] == "success"): ?>
      <div class="bg-green-600 text-white p-4 rounded-lg mb-10 text-center font-semibold shadow-lg">
        ✅ Your message has been sent successfully.
      </div>
    <?php endif; ?>

    <!-- ERROR MESSAGE -->
    <?php if(isset($_GET['contact']) && $_GET['contact'] == "error"): ?>
      <div class="bg-red-600 text-white p-4 rounded-lg mb-10 text-center font-semibold shadow-lg">
        ⚠️ Something went wrong. Please try again.
      </div>
    <?php endif; ?>

    <!-- TITLE -->
    <div class="text-center mb-16">
      <h2 class="text-4xl font-bold text-red-600 mb-4">
        Get In Touch
      </h2>

      <p class="max-w-2xl mx-auto text-gray-300 text-lg leading-relaxed">
        We’d love to hear from you. Whether you are a driver, partner
        or customer. Parrish Family Trucking is committed to professional,
        responsive and reliable communication.
      </p>
    </div>

    <!-- CONTACT INFO AND FORM GRID -->
    <div class="grid md:grid-cols-2 gap-16">

      <!-- CONTACT INFO BOX -->
      <div class="bg-black/60 backdrop-blur-sm p-6 rounded-xl shadow-xl border border-gray-800 h-fit mx-2 sm:mx-0">
        <h3 class="text-xl font-bold text-red-600 mb-6">
          Contact Information
        </h3>

        <div class="space-y-5 text-gray-200 text-base">

          <!-- Phone -->
          <p class="flex items-center gap-3">
            <i class="fa-solid fa-phone text-red-500"></i>
            <span><strong>Phone:</strong> 1-423-680-1299</span>
          </p>

          <!-- Address -->
          <p class="flex items-start gap-3">
            <i class="fa-solid fa-location-dot text-red-500 mt-1"></i>
            <span>
              <strong>Mail Address:</strong><br>
              4295 Cromwell Rd Ste 418, Chattanooga, TN
            </span>
          </p>

          <!-- Email -->
          <p class="flex items-center gap-3">
            <i class="fa-solid fa-envelope text-red-500"></i>
            <a href="mailto:info@parrishft.com?subject=Inquiry from Website"
               class="hover:text-red-400 transition font-medium">
              info@parrishft.com
            </a>
          </p>

          <!-- Social -->
          <div class="flex items-center gap-4 pt-3">
            <span class="text-xs text-gray-400 uppercase tracking-wider">Follow Us</span>

            <a href="https://www.facebook.com/profile.php?id=61560985590384"
               target="_blank"
               class="text-blue-500 hover:text-blue-400 transition text-lg">
              <i class="fa-brands fa-facebook"></i>
            </a>

            <a href="https://www.instagram.com/parrishfamilytrucking/"
               target="_blank"
               class="text-pink-500 hover:text-pink-400 transition text-lg">
              <i class="fa-brands fa-instagram"></i>
            </a>
          </div>

        </div>
      </div>

      <!-- CONTACT FORM -->
      <div class="bg-black/70 backdrop-blur-sm p-10 rounded-2xl shadow-2xl border border-gray-800 mx-2 sm:mx-0">

        <form method="POST" action="<?= BASE_URL ?>forms/send_contact.php" class="space-y-6">

          <input type="text" name="name" required placeholder="Full Name"
                 class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">
          <input type="text" name="website" style="display:none">

          <input type="email" name="email" required placeholder="Email Address"
                 class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

          <input type="tel" name="phone" required placeholder="Phone Number"
                 class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

          <select id="subjectSelect" name="subject" required
                  class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

            <option value="" disabled selected>Select Subject</option>
            <option value="Load Booking">Freight Booking</option>
            <option value="General Inquiry">General Inquiry</option>
            <option value="Driver Application">Driver Application</option>
            <option value="Customer Support">Customer Support</option>
            <option value="Partnership Opportunity">Partnership Opportunity</option>
            <option value="Other">Other</option>

          </select>

          <div id="otherSubjectContainer" class="hidden">
            <input type="text"
                   id="otherSubjectInput"
                   name="other_subject"
                   placeholder="Please specify subject"
                   class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">
          </div>

          <input type="text" name="address" required placeholder="Street Address"
                 class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

          <div class="grid grid-cols-1 md:grid-cols-3 gap-4 items-start">

            <input type="text" name="city" required placeholder="City"
                   class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

            <input type="text" name="state" required placeholder="State"
                   class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

            <input type="text" name="zip" required placeholder="Zip Code"
                   class="border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600">

          </div>

          <textarea name="message" rows="5" placeholder="Your Message"
                    class="w-full border border-gray-700 p-4 rounded-lg bg-gray-900 text-white focus:outline-none focus:border-red-600"></textarea>

          <!-- RECAPTCHA -->
          <div class="flex justify-center">
              <div class="g-recaptcha" data-sitekey="6Lc4T5MsAAAAAOAFQGLTViwjw7AlKXD19DaU7AH0"></div>
          </div>

          <button type="submit"
                  class="w-full bg-red-600 text-white py-2 rounded-full hover:bg-red-700 transition font-bold text-base">
            Send Message
          </button>

        </form>

      </div>

    </div>

    <!-- OPENING HOURS -->
    <div class="max-w-4xl mx-auto px-4 sm:px-6 text-center mt-16">

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

<script>
const subjectSelect = document.getElementById('subjectSelect');
const otherSubjectContainer = document.getElementById('otherSubjectContainer');
const otherSubjectInput = document.getElementById('otherSubjectInput');

subjectSelect.addEventListener('change', function(){
  if(this.value === 'Other'){
    otherSubjectContainer.classList.remove('hidden');
    otherSubjectInput.setAttribute('required','required');
  } else {
    otherSubjectContainer.classList.add('hidden');
    otherSubjectInput.removeAttribute('required');
  }
});
</script>

<?php include BASE_PATH . 'includes/footer.php'; ?>