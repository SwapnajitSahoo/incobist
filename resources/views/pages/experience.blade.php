<x-guest-layout>
        <x-slot name="title">EXPERIENCE CENTER</x-slot>
          <!-- =========== hero section start ========= -->

  <section class="experience-center-hero">
    <div class="career-heading">
      <h1>Step Into the Experience Center</h1>
      <hr class="career-line">
      <p class="career-subtitle">Explore how we turn strategy into scalable design, development, and growth experiences
        — live.</p>
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

  <!-- ============ Discover Roi SECTION START ============ -->
  <section class="know-your-user-section">
    <div class="know-your-user-heading">
      <h2>Discover Your Potential ROI </h2>
      <hr class="high-tech-line">
      <p>Estimate the return you can generate with Incobist's design, tech, and growth expertise —
        based on your budget and industry.</p>
    </div>
    <div class="roi-container">
      <!-- Form Panel -->
      <div class="roi-form-panel">
        <div>
          <div class="roi-form-group">
            <label>Your Industry</label>
            <select>
              <option value="">Select Industry</option>
              <option>Healthcare</option>
              <option>Education</option>
              <option>E-commerce</option>
              <option>Real Estate</option>
              <option>Travel & Tourism</option>
            </select>
          </div>
          <div class="roi-form-group">
            <label>Monthly Budget</label>
            <select>
              <option value="">Select Budget</option>
              <option>₹10K - ₹50K</option>
              <option>₹50K - ₹1L</option>
              <option>₹1L - ₹5L</option>
              <option>₹5L - ₹10L</option>
              <option>Above ₹10L</option>
            </select>
          </div>
          <div class="roi-form-group">
            <label>Your Goal</label>
            <select>
              <option value="">Select Goal</option>
              <option>Lead Generation</option>
              <option>Brand Awareness</option>
              <option>Sales Conversion</option>
              <option>App Downloads</option>
              <option>Website Traffic</option>
            </select>
          </div>
          <div class="roi-form-group">
            <label>Business Stage</label>
            <select>
              <option value="">Select Stage</option>
              <option>Startup</option>
              <option>Growing</option>
              <option>Established</option>
              <option>Enterprise</option>
            </select>
          </div>
          <div class="roi-form-group">
            <label>Timeline Preference</label>
            <select>
              <option value="">Select Timeline</option>
              <option>1-3 Months</option>
              <option>3-6 Months</option>
              <option>6-12 Months</option>
              <option>Flexible</option>
            </select>
          </div>
        </div>
        <div class="roi-footer-buttons">
          <button class="roi-button">Calculate Now</button>
        </div>
      </div>

      <!-- Result Panel -->
      <div class="roi-result-panel-container">
        <div class="roi-result-panel">
          <div>
            <h2>Result Panel</h2>

            <div class="roi-result-item">
              <div class="roi-inline">
                <img src="{{ asset('asset/image/bg/roi.svg') }}" alt="ROI Icon" />
                <div>
                  <h3 class="roi-roi">3.4x Over 6 months</h3>
                  <span>Estimated Return of Investment</span>
                </div>
              </div>
            </div>

            <div class="roi-result-item">
              <div class="roi-inline">
                <img src="{{ asset('asset/image/bg/growth.svg') }}" alt="Growth Icon" />
                <div>
                  <h3 class="roi-uplift">+28% average uplift</h3>
                  <span>Conversion Growth</span>
                </div>
              </div>
            </div>

            <div class="roi-result-item">
              <div class="roi-inline">
                <img src="{{ asset('asset/image/bg/timeline.svg') }}" alt="Timeline Icon" />
                <div>
                  <h3 class="roi-timeline">8-17 Weeks</h3>
                  <span>Estimated Timeline</span>
                </div>
              </div>
            </div>

            <div class="roi-result-item">
              <div class="roi-inline">
                <img src="{{ asset('asset/image/bg/spend.svg') }}" alt="Spend Icon" />
                <div>
                  <h3 class="roi-spend">₹85k/month</h3>
                  <span>Avg. Client Spend</span>
                </div>
              </div>
            </div>

            <div class="roi-result-item">
              <div class="roi-inline">
                <img src="{{ asset('asset/image/bg/spend3.svg') }}" alt="Spend2 Icon" />
                <div>
                  <h3 class="roi-quote">“A D2C brand grew 42% in 90 days”</h3>
                  <span>Client Success Story</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="roi-footer-buttons">
          <button class="roi-download-button">Download Your ROI report</button>
        </div>
      </div>
    </div>
  </section>

  <div class="solution-strategy-section">
    <div class="solution-strategy-box">
      <div class="solution-strategy-text">
        <p class="solution-strategy-message">
          "Every solution we deliver is backed by strategy, design, and measurable growth. Dive into our work.""
        </p>
      </div>
    </div>
  </div>


  <!-- ==================== Know Your User section start ===================== -->

  <section class="know-your-user-section">
    <div class="know-your-user-heading">
      <h2>Know Your User </h2>
      <hr class="high-tech-line">
      <p>Select your industry to generate a sample user persona and journey map we typically build for clients.</p>
    </div>
    <div class="experience-container">
      <section class="experience-section">

        <!-- Left column with solution items -->
        <div class="experience-left-column">
          <div class="experience-item" onclick="experienceShowSolution(1)">
            <div class="experience-bar experience-purple-bg" style="height: 0px;"></div>
            <span class="experience-number experience-purple">01.</span>
            <p class="experience-item-text">Which industry are you in?</p>
          </div>
          <!-- Content 1 -->
          <div class="experience-mobile-content" id="experience-mobile-content-1">
            <div class="experience-content-inner">
              <div class="experience-option-list">
                <hr class="inside-experience-divider">
                <div class="experience-option" onclick="selectOption(this, 1)">D2C Brand</div>
                <div class="experience-option" onclick="selectOption(this, 1)">Real Estate</div>
                <div class="experience-option" onclick="selectOption(this, 1)">Food &amp; Hospitality</div>
                <div class="experience-option" onclick="selectOption(this, 1)">Retail</div>
                <div class="experience-option" onclick="selectOption(this, 1)">SaaS</div>
                <div class="experience-option" onclick="selectOption(this, 1)">EdTech</div>
                <div class="experience-option" onclick="selectOption(this, 1)">Finance</div>
                <div class="experience-option" onclick="selectOption(this, 1)">Food &amp; Hospitality</div>
              </div>
            </div>
          </div>
          <hr class="experience-divider">

          <div class="experience-item" onclick="experienceShowSolution(2)">
            <div class="experience-bar experience-green-bg" style="height: 0px;"></div>
            <span class="experience-number experience-green">02.</span>
            <p class="experience-item-text">What is your customer type?</p>
          </div>
          <div class="experience-mobile-content" id="experience-mobile-content-2">
            <div class="experience-content-inner">
              <div class="experience-option-list">
                <hr class="inside-experience-divider">
                <div class="experience-option" onclick="selectOption(this, 2)">D2C Brand</div>
                <div class="experience-option" onclick="selectOption(this, 2)">Consumers (B2C)</div>
                <div class="experience-option" onclick="selectOption(this, 2)">Other Businesses (B2B)</div>
                <div class="experience-option" onclick="selectOption(this, 2)">Both</div>
              </div>
            </div>
          </div>
          <hr class="experience-divider">

          <div class="experience-item" onclick="experienceShowSolution(3)">
            <div class="experience-bar experience-red-bg" style="height: 0px;"></div>
            <span class="experience-number experience-red">03.</span>
            <p class="experience-item-text">What stage is your product at?</p>
          </div>
          <div class="experience-mobile-content" id="experience-mobile-content-3">
            <div class="experience-content-inner">
              <div class="experience-option-list">
                <hr class="inside-experience-divider">
                <div class="experience-option" onclick="selectOption(this, 3)">Idea Stage</div>
                <div class="experience-option" onclick="selectOption(this, 3)">MVP/Pilot</div>
                <div class="experience-option" onclick="selectOption(this, 3)">Scaling</div>
              </div>
            </div>
          </div>
          <hr class="experience-divider">

          <div class="experience-item" onclick="experienceShowSolution(4)">
            <div class="experience-bar experience-blue-bg" style="height: 0px;"></div>
            <span class="experience-number experience-blue">04.</span>
            <p class="experience-item-text">What do you want to improve?</p>
          </div>
          <div class="experience-mobile-content" id="experience-mobile-content-4">
            <div class="experience-content-inner">
              <div class="experience-option-list">
                <hr class="inside-experience-divider">
                <div class="experience-option" onclick="selectOption(this, 4)">Idea Stage</div>
                <div class="experience-option" onclick="selectOption(this, 4)">MVP/Pilot</div>
                <div class="experience-option" onclick="selectOption(this, 4)">Scaling</div>
              </div>
            </div>
          </div>
          <hr class="experience-divider">

          <div class="experience-item" onclick="experienceShowSolution(5)">
            <div class="experience-bar experience-orange-bg" style="height: 0px;"></div>
            <span class="experience-number experience-orange">05.</span>
            <p class="experience-item-text">Write about pain points and gain points of the user.</p>
          </div>
          <div class="experience-mobile-content" id="experience-mobile-content-5">
            <div class="experience-content-inner">
              <hr class="textarea-experience-divider">
              <div class="experience-textarea-container">
                <textarea class="experience-textarea" placeholder="Type anything related to the consumer..."></textarea>
              </div>
            </div>
          </div>
          <hr class="experience-divider">
        </div>

        <!-- Generate Persona Button (always visible) -->
        <div class="persona-button-container">
          <button class="persona-button" onclick="generatePersona()">Generate Persona</button>
        </div>
      </section>
    </div>
  </section>
  <section id="generated-persona" class="hidden-section">
    <div class="persona-card-heading-section">
      <h3>Your Persona is ready</h3>
      <button>Download Now</button>
    </div>

    <!-- Main Content -->
    <div class="persona-card-content">
      <div class="persona-card-section">

        <!-- Main Content -->
        <div class="persona-card-content">
          <!-- Left: Photo Section -->
          <div class="persona-card-photo">
            <div class="persona-card-photo-container">
              <img src="{{ asset('asset/image/bg/persona-profile.jpg') }}" alt="">
            </div>
          </div>

          <!-- Right: Content Sections -->
          <div class="persona-card-right-section">
            <!-- Upper: About Section -->
            <div class="persona-card-about-section">
              <div class="persona-card-header">
                <!-- Bio Text Header -->
                <div class="persona-card-bio-text">
                  <h2>
                    <span class="persona-card-about-label">About: <br></span>
                    <span class="persona-card-name-label">Jivan Ahuja – The EV Enthusiast</span>
                  </h2>
                </div>

                <!-- Progress Meters -->
                <div class="persona-card-progress-meters">
                  <div class="persona-card-progress-item">
                    <div class="persona-card-semi-circle">
                      <div class="persona-card-semi-circle-bg"></div>
                      <div class="persona-card-semi-circle-fill-95"></div>
                    </div>
                    <div class="persona-card-progress-value">95%</div>
                    <div class="persona-card-progress-label">Energy</div>
                  </div>

                  <div class="persona-card-progress-item">
                    <div class="persona-card-semi-circle">
                      <div class="persona-card-semi-circle-bg"></div>
                      <div class="persona-card-semi-circle-fill-93"></div>
                    </div>
                    <div class="persona-card-progress-value">93%</div>
                    <div class="persona-card-progress-label">In-depth</div>
                  </div>
                </div>
              </div>

              <!-- Bio Paragraph (now outside the flex container) -->
              <p class="persona-card-bio-paragraph">
                Jivan is an eco-conscious lawyer who believes in sustainable living and the future of electric
                mobility.
                With 8 years of EV ownership, he advocates for better infrastructure while dealing with range anxiety
                and
                charging limitations. He's passionate about creating a stronger EV ecosystem in his city and helping
                others
                transition to electric vehicles.
              </p>
            </div>

            <!-- Lower: Feature Boxes -->
            <div class="persona-card-persona-card-feature-boxes">
              <!-- Demographic Box -->
              <div class="persona-card-feature-box">
                <h3>Demographic</h3>
                <ul>
                  <li>
                    <div>•</div>
                    <div>
                      Age - 40 years old
                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Gender - Male
                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Location - Bhubaneswar
                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Occupation - EV owner
                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Income - 85k per month
                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Experience - 8yrs
                    </div>
                  </li>
                </ul>
              </div>

              <!-- Pain Points Box -->
              <div class="persona-card-feature-box">
                <h3>Pain Points</h3>
                <ul>
                  <li>
                    <div>•</div>
                    <div>
                      Lack of widespread charging stations
                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Concerns over EV range and battery life

                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      High initial investment costs

                    </div>
                  </li>
                </ul>
              </div>

              <!-- Motivation Box -->
              <div class="persona-card-feature-box">
                <h3>Motivation</h3>
                <ul>
                  <li>
                    <div>•</div>
                    <div>

                      Supports eco-friendly transportation solutions
                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Believes in long-term cost benefits of EVs

                    </div>
                  </li>
                  <li>
                    <div>•</div>
                    <div>
                      Seeks a well-developed EV ecosystem for better convenience

                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section>

  <!-- ==================== Every Design section start ===================== -->
  <section class="know-your-user-section">
    <div class="know-your-user-heading">
      <h2 class="Every-design-heading">Every Design. Every Decision. Proven by Results.</h2>
      <p class="Every-design-para">Explore how we transform complex challenges into measurable growth — through design,
        development, and smart strategy.</p>
    </div>

    <div class="hb-scroll-container">
      <!-- Card 1 -->
      <div class="hb-card hb-card-1">
        <a href="healthberry.html" class="industry-box-link"></a>
        <div class="hb-card-content">
          <div class="hb-logo">
            <div class="hb-logo-box">
              <img src="{{ asset('asset/image/bg/healthberry-logo.png') }}" alt="Logo">
            </div>
            <span class="hb-logo-text">Healthberry</span>
          </div>
          <div class="hb-description">
            Users were dropping off<br>before completing checkout.
          </div>
          <div class="hb-author">
            <img src="{{ asset('asset/image/bg/hb-profile.png') }}" alt="Manasa Mahunta">
            <div class="hb-author-info">
              <strong>Manasa Mahunta</strong>
              <span style="color: #7765F5;">2nd June 2024 · 4 months ago</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="hb-card hb-card-2">
        <a href="healthberry.html" class="industry-box-link"></a>
        <div class="hb-card-content">
          <div class="hb-logo">
            <div class="hb-logo-box">
              <img src="{{ asset('asset/image/bg/eduspark-logo.png') }}" alt="Logo">
            </div>
            <span class="hb-logo-text" style="color: #DF2828;">EduSpark</span>
          </div>

          <div class="hb-description">
            Subscription retention was<br>lower than industry average.
          </div>

          <div class="hb-author">
            <img src="{{ asset('asset/image/bg/hb-profile.png') }}" alt="Alex Chen">
            <div class="hb-author-info">
              <strong>Alex Chen</strong>
              <span style="color: #DF2828;">15th May 2024 · 5 months ago</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="hb-card hb-card-3">
        <a href="healthberry.html" class="industry-box-link"></a>
        <div class="hb-card-content">
          <div class="hb-logo">
            <div class="hb-logo-box">
              <img src="{{ asset('asset/image/bg/propwise-logo.png') }}" alt="Logo">
            </div>
            <span class="hb-logo-text" style="color: #2AC465;">Propwise</span>
          </div>

          <div class="hb-description">
            Mobile app engagement<br>needed improvement.
          </div>

          <div class="hb-author">
            <img src="{{ asset('asset/image/bg/hb-profile.png') }}" alt="Sarah Lee">
            <div class="hb-author-info">
              <strong>Sarah Lee</strong>
              <span style="color: #2AC465;">28th April 2024 · 6 months ago</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 4 -->
      <div class="hb-card hb-card-4">
        <a href="healthberry.html" class="industry-box-link"></a>
        <div class="hb-card-content">
          <div class="hb-logo">
            <div class="hb-logo-box">
              <img src="{{ asset('asset/image/bg/healthberry-logo.png') }}" alt="Logo">
            </div>
            <span class="hb-logo-text" style="color: #FFA100;">Localift</span>
          </div>

          <div class="hb-description">
            Customer acquisition cost<br>was too high for sustainability.
          </div>

          <div class="hb-author">
            <img src="{{ asset('asset/image/bg/hb-profile.png') }}" alt="James Kim">
            <div class="hb-author-info">
              <strong>James Kim</strong>
              <span style="color: #FFA100;">10th March 2024 · 7 months ago</span>
            </div>
          </div>
        </div>
      </div>

      <!-- Card 5 -->
      <div class="hb-card hb-card-5">
        <a href="healthberry.html" class="industry-box-link"></a>
        <div class="hb-card-content">
          <div class="hb-logo">
            <div class="hb-logo-box">
              <img src="{{ asset('asset/image/bg/eduspark-logo.png') }}" alt="Logo">
            </div>
            <span class="hb-logo-text" style="color: #7765F5;">Healthberry</span>
          </div>

          <div class="hb-description">
            Product packaging needed<br>a sustainable redesign.
          </div>

          <div class="hb-author">
            <img src="{{ asset('asset/image/bg/hb-profile.png') }}" alt="Lisa Taylor">
            <div class="hb-author-info">
              <strong>Lisa Taylor</strong>
              <span style="color: #7765F5;">5th February 2024 · 8 months ago</span>
            </div>
          </div>
        </div>
      </div>
    </div>
    </div>
  </section>

  <section class="our-design-speaks">
    <div class="design-speaks">
      <h3 class="design-speaks-heading">“Our design speaks for itself. Explore UI systems, interactions, and branding
        across industries.”</h3>
    </div>
  </section>
</x-guest-layout>