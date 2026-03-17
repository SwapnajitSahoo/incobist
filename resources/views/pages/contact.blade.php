<x-guest-layout>

  <x-slot name="title">CONTACT</x-slot>

  <!-- =========== hero section start ========= -->
  <section class="contact-hero">
    <div class="career-heading">
      <h1>CONTACT US</h1>
      <hr class="career-line">
      <p class="career-subtitle">At Incobist we are more than just an IT solutions provider - we are your dedicated
        partners in the journey of technological advancement and business success</p>
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
  <div class="contact-overlay">
    <div class="contact-section">
      <div class="contact-cards">
        <div class="contact-title">GET IN TOUCH</div>
        <div class="contact-card-holder">
          <div class="contact-card">
            <div class="contact-icon"><img src="{{ asset('asset/image/bg/location.png') }}" alt=""></div>
            <div class="contact-card-info">
              <h3>Office Location</h3>
              <p>Chandrashekarpur, Damana</p>
              <p>Pin - 751025</p>
              <a href="#">Direction →</a>
            </div>
          </div>

          <div class="contact-card">
            <div class="contact-icon"><img src="{{ asset('asset/image/bg/hour.png') }}" alt=""></div>
            <div class="contact-card-info">
              <h3>Working hours</h3>
              <p>Chandrashekarpur, Damana</p>
              <p>Pin - 751025</p>
              <a href="#">Learn more →</a>
            </div>
          </div>

          <div class="contact-card">
            <div class="contact-icon"><img src="{{ asset('asset/image/bg/communication.png') }}" alt=""></div>
            <div class="contact-card-info">
              <h3>Communication</h3>
              <p>Chandrashekarpur, Damana</p>
              <p>Pin - 751025</p>
              <a href="#">Support →</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!-- ============ Contact Form SECTION START ============ -->
  <section class="contact-form-section" style="background-color: #000000; padding: 40px 0;">
    <div class="contact-us-container">

      <div class="contact-left">
        <h1>CONTACT US</h1>
        <p>
          At Incobist we are more than just an IT solutions provider - we are your dedicated partners in the journey of
          technological advancement and business success
        </p>
      </div>

      <form id="submitForm" method="POST" action="{{ route('contact.submit') }}">
        @csrf
        <div class="contact-right">
          <label for="name">Your Name</label>
          <div class="input-wrapper">
            <input type="text" id="name" name="name" placeholder="Jhon Doe" required="" />
          </div>

          <label for="email">Your Mail ID</label>
          <div class="input-wrapper">
            <input type="email" id="email" name="email" placeholder="jhondoe@gmail.com" required="" />
          </div>


          <label for="phone">Your Phone no</label>
          <div class="input-wrapper">
            <input type="text" id="phone" name="mobile" placeholder="213138848293" required="" />
          </div>

          <button type="submit" data-animation="fadeInRight"
            data-delay=".8s" id="submitBtn" name="submit-form">
            <span>Contact Us<i class="fa fa-spinner fa-spin" id="submitSpin"
                style="display:none;"></i></span></button>
        </div>
      </form>
    </div>
  </section>
  <!-- ==================== Location section start ===================== -->

  <section class="our-location" style="background-color: #000000;">
    <h1 style="color: white;">Our Location</h1>
    <div class="map-container">
      <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3741.416765293765!2d85.81673627413554!3d20.324394581154493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a19090813820d91%3A0xe02b7b9f641b353b!2sINCOBIST!5e0!3m2!1sen!2sin!4v1747806485812!5m2!1sen!2sin"
        width="100%" height="600" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>"

      </iframe>
    </div>
  </section>


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
      <form id="submitForm1" method="POST" action="{{ route('project.form') }}">
      @csrf
        <div class="project-right">
          <label for="name">Your Name</label>
          <div class="input-wrapper">
            <input type="text" id="name" name="name" placeholder="Jhon Doe" required="" />
          </div>
          <label for="email">Your Mail ID</label>
          <div class="input-wrapper">
            <input type="email" id="email" name="email" placeholder="jhondoe@gmail.com" required="" />
          </div>
          <label for="phone">Your Phone no</label>
          <div class="input-wrapper">
            <input type="tel" id="phone" name="mobile" placeholder="213138848293" required="" />
          </div>
          <label for="email">Subject</label>
          <div class="input-wrapper">
            <input type="text" id="email" name="subject" placeholder="for education/ Business" required="" />
          </div>
          <div class="message-container">
            <label for="message">Message</label>
            <textarea id="message" name="msg" placeholder="write about the topic you want to discuss"></textarea>
          </div>
          <div class="project-button-container">
            <button type="submit" class="project-button" data-animation="fadeInRight"
              data-delay=".8s" id="submitBtn1" name="submit-form">
              <span>Send<i class="fa fa-spinner fa-spin" id="submitSpin1"
                  style="display:none;"></i></span></button>
          </div>
        </div>
      </form>
    </div>
  </div>

  @push('scripts')
  <script>
    $('#submitForm').submit(function(e) {

      e.preventDefault();

      $('#submitSpin').show();
      $('#submitBtn').prop('disabled', true);

      $.ajax({
        url: "{{ route('contact.submit') }}",
        type: "POST",
        data: $(this).serialize(),

        success: function(response) {

          $('#submitSpin').hide();
          $('#submitBtn').prop('disabled', false);

          if (response.status) {
            toastr.success(response.message);
            $('#submitForm')[0].reset();
          } else {
            toastr.error(response.message);
          }

        },

        error: function(xhr) {

          $('#submitSpin').hide();
          $('#submitBtn').prop('disabled', false);

          if (xhr.status === 422) {
            $.each(xhr.responseJSON.errors, function(key, value) {
              toastr.error(value[0]);
            });
          } else {
            toastr.error("Something went wrong");
          }

        }

      });

    });



    $('#submitForm1').submit(function(e){

    e.preventDefault();

    $('#submitSpin1').show();
    $('#submitBtn1').prop('disabled', true);

    $.ajax({
        url: $(this).attr('action'),
        type: "POST",
        data: $(this).serialize(),

        success:function(response){

            $('#submitSpin1').hide();
            $('#submitBtn1').prop('disabled', false);

            if(response.status){
                toastr.success(response.message);
                $('#submitForm1')[0].reset();
            }else{
                toastr.error(response.message);
            }

        },

        error:function(xhr){

            $('#submitSpin1').hide();
            $('#submitBtn1').prop('disabled', false);

            if(xhr.status === 422){
                $.each(xhr.responseJSON.errors,function(key,value){
                    toastr.error(value[0]);
                });
            }else{
                toastr.error("Something went wrong");
            }

        }

    });

});
  </script>
  @endpush
</x-guest-layout>