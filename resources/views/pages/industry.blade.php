<x-guest-layout>
  <x-slot name="title">{{$getIndustry->page_title ?? 'INDUSTRY'}}</x-slot>
  <section class="main-industry-page-section">
    <div class="career-heading">
      <h1>{{$getIndustry->heading ?? 'INDUSTRY'}}</h1>
      <hr class="career-line">
      <p class="career-subtitle">{{$getIndustry->heading_subtitle ?? 'INDUSTRY'}}</p>
    </div>
    <div class="social-icons">
      <a href="{{$getIndustry->linkedin_link}}"><i class="fab fa-linkedin-in"></i></a>
      <a href="{{$getIndustry->twitter_link}}"><i class="fab fa-twitter"></i></a>
      <a href="{{$getIndustry->instagram_link}}"><i class="fab fa-instagram"></i></a>
      <a href="{{$getIndustry->fb_link}}"><i class="fab fa-facebook-f"></i></a>
      <a href="{{$getIndustry->wp_link}}" target="_blank"><i class="fab fa-whatsapp"></i></a>
      <a href="{{$getIndustry->tel_no}}"><i class="fas fa-phone"></i></a>
    </div>
    <div class="career-hero-shadow-overlay"></div>
  </section>

  <!-- ========================  INDUSTRY WE SERVES SECTION START ======================== -->
  <div class="lending-speed">
    <h1>{{$getIndustry->lending_title ?? 'INDUSTRY'}}</h1>
    <hr class="lending-speed-line">
    <p>{{$getIndustry->lending_desc ?? 'INDUSTRY'}}</p>
  </div>

  <!-- =================== INDUSRTY CARD SECTION START =================== -->
  <div class="industry-box-grid-container">
    <!-- Box 1 -->
    @forelse ($getIndustry->cards->where('type', 'serve') as $card)
    <div class="industry-box industry-box-1">
      {{-- <a href="{{ route($card->card_link) }}" class="industry-box-link"></a> --}}
      <a href="{{ $card->card_link}}" class="industry-box-link"></a>
      <div class="industry-box-bg"
        style="background-image: url('{{ asset('storage/' . $card->img) }}');">
      </div>
      <div class="industry-box-triangle"></div>
      <div class="industry-box-content">
        <div class="industry-box-heading-container">
          <h2 class="industry-box-heading">{{$card->title ?? 'INDUSTRY'}}</h2>
          <p>{{$card->subtitle ?? 'INDUSTRY'}}</p>
        </div>
        <div class="industry-box-content-container">
          <p class="industry-box-content">{{$card->desc ?? 'INDUSTRY'}}</p>
        </div>
      </div>
    </div>
    @empty
    <p>No cards found</p>
    @endforelse

  </div>

  <!-- ==================== OUR CAPABILITIES SECTION START ===================== -->
  <section class="solution-we-offer">
    <div class="solution-we-offer-heading">
      <h1>Our Capabilities </h1>
      <hr class="solution-we-offer-line">
      <h5>Whether you're a startup or an enterprise, Incobist delivers domain-aligned tech solutions to fuel your next
        leap.
      </h5>
    </div>
  </section>
  <div class="industry-capability-box-container">
    @forelse ($getIndustry->cards->where('type', 'capable') as $card)
    <section class="industry-capability-card-section" style="animation-duration: 60s;">
      <a href="{{ $card->card_link}}" class="industry-box-link"></a>

      <div class="industry-capability-service-card industry-capability-service-card-1">
        <div class="industry-capability-service-image-wrapper">
          <img src="{{ asset('storage/' . $card->img) }}" alt="Cloud &amp; DevOps">
          <h3>{{$card->title ?? 'INDUSTRY'}}</h3>
          <p>{{$card->desc ?? 'INDUSTRY'}}</p>
        </div>
      </div>
    </section>
    @empty
    <p>No cards found</p>
    @endforelse
  </div>

  <!-- ======================== Project Idea Section Start ============================= -->
  <div class="project-idea-form">
    <h1>Lets us know about your <br><span>Project Idea</span></h1>
    <div class="project-idea">
      <div class="project-left">
        <img src="{{ asset('asset/image/bg/contactFormBg.png') }}" alt="">
        <div class="project-experience">
          <img src="{{ asset('asset/image/bg/experience.png') }}" alt="">
          <div class="year-of-experience">
            <h1>10+</h1>
            <h3>Years Of Experience <br><span>All the staffs Incobist</span></h3>
          </div>
        </div>
      </div>
      <div class="project-right">
        <label for="name">Your Name</label>
        <div class="input-wrapper">
          <input type="text" id="name" placeholder="Jhon Doe" />
        </div>
        <label for="email">Your Mail ID</label>
        <div class="input-wrapper">
          <input type="email" id="email" placeholder="jhondoe@gmail.com" />
        </div>
        <label for="phone">Your Phone no</label>
        <div class="input-wrapper">
          <input type="tel" id="phone" placeholder="213138848293" />
        </div>
        <label for="email">Subject</label>
        <div class="input-wrapper">
          <input type="text" id="email" placeholder="for education/ Business" />
        </div>
        <div class="message-container">
          <label for="message">Message</label>
          <textarea id="message" placeholder="write about the topic you want to discuss"></textarea>
        </div>
        <div class="project-button-container">
          <button class="project-button">Send</button>
        </div>
      </div>
    </div>
  </div>
</x-guest-layout>