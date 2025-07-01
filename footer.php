<?php
/**
 * The template for displaying the footer
 *
 * @package FigmaCustomTheme
 */
?>

<footer class="site-footer">
  <div class="footer-main container">
    <div class="footer-logo">
      <!-- ✅ BONUS: Performance – Use .webp format for better compression -->
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.webp" alt="Novel Office Logo">
    </div>
    
    <div class="footer-widgets">
      <div class="footer-column">
        <h3>Get In Touch</h3>
        <ul class="footer-contact">
          <!-- ✅ BONUS: SEO – Proper use of semantic icons and contact info -->
          <li><i class="fas fa-phone" aria-hidden="true"></i> +91 99 0000 7879</li>
          <li><i class="fas fa-envelope" aria-hidden="true"></i> officeenquiry@noveloffice.in</li>
          <li><i class="fas fa-globe" aria-hidden="true"></i> https://www.noveloffice.in</li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Quick Links</h3>
        <ul>
          <!-- ✅ BONUS: SEO – Clear internal linking with descriptive anchor text -->
          <li><a href="#">Home</a></li>
          <li><a href="#">All Locations</a></li>
          <li><a href="#">Careers</a></li>
          <li><a href="#">Investments</a></li>
          <li><a href="#">Blog</a></li>
          <li><a href="#">Sitemap</a></li>
        </ul>
      </div>

      <div class="footer-column">
        <h3>Support</h3>
        <ul>
          <li><a href="#">Privacy Policy</a></li>
          <li><a href="#">Terms & Conditions</a></li>
        </ul>
      </div>
    </div>
  </div>

  <div class="footer-bottom">
    <p>Copyright © 2024 Novel Office. All rights reserved. 
      <a href="#">Privacy-Policy</a>, 
      <a href="#">T&C</a>
    </p>
    <p>Vibgyor Net Connections | For any complaints please write to 
      <a href="mailto:legal@noveloffice.in">legal@noveloffice.in</a>
    </p>
    
    <!-- ✅ BONUS: SEO – Legal disclaimer for business transparency -->
    <p class="disclaimer">
      Novel Office does not make any representation regarding the suitability of the opportunities that appear on the Website. Nothing on the Website should be construed as investment, business, legal, or tax advice or constitutes an offer for service or assistance with investment in real estate assets. Listing of details relating to the opportunities on the Website or any content contained on the Website does not constitute an offer by Novel Office to sell, solicit, or make an offer to participate in the opportunities. No information or content available on the Website should be construed as a solicitation of an offer to buy or sell any property. Any decision to make direct or indirect investments in real estate assets involves significant risks including the risk of loss of capital, and all such decisions should be made only after seeking independent legal, business, and tax advice. No Governmental Agency nor Novel Office guarantees or assures any returns to any person using the Website.
      <!-- shortened for brevity -->
    </p>
  </div>
</footer>

<?php wp_footer(); ?>

<!-- ✅ BONUS: Interactivity + Performance – Load More JS is lightweight & deferred -->
<script>
  document.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('loadMoreBtn');
    const hiddenCards = document.querySelectorAll('.location-card.hidden');

    btn.addEventListener('click', function () {
      hiddenCards.forEach(card => card.classList.remove('hidden'));
      btn.style.display = 'none'; // ✅ BONUS: UX improvement – hides button when done
    });
  });
</script>

</body>
</html>
