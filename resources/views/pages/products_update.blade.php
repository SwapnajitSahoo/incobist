<x-guest-layout>
  <x-slot name="title">PRODUCTS UPDATE</x-slot>

  <section class="product-hero">
    <div class="career-heading">
      <h1>Product Updates</h1>
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

  <!-- ============ Latest Releases SECTION START ============ -->
  <section class="latest-release">
    <hr>
    @foreach($products as $index => $product)
      <div class="latest-grid {{ $index % 2 == 1 ? 'best-release' : '' }}">
        @if($index % 2 == 0)
          {{-- Layout: Image Left --}}
          <div class="latest-grid-img">
            <img src="{{ $product->image ? asset($product->image) : asset('asset/image/bg/smart-dashboard.png') }}"
              alt="{{ $product->name }}" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px;">
          </div>
          <div class="latest-heading smart-dashboard">
            <h5>{{ $product->name }}</h5>
            <h1>{{ $product->heading }}</h1>
            <h6>{!! $product->content !!}</h6>
          </div>
        @else
          {{-- Layout: Image Right --}}
          <div class="latest-heading targeted-campaign">
            <h5>{{ $product->name }}</h5>
            <h1>{{ $product->heading }}</h1>
            <h6>{!! $product->content !!}</h6>
          </div>
          <div class="latest-grid-img">
            <img src="{{ $product->image ? asset($product->image) : asset('asset/image/bg/targeted-campaign.png') }}"
              alt="{{ $product->name }}" style="width: 100%; height: 350px; object-fit: cover; border-radius: 8px;">
          </div>
        @endif
      </div>
      @if(!$loop->last)
        <hr>
      @endif
    @endforeach
    <hr>
  </section>

  <!-- ==================== Coming Soon section start ===================== -->

  <section class="coming-soon">
    <div class="coming-heading">
      <h1>Coming Soon</h1>
      <div class="coming-soon-container">
        <!-- First Image -->
        <div class="coming-soon-tech zoomed">
          <div class="image-wrapper">
            <img src="{{ asset('asset/image/bg/high-tech.png') }}" alt="">
            <h3 class="img-top-text">High-tech workstation with global network</h3>
            <h6 class="img-bottom-text">
              Get ready for an intelligent chatbot that responds to client queries instantly—trained on your own
              knowledge base.
            </h6>
          </div>
        </div>

        <!-- Second Image -->
        <div class="coming-soon-tech zoomed">
          <div class="image-wrapper">
            <img src="{{ asset('asset/image/bg/AI-driven.png') }}" alt="">
            <h3 class="img-top-text">AI-Driven Support Bot</h3>
            <h6 class="img-bottom-text">
              Get ready for an intelligent chatbot that responds to client queries instantly—trained on your own
              knowledge base.
            </h6>
          </div>
        </div>
      </div>
    </div>
  </section>
</x-guest-layout>