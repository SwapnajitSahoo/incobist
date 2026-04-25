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
    <form action="{{ route('career') }}" method="GET" class="career-search-group">
      <div class="career-input-wrapper">
        <span class="career-search-icon"><i class="fas fa-location-dot"></i></span>
        <select name="location">
          <option value="" disabled selected hidden>Search the location</option>
          <option value="">All Locations</option>
          @foreach($locations as $loc)
            <option value="{{ $loc }}" {{ request('location') == $loc ? 'selected' : '' }}>{{ $loc }}</option>
          @endforeach
        </select>
      </div>

      <div class="career-input-wrapper">
        <span class="career-search-icon"><i class="fas fa-user"></i></span>
        <select name="category">
          <option value="" disabled selected hidden>Find Job categories</option>
          <option value="">All Categories</option>
          @foreach($categories as $cat)
            <option value="{{ $cat }}" {{ request('category') == $cat ? 'selected' : '' }}>{{ $cat }}</option>
          @endforeach
        </select>
      </div>

      <div class="career-input-wrapper">
        <span class="career-search-icon"><i class="fas fa-briefcase"></i></span>
        <select name="title">
          <option value="" disabled selected hidden>Find Job Title</option>
          <option value="">All Job Titles</option>
          @foreach($titles as $title)
            <option value="{{ $title }}" {{ request('title') == $title ? 'selected' : '' }}>{{ $title }}</option>
          @endforeach
        </select>
      </div>

      <button type="submit" class="career-search-button">Search</button>
    </form>
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
    <!-- Job Cards -->
    @foreach($list as $row)
    <div class="job-card">
      <div class="job-card-header">
        <span>{{ $row->location }}</span>
        <span class="job-post-date">Posted on {{ \Carbon\Carbon::parse($row->posted_at)->format('d M Y') }}</span>
      </div>
      <hr class="job-card-divider" />
      <div class="job-card-body-flex">
        <!-- LEFT: Job Info -->
        <div class="job-info-left">
          <h2 class="job-title">{{ $row->title }}</h2>
          <p class="job-category"><strong>Categories : </strong>{{ $row->category }}</p>
          @if($row->type)
            <span class="job-tag">{{ $row->type }}</span>
          @endif
        </div>
        <!-- RIGHT: Apply Section -->
        <div class="apply-section">
            <button class="apply-btn" onclick="openApplyModal({{ $row->id }}, '{{ $row->title }}')">Apply Now</button>
          <p class="positions-left">Only {{ $row->positions }} Positions are left</p>
        </div>
      </div>
    </div>
    @endforeach
    <div class="career-more-result">
      <button>More Results</button>
    </div>
  </div>

  <!-- Apply Modal -->
  <div id="applyModal" class="modal-overlay" style="display: none;">
    <div class="modal-content">
      <div class="modal-header">
        <h2>Apply for <span id="modalJobTitle"></span></h2>
        <button class="close-modal" onclick="closeApplyModal()">&times;</button>
      </div>
      <form action="{{ route('job.apply') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="career_id" id="modalCareerId">
        <div class="form-group">
          <label>Full Name</label>
          <input type="text" name="name" required placeholder="Enter your full name">
        </div>
        <div class="form-group">
          <label>Email Address</label>
          <input type="email" name="email" required placeholder="Enter your email">
        </div>
        <div class="form-group">
          <label>Phone Number</label>
          <input type="text" name="phone" placeholder="Enter your phone number">
        </div>
        <div class="form-group">
          <label>Upload Resume (PDF, DOC, DOCX - Max 5MB)</label>
          <input type="file" name="resume" required accept=".pdf,.doc,.docx">
        </div>
        <div class="form-group">
          <label>Message / Cover Letter (Optional)</label>
          <textarea name="message" rows="4" placeholder="Tell us about yourself"></textarea>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn-cancel" onclick="closeApplyModal()">Cancel</button>
          <button type="submit" class="btn-submit">Submit Application</button>
        </div>
      </form>
    </div>
  </div>

  @if(session('success'))
  <div class="toast-notification success">
    {{ session('success') }}
  </div>
  @endif

  <style>
    /* Modal Styles */
    .modal-overlay {
      position: fixed; top: 0; left: 0; width: 100%; height: 100%;
      background: rgba(0,0,0,0.7); display: flex; align-items: center;
      justify-content: center; z-index: 1000; backdrop-filter: blur(5px);
    }
    .modal-content {
      background: #0a1118; border: 1px solid #1a2a3a; padding: 30px;
      border-radius: 15px; width: 90%; max-width: 500px; color: white;
      box-shadow: 0 10px 30px rgba(0,0,0,0.5);
    }
    .modal-header {
      display: flex; justify-content: space-between; align-items: center;
      margin-bottom: 20px; border-bottom: 1px solid #1a2a3a; padding-bottom: 15px;
    }
    .modal-header h2 { margin: 0; font-size: 1.5rem; color: #00ffd5; }
    .close-modal {
      background: none; border: none; color: white; font-size: 2rem; cursor: pointer;
    }
    .form-group { margin-bottom: 15px; }
    .form-group label { display: block; margin-bottom: 5px; font-size: 0.9rem; color: #a0aec0; }
    .form-group input, .form-group textarea {
      width: 100%; padding: 10px; border-radius: 8px; border: 1px solid #1a2a3a;
      background: #050a0f; color: white; font-size: 1rem;
    }
    .modal-footer {
      display: flex; justify-content: flex-end; gap: 10px; margin-top: 20px;
    }
    .btn-cancel {
      padding: 10px 20px; border-radius: 8px; border: 1px solid #34495e;
      background: transparent; color: white; cursor: pointer;
    }
    .btn-submit {
      padding: 10px 20px; border-radius: 8px; border: none;
      background: #00ffd5; color: #0a1118; font-weight: bold; cursor: pointer;
    }
    .btn-submit:hover { background: #00ccaa; }

    /* Toast */
    .toast-notification {
      position: fixed; bottom: 20px; right: 20px; padding: 15px 25px;
      border-radius: 10px; color: white; z-index: 2000; animation: slideIn 0.5s ease-out;
    }
    .toast-notification.success { background: #10b981; }
    @keyframes slideIn { from { transform: translateX(100%); } to { transform: translateX(0); } }
  </style>

  <script>
    function openApplyModal(jobId, jobTitle) {
      document.getElementById('modalCareerId').value = jobId;
      document.getElementById('modalJobTitle').innerText = jobTitle;
      document.getElementById('applyModal').style.display = 'flex';
      document.body.style.overflow = 'hidden';
    }
    function closeApplyModal() {
      document.getElementById('applyModal').style.display = 'none';
      document.body.style.overflow = 'auto';
    }
    // Close on click outside
    window.onclick = function(event) {
      const modal = document.getElementById('applyModal');
      if (event.target == modal) {
        closeApplyModal();
      }
    }
  </script>
</x-guest-layout>