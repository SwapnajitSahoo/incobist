<x-guest-layout>
  <x-slot name="title">INSIGHT AND BLOGS</x-slot>
  <section class="insight-blogs-page-section">
    <div class="career-heading">
      <h1>Virtual Reality for an Immersive Experience</h1>
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


  <!-- < =========== HIGHLIGHTS SECTION START ============== > -->
  <div class="high-lights-section">
    @php
      $listBlogs = $blogs->where('slug', '!=', 'strategy-quote');
      $strategyQuote = $blogs->where('slug', 'strategy-quote')->first();
    @endphp

    @foreach($listBlogs as $index => $blog)
      @if($index % 2 == 0)
        {{-- Layout: Image Left (High Lights Style) --}}
        <div class="high-lights-section-grid mb-5">
          <div class="high-lights-section-grid-img">
            <img src="{{ $blog->image ? asset($blog->image) : asset('asset/image/bg/blog-highlights.png') }}"
              alt="{{ $blog->name }}">
          </div>
          <div class="high-lights-section-heading">
            <h5>{{ $blog->name }}</h5>
            {!! $blog->content !!}
          </div>
        </div>
      @else
        {{-- Layout: Image Right (Other Domain Style) --}}
        <h2>{{ $blog->name }}</h2>
        <hr>
        <div class="other-domain-section-grid mb-5">
          <div class="other-domain-section-heading">
            {!! $blog->content !!}
          </div>
          <div class="other-domain-section-grid-img">
            <img src="{{ $blog->image ? asset($blog->image) : asset('asset/image/bg/blog-other-domain.png') }}"
              alt="{{ $blog->name }}" />
          </div>
        </div>
      @endif

      @if(!$loop->last)
        <div class="my-5" style="border-bottom: 1px solid #333;"></div>
      @endif
    @endforeach

    <div class="effective-strategy-para mt-5">
      <p>
        “ One of the most <span>effective strategies</span> for reaching clients and selling wedding jewelry is this
        idea. Every day, more than <br><span>3,000 clients</span> <br> visit our Company, which give them a distinctive
        and striking opportunity to view our brand. ”
      </p>
    </div>
  </div>
</x-guest-layout>