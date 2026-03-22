<x-guest-layout>
  <x-slot name="title">{{$getIndustry->page_title ?? 'Hightech'}}</x-slot>
  <section class="high-tech-hero" style>
    <div class="career-heading">
      <h1>{{$getIndustry->heading ?? 'Hightech'}}</h1>
      <hr class="career-line">
      <p class="career-subtitle">{{$getIndustry->heading_subtitle ?? 'Hightech'}}</p>
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

  <!-- ============ Lending Speed SECTION START ============ -->
  <div class="lending-speed">
    <h1>{{$getIndustry->lending_title ?? 'INDUSTRY'}}</h1>
    <hr class="lending-speed-line">
    <p>{{$getIndustry->lending_desc ?? 'INDUSTRY'}}</p>
  </div>


  <!-- ==================== Staying Ahead section start ===================== -->

  <section class="staying-ahead-section">
    <div class="staying-ahead">
      <h2>Staying ahead of the curve isn't always easy. <br>We can help. YOUR CHALLENGE</h2>
      <hr class="high-tech-line">
    </div>
    <div class="solv-container">

      <section class="solv-section">

        <!-- Left column with solution items -->
        <div class="solv-left-column">
          @foreach($getIndustry->challenges as $challenge)
            <div class="solv-item" onclick="solvShowSolution({{  $loop->iteration }})">
              <div class="solv-bar solv-purple-bg"></div>
              <span class="solv-number solv-purple">{{ $loop->iteration }}.</span>
              <p class="solv-item-text">{{ $challenge->solution_name }}</p>
              <div class="solv-arrow solv-purple">
                <div class="solv-arrow-icon"></div>
              </div>
            </div>

            <!-- Mobile Content -->
            <div class="solv-mobile-content" id="solv-mobile-content-{{  $loop->iteration }}">
              <div class="solv-content-header">
                <h2 class="solv-purple">{{ $challenge->title }}</h2>
                <h4>{{ $challenge->subtitle }}</h4>
              </div>
              <img src="{{ asset('storage/' . $challenge->img) }}" alt="">
              <div class="solv-content-caption">
                <p>{{ $challenge->desc }}</p>
              </div>
            </div>

            <hr class="solv-divider">
          @endforeach

        </div>

        <!-- Right column with desktop content -->

        <div class="solv-right-column">
          <div class="solv-content-wrapper">
            @foreach($getIndustry->challenges as $challenge)
              <div class="solv-content-box {{ $loop->first ? 'solv-active' : '' }}"
                id="solv-content-{{  $loop->iteration }}">

                <div class="solv-content-header">
                  <h2 class="solv-blue">{{ $challenge->title }}</h2>
                  <h4>{{ $challenge->subtitle }}</h4>
                </div>

                <img src="{{ asset('storage/' . $challenge->img) }}" alt="">

                <div class="solv-content-caption">
                  <p>{{ $challenge->desc }}</p>
                </div>
              </div>
            @endforeach
          </div>
        </div>
      </section>
    </div>
  </section>

  <!-- ==================== In Focus section start ===================== -->

  <section class="in-focus">
    <div class="in-focus-heading">
      <h1>In Focus</h1>
      <hr class="high-tech-line">
      <h5>Whether you're a startup or an enterprise, Incobist delivers domain-aligned tech solutions to fuel your next
        leap.</h5>
    </div>
    @php $focusCards = $getIndustry->cards->where('type', 'focus'); @endphp
    <div class="high-tech-carousel-container {{ $focusCards->count() > 4 ? 'auto-slide' : '' }}">
      <section class="high-tech-service-card-section">
        @forelse ($focusCards as $card)
          <div class="high-tech-service-card high-tech-service-card-{{ ($loop->index % 4) + 1 }}">
            <a href="{{ $card->card_link}}" class="industry-box-link"></a>
            <div class="high-tech-service-image-wrapper">
              <img src="{{ $card->img ? asset('storage/' . $card->img) : asset('asset/image/bg/cloud-devops.png') }}"
                alt="{{ $card->title ?? 'INDUSTRY' }}">
              <h3>{{$card->title ?? 'INDUSTRY'}}</h3>
              <p>{{$card->desc ?? 'INDUSTRY'}}</p>
            </div>
          </div>
        @empty
          <p>No cards found</p>
        @endforelse

        {{-- Duplicate cards for infinite loop if more than 4 --}}
        @if($focusCards->count() > 4)
          @foreach ($focusCards as $card)
            <div class="high-tech-service-card high-tech-service-card-{{ ($loop->index % 4) + 1 }}">
              <a href="{{ $card->card_link}}" class="industry-box-link"></a>
              <div class="high-tech-service-image-wrapper">
                <img src="{{ $card->img ? asset('storage/' . $card->img) : asset('asset/image/bg/cloud-devops.png') }}"
                  alt="{{ $card->title ?? 'INDUSTRY' }}">
                <h3>{{$card->title ?? 'INDUSTRY'}}</h3>
                <p>{{$card->desc ?? 'INDUSTRY'}}</p>
              </div>
            </div>
          @endforeach
        @endif
      </section>
    </div>
  </section>


  <section class="in-focus">
    <div class="in-focus-heading">
      <h1>Our services, customized for you</h1>
      <hr class="high-tech-line">
      <h5>Whether you're a startup or an enterprise, Incobist delivers domain-aligned tech solutions to fuel your next
        leap.</h5>
    </div>
    @php $serviceCards = $getIndustry->cards->where('type', 'service'); @endphp
    <div class="high-tech-carousel-container {{ $serviceCards->count() > 4 ? 'auto-slide' : '' }}">
      <section class="high-tech-service-card-section">
        @forelse ($serviceCards as $card)
          <div class="high-tech-service-card high-tech-service-card-{{ ($loop->index % 4) + 1 }}">
            <a href="{{ $card->card_link}}" class="industry-box-link"></a>
            <div class="high-tech-service-image-wrapper">
              <img src="{{ $card->img ? asset('storage/' . $card->img) : asset('asset/image/bg/cloud-devops.png') }}"
                alt="{{ $card->title ?? 'INDUSTRY' }}">
              <h3>{{$card->title ?? 'INDUSTRY'}}</h3>
              <p>{{$card->desc ?? 'INDUSTRY'}}</p>
            </div>
          </div>
        @empty
          <p>No cards found</p>
        @endforelse

        {{-- Duplicate cards for infinite loop if more than 4 --}}
        @if($serviceCards->count() > 4)
          @foreach ($serviceCards as $card)
            <div class="high-tech-service-card high-tech-service-card-{{ ($loop->index % 4) + 1 }}">
              <a href="{{ $card->card_link}}" class="industry-box-link"></a>
              <div class="high-tech-service-image-wrapper">
                <img src="{{ $card->img ? asset('storage/' . $card->img) : asset('asset/image/bg/cloud-devops.png') }}"
                  alt="{{ $card->title ?? 'INDUSTRY' }}">
                <h3>{{$card->title ?? 'INDUSTRY'}}</h3>
                <p>{{$card->desc ?? 'INDUSTRY'}}</p>
              </div>
            </div>
          @endforeach
        @endif
      </section>
    </div>
  </section>

  <section class="in-focus">
    <div class="in-focus-heading">
      <h1 class="focus-sub-heading">Incobist showed a deep understanding of our ecosystem and
        uncovered key opportunities
        for transformation. They
        are set to be a vital partner in realizing our vision of a streamlined and agile IT environment.</h1>
    </div>
  </section>

</x-guest-layout>