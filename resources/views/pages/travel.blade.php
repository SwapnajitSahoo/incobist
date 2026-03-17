<x-guest-layout>
        <x-slot name="title">TRAVEL</x-slot>
         <!-- =========== hero section start ========= -->

  <section class="high-tech-hero">
    <div class="career-heading">
      <h1>Travel</h1>
      <hr class="career-line">
      <p class="career-subtitle">We co-create futuristic technologies and transformative experiences for a better
        world.</p>
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

  <!-- ============ Lending Speed SECTION START ============ -->
  <div class="lending-speed">
    <h1>Lending speed to strategy</h1>
    <hr class="lending-speed-line">
    <p>At Incobist, we blend deep domain expertise with digital-first thinking to create tailored solutions for every
      industry. From AI-driven insights to seamless product engineering, we help businesses stay ahead in a rapidly
      evolving world.</p>
  </div>


  <!-- ==================== Staying Ahead section start ===================== -->

  <section class="staying-ahead-section">
    <div class="staying-ahead">
      <h2>Staying ahead of the curve isn't always easy. <br>We can help. YOUR CHALLENGE</h2>
      <hr class="high-tech-line">
    </div>
    <!-- <section class="our-solution-section">
      <div class="solution-left">
        <div class="solution-item active">
          <div class="solution-bar"></div>
          <span class="solution-number solution-purple">01.</span>
          <p>Creating compelling customer experiences</p>
        </div>
        <hr class="solution-line">
        <div class="solution-item">
          <span class="solution-number solution-green">02.</span>
          <p>Addressing the semiconductor chip shortage</p>
        </div>
        <hr class="solution-line">
        <div class="solution-item">
          <span class="solution-number solution-red">03.</span>
          <p>Improving market base through cloud coverage</p>
        </div>
        <hr class="solution-line">
        <div class="solution-item">
          <span class="solution-number solution-blue">04.</span>
          <p>Building a cyber-resilient organization</p>
        </div>
        <hr class="solution-line">
        <div class="solution-item">
          <span class="solution-number solution-orange">05.</span>
          <p>Building a cyber-resilient organization</p>
        </div>
        <hr class="solution-line">
      </div>

      <div class="solution-right">
        <div class="solution-content">
          <h2 class="solution-purple">Our Solution</h2>
          <h4>Customer Experience Transformation Services</h4>
        </div>
        <img src="{{ asset('asset/image/bg/our-solution-customer-experience.png') }}" alt="Touch Interaction" />
        <div class="solution-caption">
          <p>
            A range of services including CX strategy design, customer insights,
            and marketing transformation
          </p>
        </div>
      </div>
    </section> -->
    <div class="solv-container">
      <section class="solv-section">
        <!-- Left column with solution items -->
        <div class="solv-left-column">
          <div class="solv-item" onclick="solvShowSolution(1)">
            <div class="solv-bar solv-purple-bg"></div>
            <span class="solv-number solv-purple">01.</span>
            <p class="solv-item-text">Creating compelling customer experiences</p>
            <div class="solv-arrow solv-purple">
              <div class="solv-arrow-icon"></div>
            </div>
          </div>
          <!-- Mobile Content 1 -->
          <div class="solv-mobile-content" id="solv-mobile-content-1">
            <div class="solv-content-header">
              <h2 class="solv-purple">Our Solution</h2>
              <h4>Customer Experience Transformation Services</h4>
            </div>
            <img src="{{ asset('asset/image/bg/our-solution-customer-experience.png') }}" alt="Touch Interaction">
            <div class="solv-content-caption">
              <p>A range of services including CX strategy design, customer insights, and marketing transformation</p>
            </div>
          </div>
          <hr class="solv-divider">

          <div class="solv-item" onclick="solvShowSolution(2)">
            <div class="solv-bar solv-green-bg"></div>
            <span class="solv-number solv-green">02.</span>
            <p class="solv-item-text">Addressing the semiconductor chip shortage</p>
            <div class="solv-arrow solv-green">
              <div class="solv-arrow-icon"></div>
            </div>
          </div>
          <div class="solv-mobile-content" id="solv-mobile-content-2">
            <div class="solv-content-header">
              <h2 class="solv-green">Our Solution</h2>
              <h4>Semiconductor Supply Chain Optimization</h4>
            </div>
            <img src="{{ asset('asset/image/bg/solution2.png') }}" alt="Chip Manufacturing">
            <div class="solv-content-caption">
              <p>Strategic approaches to mitigate chip shortages through supply chain resilience and alternative
                sourcing</p>
            </div>
          </div>
          <hr class="solv-divider">

          <div class="solv-item" onclick="solvShowSolution(3)">
            <div class="solv-bar solv-red-bg"></div>
            <span class="solv-number solv-red">03.</span>
            <p class="solv-item-text">Improving market base through cloud coverage</p>
            <div class="solv-arrow solv-red">
              <div class="solv-arrow-icon"></div>
            </div>
          </div>
          <div class="solv-mobile-content" id="solv-mobile-content-3">
            <div class="solv-content-header">
              <h2 class="solv-red">Our Solution</h2>
              <h4>Cloud Market Expansion Services</h4>
            </div>
            <img src="{{ asset('asset/image/bg/solution3.png') }}" alt="Cloud Computing">
            <div class="solv-content-caption">
              <p>Comprehensive cloud strategies to expand market reach and improve operational efficiency</p>
            </div>
          </div>
          <hr class="solv-divider">

          <div class="solv-item solv-active" onclick="solvShowSolution(4)">
            <div class="solv-bar solv-blue-bg"></div>
            <span class="solv-number solv-blue">04.</span>
            <p class="solv-item-text solv-blue">Building a cyber-resilient organization</p>
            <div class="solv-arrow solv-blue">
              <div class="solv-arrow-icon"></div>
            </div>
          </div>
          <div class="solv-mobile-content solv-active" id="solv-mobile-content-4">
            <div class="solv-content-header">
              <h2 class="solv-blue">Our Solution</h2>
              <h4>Cybersecurity Resilience Framework</h4>
            </div>
            <img src="{{ asset('asset/image/bg/solution4.png') }}" alt="Cyber Security">
            <div class="solv-content-caption">
              <p>End-to-end security solutions to protect critical layout and ensure business continuity</p>
            </div>
          </div>
          <hr class="solv-divider">

          <div class="solv-item" onclick="solvShowSolution(5)">
            <div class="solv-bar solv-orange-bg"></div>
            <span class="solv-number solv-orange">05.</span>
            <p class="solv-item-text">Enhancing digital transformation strategies</p>
            <div class="solv-arrow solv-orange">
              <div class="solv-arrow-icon"></div>
            </div>
          </div>
          <div class="solv-mobile-content" id="solv-mobile-content-5">
            <div class="solv-content-header">
              <h2 class="solv-orange">Our Solution</h2>
              <h4>Digital Transformation Acceleration</h4>
            </div>
            <img src="{{ asset('asset/image/bg/solution5.png') }}" alt="Digital Transformation">
            <div class="solv-content-caption">
              <p>Strategic roadmaps and implementation services to accelerate digital transformation initiatives</p>
            </div>
          </div>
          <hr class="solv-divider">
        </div>

        <!-- Right column with desktop content -->
        <div class="solv-right-column">
          <div class="solv-content-wrapper">
            <!-- Solution 1 -->
            <div class="solv-content-box" id="solv-content-1">
              <div class="solv-content-header">
                <h2 class="solv-purple">Our Solution</h2>
                <h4>Customer Experience Transformation Services</h4>
              </div>
              <img src="{{ asset('asset/image/bg/our-solution-customer-experience.png') }}" alt="Touch Interaction">
              <div class="solv-content-caption">
                <p>A range of services including CX strategy design, customer insights, and marketing transformation</p>
              </div>
            </div>

            <!-- Solution 2 -->
            <div class="solv-content-box" id="solv-content-2">
              <div class="solv-content-header">
                <h2 class="solv-green">Our Solution</h2>
                <h4>Semiconductor Supply Chain Optimization</h4>
              </div>
              <img src="{{ asset('asset/image/bg/solution2.png') }}" alt="Chip Manufacturing">
              <div class="solv-content-caption">
                <p>Strategic approaches to mitigate chip shortages through supply chain resilience and alternative
                  sourcing</p>
              </div>
            </div>

            <!-- Solution 3 -->
            <div class="solv-content-box" id="solv-content-3">
              <div class="solv-content-header">
                <h2 class="solv-red">Our Solution</h2>
                <h4>Cloud Market Expansion Services</h4>
              </div>
              <img src="{{ asset('asset/image/bg/solution3.png') }}" alt="Cloud Computing">
              <div class="solv-content-caption">
                <p>Comprehensive cloud strategies to expand market reach and improve operational efficiency</p>
              </div>
            </div>

            <!-- Solution 4 -->
            <div class="solv-content-box solv-active" id="solv-content-4">
              <div class="solv-content-header">
                <h2 class="solv-blue">Our Solution</h2>
                <h4>Cybersecurity Resilience Framework</h4>
              </div>
              <img src="{{ asset('asset/image/bg/solution4.png') }}" alt="Cyber Security">
              <div class="solv-content-caption">
                <p>End-to-end security solutions to protect critical layout and ensure business continuity</p>
              </div>
            </div>

            <!-- Solution 5 -->
            <div class="solv-content-box" id="solv-content-5">
              <div class="solv-content-header">
                <h2 class="solv-orange">Our Solution</h2>
                <h4>Digital Transformation Acceleration</h4>
              </div>
              <img src="{{ asset('asset/image/bg/solution5.png') }}" alt="Digital Transformation">
              <div class="solv-content-caption">
                <p>Strategic roadmaps and implementation services to accelerate digital transformation initiatives</p>
              </div>
            </div>
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
    <section class="high-tech-service-card-section">
      <div class="high-tech-service-card high-tech-service-card-1">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/cloud-devops.png') }}" alt="Cloud & DevOps">
          <h3>Cloud & DevOps</h3>
          <p>Generative AI: Address enterprise goals with synthetic data</p>
        </div>
      </div>
      <div class="high-tech-service-card high-tech-service-card-2">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/ai-data-engineering.png') }}" alt="AI & Data Engineering">
          <h3>AI & Data Engineering</h3>
          <p>Adopting cognitive recruitment practices to revive the world of work</p>
        </div>
      </div>
      <div class="high-tech-service-card high-tech-service-card-3">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/cyber-securyity.png') }}" alt="AI & Data Engineering">
          <h3>AI & Data Engineering</h3>
          <p>SAP accelerates deal closure with process automation</p>
        </div>
      </div>
      <div class="high-tech-service-card high-tech-service-card-4">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/cloud.png') }}" alt="AI & Data Engineering">
          <h3>AI & Data Engineering</h3>
          <p>Lexmark paves the way for future business growth</p>
        </div>
      </div>
    </section>
  </section>


  <section class="in-focus">
    <div class="in-focus-heading">
      <h1>Our services, customized for you</h1>
      <hr class="high-tech-line">
      <h5>Whether you're a startup or an enterprise, Incobist delivers domain-aligned tech solutions to fuel your next
        leap.</h5>
    </div>
    <section class="high-tech-service-card-section">
      <div class="high-tech-service-card high-tech-service-card-1">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/cloud-devops.png') }}" alt="Cloud & DevOps">
          <h3>Cognitive Business Operations</h3>
          <p>Generative AI: Address enterprise goals with synthetic data</p>
        </div>
      </div>
      <div class="high-tech-service-card high-tech-service-card-2">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/ai-data-engineering.png') }}" alt="AI & Data Engineering">
          <h3>Data and Analytics</h3>
          <p>Adopting cognitive recruitment practices to revive the world of work</p>
        </div>
      </div>
      <div class="high-tech-service-card high-tech-service-card-3">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/cyber-securyity.png') }}" alt="AI & Data Engineering">
          <h3>Cybersecurity</h3>
          <p>SAP accelerates deal closure with process automation</p>
        </div>
      </div>
      <div class="high-tech-service-card high-tech-service-card-4">
        <div class="high-tech-service-image-wrapper">
          <img src="{{ asset('asset/image/bg/cloud.png') }}" alt="AI & Data Engineering">
          <h3>Cloud</h3>
          <p>Lexmark paves the way for future business growth</p>
        </div>
      </div>
    </section>
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