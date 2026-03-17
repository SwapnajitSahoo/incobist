<x-guest-layout>
        <x-slot name="title">CAREER</x-slot>
         <!-- =========== career hero section start ========= -->
  <section class="career-hero">
    <div class="career-heading">
      <h1>Find your future</h1>
      <hr class="career-line">
      <p class="career-subtitle">This is a place to grow, learn and connect. Everything that <br>makes you who you are
        is welcome here.</p>
    </div>
    <div class="social-icons">
      <a href="https://www.linkedin.com/company/incobist/?viewAsMember=true"><i class="fab fa-linkedin-in"></i></a>
      <a href="https://www.twitter.com/incobist2001"><i class="fab fa-twitter"></i></a>
      <a href="https://www.instagram.com/incobist"><i class="fab fa-instagram"></i></a>
      <a href="https://www.facebook.com/incobist"><i class="fab fa-facebook-f"></i></a>
      <a href="https://wa.me/9090138408" target="_blank"><i class="fab fa-whatsapp"></i></a>
      <a href="tel: +91 6744618289"><i class="fas fa-phone"></i></a>
    </div>
    <div class="career-hero-shadow-overlay"></div>
  </section>

  <!-- ============ Build career SECTION START ============ -->
  <div class="build-career">
    <h1>"Build Your AI Career with Incobist: Innovate, Create, Grow"</h1>
    <hr class="high-tech-line">
    <p>What's next for you? Smarter AI systems, a more empowered you, or a vibrant community of tech trailblazers? At
      Incobist, we offer more than a destination—we offer a transformative journey fueled by innovation.</p>
  </div>

  <!-- ============ career Search SECTION START ============ -->

  <div class="career-search-container">
    <div class="career-search-group">
      <div class="career-input-wrapper">
        <span class="career-search-icon"><i class="fas fa-location-dot"></i></span>
        <select>
          <option value="" disabled selected hidden>Search the location</option>
          <option>Bhubaneswar</option>
          <option>Jajpur</option>
        </select>
      </div>

      <div class="career-input-wrapper">
        <span class="career-search-icon"><i class="fas fa-user"></i></span>
        <select>
          <option value="" disabled selected hidden>Find Job categories</option>
          <option>Frontend</option>
          <option>Backend</option>
          <option>Management</option>
          <option>Sales</option>
        </select>
      </div>

      <div class="career-input-wrapper">
        <span class="career-search-icon"><i class="fas fa-briefcase"></i></span>
        <select>
          <option value="" disabled selected hidden>Find Job Title</option>
          <option>React Developer</option>
          <option>Node.js Developer</option>
          <option>Account Manager Partner Services</option>
          <option>Senior UI/UX Designer</option>
          <option>Digital Marketing & Analytics</option>
        </select>
      </div>

      <button class="career-search-button">Search</button>
    </div>
  </div>


  <div class="career-container">
    <!-- Header -->
    <h1 class="career-title">Search Results</h1>
    <hr class="high-tech-line">
    <!-- Breadcrumb and Filter -->
    <div class="career-subheader">
      <div class="career-breadcrumb">Home &gt; Footer &gt; <span>Career</span></div>
      <div class="career-filter">
        <button class="career-filter-btn">Recent Posted <i class="fas fa-chevron-down"></i></button>
      </div>
    </div>
    <!-- Job Card 1-->
	<?php foreach($list as $row){ ?>
    <div class="job-card">
      <div class="job-card-header">
        <span><?=$row->location?></span>
        <span class="job-post-date">Posted on <?=$row->date?></span>
      </div>
      <hr class="job-card-divider" />
      <div class="job-card-body-flex">
        <!-- LEFT: Job Info -->
        <div class="job-info-left">
          <h2 class="job-title"><?=$row->details?></h2>
          <p class="job-category"><strong>Categories : </strong><?=$row->category?></p>
          <span class="job-tag"><?=$row->department?></span>
        </div>
        <!-- RIGHT: Apply Section -->
        <div class="apply-section">
          <a href="result.html">
            <button class="apply-btn">Apply Now</button></a>
          <p class="positions-left">Only <?=$row->position_left?> Positions are left</p>
        </div>
      </div>
    </div>
	<?php }?>
    <div class="career-more-result">
      <button>More Results</button>
    </div>
  </div>
</x-guest-layout>