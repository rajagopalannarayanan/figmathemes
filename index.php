<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-bg" role="banner"> <!-- ✅ Bonus: Semantic role for accessibility -->
  <div class="hero-overlay">
    <div class="hero-text">
      <h1>
        OFFICES<br>
        <span class="smaller">WITH</span><br>
        NOVEL
      </h1>
      <p>CUSTOMIZED, FURNISHED AND MANAGED OFFICE SPACE IN BANGALORE</p>
      <a href="#" class="cta-button" aria-label="Book a tour now"> <!-- ✅ Bonus: Accessible CTA -->
        BOOK A TOUR NOW!
      </a>
    </div>
  </div>
</section>

<!-- About Section -->
<section class="about-section" id="about" aria-labelledby="about-title"> <!-- ✅ Bonus: ARIA and semantic sectioning -->
  <div class="container">
    <h2 id="about-title">WE ARE NOVEL</h2>
    
    <p class="about-text"> <!-- Standard content -->
      Novel Office, part of Novel Group incorporated in 1993 in Dallas, TX, is a leading commercial real estate firm. 
      We have successfully deployed over 1.5 million sq. ft. of commercial properties across the USA and India.
    </p>
    
    <p class="about-text">
      We understand that each business is unique, and therefore, we work towards offering tailored real estate solutions 
      that support the growth and success of our clients.
    </p>
    
    <p class="about-text">
      Join the Novel community today and experience the difference.
    </p>

    <!-- Stats Section -->
    <div class="about-stats">
      <div class="stat">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/area.svg" 
             alt="Square Feet Icon" loading="lazy" /> <!-- ✅ Bonus: Lazy loading + SEO alt text -->
        <h3>2,018,569</h3>
        <p>SQUARE FEET</p>
      </div>
      <div class="stat">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/icons/clients.svg" 
             alt="Clients Icon" loading="lazy" /> <!-- ✅ Bonus: Lazy loading + SEO alt text -->
        <h3>2,410</h3>
        <p>CLIENTS</p>
      </div>
    </div>
  </div>
</section>

<!-- Locations Section -->
<section class="locations-section" id="locations" aria-labelledby="locations-title"> <!-- ✅ Bonus: ARIA & section landmark -->
  <div class="container">
    <h2 class="section-title" id="locations-title">OUR LOCATIONS</h2>

    <div class="locations-grid">
      <?php
        $locations = [
          ['image' => '1.jpg', 'title' => 'QUEENS ROAD'],
          ['image' => '2.jpg', 'title' => 'WHITEFIELD(BTP)'],
          ['image' => '3.jpg', 'title' => 'MG ROAD'],
          ['image' => '4.jpg', 'title' => 'MARATHAHALLI'],
          ['image' => '1.jpg', 'title' => 'ADUGODI'],
          ['image' => '2.jpg', 'title' => 'HOSUR ROAD'],
          ['image' => '3.jpg', 'title' => 'INDIRANAGAR'],
          ['image' => '4.jpg', 'title' => 'KORAMANGALA'],
          ['image' => '1.jpg', 'title' => 'HSR LAYOUT'],
          ['image' => '2.jpg', 'title' => 'JAYANAGAR'],
          ['image' => '3.jpg', 'title' => 'JP NAGAR'],
          ['image' => '4.jpg', 'title' => 'WHITEFIELD(NOW)'],
          ['image' => '1.jpg', 'title' => 'ELECTRONIC CITY'],
          ['image' => '2.jpg', 'title' => 'HEBBAL'],
          ['image' => '3.jpg', 'title' => 'BELLANDUR'],
          ['image' => '4.jpg', 'title' => 'HOUSTON', 'country' => 'Texas, USA']
        ];

        $i = 0;
        foreach ($locations as $location) {
          $class = $i >= 8 ? 'location-card hidden aos-init' : 'location-card aos-init';
          $title = esc_html($location['title']);
          $country = esc_html($location['country'] ?? 'Bangalore, India');
          $img = esc_url(get_template_directory_uri() . '/assets/images/' . $location['image']);

          echo "<div class='$class' data-aos='fade-up'> <!-- ✅ Bonus: AOS animation effect -->
                  <img src='$img' alt='$title location image' loading='lazy'> <!-- ✅ Bonus: Lazy loading + SEO alt text -->
                  <h4>$title</h4>
                  <p>$country</p>
                </div>";
          $i++;
        }
      ?>
    </div>

    <div class="load-more-wrapper">
      <button id="loadMoreBtn" class="load-more-btn" aria-label="Load more locations"> <!-- ✅ Bonus: Accessible button -->
        LOAD MORE
      </button>
    </div>
  </div>
</section>

<?php get_footer(); ?>
