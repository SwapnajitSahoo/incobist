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
    <div class="latest-grid">
      <div class="latest-grid-img">
        <img src="{{ asset('asset/image/bg/smart-dashboard.png') }}" alt="">
      </div>
      <div class="latest-heading smart-dashboard">
        <h5>Latest Releases</h5>
        <h1>Smarter Dashboard Experience - April 2025</h1>
        <h6>We've revamped our analytics dashboard with customizable filters, exportable reports, and improved
          visualizations—helping you make faster, smarter decisions.</h6>
      </div>
    </div>
    <hr>
    <div class="latest-grid best-release">
      <div class="latest-heading targeted-campaign">
        <h5>Best Release</h5>
        <h1>Targeted Campaign Tools - March 2025</h1>
        <h6>Now launch more personalized email and push notification
          campaigns directly from your CRM integration panel</h6>
      </div>
      <div class="latest-grid-img">
        <img src="{{ asset('asset/image/bg/targeted-campaign.png') }}" alt="">
      </div>
    </div>
    <hr>
    <div class="latest-grid enhanced-security">
      <div class="latest-grid-img">
        <img src="{{ asset('asset/image/bg/enhanced-security.png') }}" alt="">
      </div>
      <div class="latest-heading">
        <h5>Strong Authentication</h5>
        <h1>Enhanced Security Layer - February 2025</h1>
        <h6>Added Two-Factor Authentication (2FA) and login alerts to safeguard your data and team access.</h6>
      </div>
    </div>
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