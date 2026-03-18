<x-guest-layout>
  <x-slot name="title">RESOURCES</x-slot>
  <section class="resources-page-section">
    <div class="career-heading">
      <h1>Resources</h1>
      <hr class="career-line">
      <p class="career-subtitle">Stay informed with our latest features, enhancements, and integrations.</p>
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


  <!-- CARD GRID -->
  <div class="resources-box-grid-container">
    @forelse($resources as $index => $resource)
      @php $num = ($index % 8) + 1; @endphp
      <div class="resources-box resources-box-{{ $num }}">
        <div class="resources-box-bg"
          style="@if($resource->image) background-image: url({{ asset($resource->image) }}); @else background-color: #5A5A5A54; @endif">
        </div>
        <div class="resources-box-triangle"></div>
        <div class="resources-box-content">
          <div class="resources-box-heading-container">
            <h2 class="resources-box-heading resources-box-heading-{{ $num }}">{{ $resource->category }}</h2>
            <p @if($num == 4) style="font-size: 12px; line-height: 16px;" @endif>{{ $resource->title }}</p>
          </div>

          @if($resource->description)
            <div class="resources-box-content-container">
              <p class="resources-box-content" @if($num == 4) style="font-size: 16px;" @endif>{{ $resource->description }}</p>
            </div>
          @elseif($num == 4)
            <div class="resources-box-content-container">
              <p class="resources-box-content" style="font-size: 16px;">EXPAND</p>
            </div>
          @endif

          <div class="hover-content">
            <div class="hover-content-top">
              <h2 class="resources-box-heading resources-box-heading-{{ $num }}">
                {{ $resource->hover_category ?? 'CASE STUDY' }}
              </h2>
            </div>
            <div class="hover-content-middle">
              <p>{{ $resource->hover_description }}</p>
            </div>
            <div class="hover-content-bottom">
              <p>EXPAND</p>
            </div>
          </div>
        </div>
      </div>
    @empty
      <div class="col-12 py-5 text-center" style="color: white; width: 100%;">
        <p>No resources found.</p>
      </div>
    @endforelse
  </div>

  <!-- ======================== BLOG SECTION ======================== -->
  <div class="resources-page-blog-container">
    <section class="resources-page-blog-section">
      <h2 class="resources-page-blog-heading">Blogs</h2>

      <button class="nav-button prev-button">←</button>
      <button class="nav-button next-button">→</button>

      <div class="blog-carousel-container">
        <div class="resources-page-blog-carousel" id="blogCarousel">
          <!-- Cards will be dynamically generated -->
        </div>
      </div>
    </section>
  </div>


  <!-- ================ OUR CAPABILITIES SECTION START =============== -->
  <section class="capabilities-section">
    <h2 class="capabilities-title">Our Capabilities</h2>
    <p class="capabilities-subtitle">What We Bring to Every Industry</p>

    <div class="capabilities-grid">

      <!-- Left Column -->
      <div class="capabilities-left">
        <div class="accordion-item active">
          <div class="accordion-header">
            <h3>Refresh and Reposition</h3>
            <span>-</span>
          </div>
          <p class="accordion-description">
            Update your brand and product to maintain relevance, raise a new round of investment, and appeal in a
            dynamic market.
          </p>
          <ul class="accordion-list">
            <li>Audit and positioning</li>
            <li>Brand strategy and personality</li>
            <li>Creative platform</li>
            <li>Visual identity redesign</li>
            <li>Website or app redesign</li>
          </ul>
        </div>

        <div class="accordion-group">
          <button class="accordion-button">Scale up and Expansion <span>+</span></button>
          <button class="accordion-button">Team Extension <span>+</span></button>
          <button class="accordion-button">Prepare for M&A or IPO <span>+</span></button>
        </div>
      </div>

      <!-- Right Column -->
      <div class="capabilities-right">
        <div class="testimonial-header">
          <h4>Open comments</h4>
          <div class="testimonial-pagination">
            <span class="arrow">←</span>
            <span class="page">1 / 4</span>
            <span class="arrow">→</span>
          </div>
        </div>

        <p class="testimonial-quote">
          It's not easy to stand out in the B2B tech space but with Ramotion's creativity, research-based, and
          system-design approach, we elevated our brand and design to new levels.
        </p>

        <div class="testimonial-author">
          <img src="{{ asset('asset/image/bg/hb-profile.png') }}" alt="Manasa Mahunta" />
          <div>
            <p class="author-name">Manasa Mahunta</p>
            <p class="author-meta">2nd June 2024 • 4 min read</p>
          </div>
        </div>
      </div>

    </div>
  </section>
</x-guest-layout>