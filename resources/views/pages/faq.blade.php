<x-guest-layout>
        <x-slot name="title">FAQ</x-slot>
        
  <section class="media-kit-section">
    <div class="career-heading">
      <h1>IR FAQs</h1>
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


  <!-- =================== CORPORATE QUESTION  SECTION START ==================== -->
  <div class="ir-faq">
    @foreach($faqs as $type => $items)
    <h1 class="ir-faq-heading">{{ $type }}</h1>
    
    @foreach($items as $index => $faq)
    <div class="ir-faq-item">
      <hr class="ir-faq-line">
      <div class="ir-faq-question">
        <div class="ir-faq-text">{{ sprintf('%02d', $index + 1) }}.<span> {{ $faq->question }}</span></div>
        <div class="ir-faq-icon"></div>
      </div>
      <div class="ir-faq-answer">
        <hr class="ir-faq-ans-line">
        <div class="ir-faq-ans">
          <div>Ans:</div>
          <span>
            {!! $faq->answer !!}
          </span>
        </div>
      </div>
    </div>
    @endforeach
    <hr class="ir-faq-line">
    @endforeach
  </div>

  </div>

  <!-- ======================== INVESTOR SECTION ========================== -->
  <div class="invester-update">
    <div class="invester-update-left-section"
      style="background: url(asset/image/media.png) no-repeat center; background-size: cover;">
      <div class="invester-update-overlay-content">
        <h2>Subscribe to our</h2>
        <h1><span>Investor updates</span></h1>
        <p>Join Our Community To Stay up-to-dated With The<br />Latest Technology</p>
        <button class="invester-update-cta-button">Resister Now</button>
      </div>
    </div>

    <div class="invester-update-right-section">
      <p class="invester-update-learn-text">Learn more about</p>
      <h2 class="invester-update-company-name">Incobist</h2>

      <a href="#financials" class="invester-update-info-link">Financials <span><i
            class="fa-solid fa-arrow-right"></i></span></a>
      <a href="about.html" class="invester-update-info-link">About us <span><i
            class="fa-solid fa-arrow-right"></i></span></a>
      <a href="faq.html" class="invester-update-info-link">IR FAQs <span><i
            class="fa-solid fa-arrow-right"></i></span></a>
      <a href="contact.html" class="invester-update-info-link">Contact <span><i
            class="fa-solid fa-arrow-right"></i></span></a>
    </div>
  </div>
</x-guest-layout>