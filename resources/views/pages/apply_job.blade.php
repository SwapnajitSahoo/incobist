<x-guest-layout>
    <x-slot name="title">Fill Application</x-slot>

    <!-- =========== career hero section start ========= -->
    <!-- <section class="career-hero"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0,0,0,0.5)), url('{{ asset('asset/image/carrer.png') }}') no-repeat center center/cover; position: relative; height: 600px; display: flex; align-items: center; overflow: hidden; padding: 0 5%;"> -->
    <section class="career-hero" style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0,0,0,0.5)),
    url('{{ asset('asset/image/carrer.png') }}') no-repeat center center/cover;
    position: relative;
    height: 600px;
    display: flex;
    align-items: center;
    overflow: hidden;
    padding: 0 5%;
    margin-bottom: 0;">
        <div class="career-heading" style="position: relative; z-index: 999; max-width: 850px; text-align: left;">
            <h1 style="color: #00F2E2; font-size: 54px; font-weight: 400; margin-bottom: 10px; line-height: 1.2;">
                Fill the Application</h1>
            <hr class="career-line"
                style="width: 100%; height: 1px; background: rgba(0, 242, 226, 0.5); border: none; margin: 20px 0;">

            <div class="job-meta" style="margin-top: 25px; margin-bottom: 45px;">
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                    <i class="fas fa-briefcase" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Applying For:</span> {{ $job->title }}</p>
                </div>
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                    <i class="fas fa-map-marker-alt" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Location:</span> {{ $job->location }}</p>
                </div>
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-tag" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Category:</span> {{ $job->category }}</p>
                </div>
            </div>
        </div>

        <div class="social-icons"
            style="position: absolute; left: 40px; top: 50%; transform: translateY(-50%); z-index: 999; display: flex; flex-direction: column; gap: 20px;">
            <a href="https://www.linkedin.com/company/incobist/?viewAsMember=true"
                style="color: #fff; font-size: 18px; opacity: 0.7; transition: 0.3s;"><i
                    class="fab fa-linkedin-in"></i></a>
            <a href="https://www.twitter.com/incobist2001"
                style="color: #fff; font-size: 18px; opacity: 0.7; transition: 0.3s;"><i class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/incobist"
                style="color: #fff; font-size: 18px; opacity: 0.7; transition: 0.3s;"><i
                    class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/incobist"
                style="color: #fff; font-size: 18px; opacity: 0.7; transition: 0.3s;"><i
                    class="fab fa-facebook-f"></i></a>
            <a href="https://wa.me/9090138408" target="_blank"
                style="color: #fff; font-size: 18px; opacity: 0.7; transition: 0.3s;"><i
                    class="fab fa-whatsapp"></i></a>
            <a href="tel: +91 6744618289" style="color: #fff; font-size: 18px; opacity: 0.7; transition: 0.3s;"><i
                    class="fas fa-phone"></i></a>
        </div>

        <div class="hero-image-overlay"
            style="position: absolute; right: -50px; bottom: 0; z-index: 5; height: 100%; opacity: 1; pointer-events: none;">
            <img src="{{ asset('asset/image/hero-robot.png') }}" alt="Robot Arm"
                style="height: 100%; object-fit: contain; filter: drop-shadow(-20px 0 50px rgba(0,234,255,0.2));">
        </div>
    </section>

    <!-- <div class="career-page-wrapper"
        style="background: #000; min-height: auto; padding: 0; display: flex; flex-direction: column; align-items: center; justify-content: center; clear: both;"> -->
    <div class="career-page-wrapper" style="background: #000;
    min-height: auto;
    padding: 0;
    margin-top: -1px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    clear: both;">
        <div class="container" style="flex: 1;">
            <form action="{{ route('job.apply') }}" method="POST" enctype="multipart/form-data"
                style="max-width: 1000px; margin: 0 auto; display: block; position: relative; z-index: 10;">
                @csrf
                <input type="hidden" name="career_id" value="{{ $job->id }}">

                <div class="apply-card"
                    style="background: transparent; border: 0.5px solid rgba(255, 255, 255, 0.3); border-radius: 12px; padding: 50px; margin: 0 auto; max-width: 1025px; min-height: 599px; display: flex; flex-direction: column; justify-content: center;">
                    <h2 style="color: #fff; font-size: 28px; font-weight: 600; margin-bottom: 40px;">Enter your details
                    </h2>

                    <div class="row" style="display: flex !important; flex-wrap: wrap !important; margin: 0 -15px;">
                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>First Name</label>
                            <div class="input-wrapper">
                                <input type="text" name="first_name" placeholder="John Doe" required>
                            </div>
                        </div>
                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>Last Name</label>
                            <div class="input-wrapper">
                                <input type="text" name="last_name" placeholder="John Doe" required>
                            </div>
                        </div>

                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>Your Mail ID</label>
                            <div class="input-wrapper">
                                <input type="email" name="email" placeholder="jhondoe@gmail.com" required>
                            </div>
                        </div>
                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>Education</label>
                            <div class="input-wrapper">
                                <input type="text" name="education" placeholder="jhondoe@gmail.com" required>
                            </div>
                        </div>

                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>Work Experience</label>
                            <div class="input-wrapper">
                                <input type="text" name="experience" placeholder="213138848293" required>
                            </div>
                        </div>
                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>Your Phone no</label>
                            <div class="input-wrapper">
                                <input type="text" name="phone" placeholder="213138848293" required>
                            </div>
                        </div>

                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>State</label>
                            <div class="input-wrapper">
                                <input type="text" name="state" placeholder="for education/ Business" required>
                            </div>
                        </div>
                        <div class="col-md-6" style="flex: 0 0 50%; max-width: 50%; padding: 0 15px;">
                            <label>District</label>
                            <div class="input-wrapper">
                                <input type="text" name="district" placeholder="for education/ Business" required>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="upload-section"
                    style="background: transparent; border: 0.5px solid rgba(255, 255, 255, 0.3); border-radius: 12px; max-width: 1025px; height: 310px; margin: 0 auto 40px; display: flex; align-items: center; padding: 0 40px;">
                    <div class="row align-items-center"
                        style="display: flex !important; flex-wrap: wrap !important; width: 100%;">
                        <div class="col-md-5" style="flex: 0 0 45%; max-width: 45%; padding: 0 15px;">
                            <label for="resume-upload" class="upload-box"
                                style="background: rgba(36, 71, 97, 0.39); border: 0.5px dashed rgba(255, 255, 255, 0.5); border-radius: 10px; width: 386px; height: 261px; display: flex; flex-direction: column; align-items: center; justify-content: center; text-align: center; cursor: pointer; transition: 0.3s; position: relative; z-index: 50; margin: 0 auto;">
                                <div class="upload-btn-ui"
                                    style="background: #2D4D65; padding: 12px 30px; border-radius: 6px; display: flex; align-items: center; gap: 12px; margin-bottom: 15px;">
                                    <i class="fas fa-upload" style="color: #fff; font-size: 18px;"></i>
                                    <span
                                        style="color: #fff; font-size: 18px; font-weight: 600; letter-spacing: 1px;">UPLOAD</span>
                                </div>
                                <p id="upload-text" style="color: rgba(255,255,255,0.7); font-size:14px; margin:0;">
                                    Upload or drag and drop file here.</p>
                            </label>
                            <input type="file" id="resume-upload" name="resume" required style="display:none;">
                        </div>
                        <div class="col-md-7" style="flex: 0 0 55%; max-width: 55%; padding: 0 15px;">
                            <div class="requirements"
                                style="color: rgba(255,255,255,0.7); font-size: 14px; line-height: 1.8;">
                                <h4 style="color: #fff; font-size: 16px; margin-bottom: 15px; font-weight: 600;">
                                    Document Upload Requirements:</h4>
                                <ul style="list-style: none; padding-left: 0; margin: 0;">
                                    <li class="mb-1 d-flex align-items-start"><span
                                            style="color: #fff; margin-right: 10px;">•</span> Accepted formats: PDF,
                                        DOC, DOCX, JPG, PNG</li>
                                    <li class="mb-1 d-flex align-items-start"><span
                                            style="color: #fff; margin-right: 10px;">•</span> Maximum file size: 5MB per
                                        document</li>
                                    <li class="mb-1 d-flex align-items-start"><span
                                            style="color: #fff; margin-right: 10px;">•</span> Images must be clear and
                                        readable at 300+ DPI</li>
                                    <li class="mb-1 d-flex align-items-start"><span
                                            style="color: #fff; margin-right: 10px;">•</span> No executable files (.exe)
                                        or archives (.zip)</li>
                                    <li class="mb-1 d-flex align-items-start"><span
                                            style="color: #fff; margin-right: 10px;">•</span> Required documents:
                                        Resume/CV</li>
                                    <li class="mb-1 d-flex align-items-start"><span
                                            style="color: #fff; margin-right: 10px;">•</span> All files scanned for
                                        viruses automatically</li>
                                    <li class="mb-1 d-flex align-items-start"><span
                                            style="color: #fff; margin-right: 10px;">•</span> Contact support for
                                        technical issues</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div style="display: flex; justify-content: flex-end; position: relative; z-index: 10;">
                    <button type="submit"
                        style="background: #00BAAE; border: none; padding: 12px 40px; margin-bottom: 10px; min-width: 200px; border-radius: 8px; color: #fff; font-size: 18px; font-weight: 600; cursor: pointer; transition: 0.3s; box-shadow: 0 4px 15px rgba(0, 186, 174, 0.3); text-transform: none; letter-spacing: 0.5px;">
                        Submit Application
                    </button>
                </div>
            </form>
        </div>
    </div>

    <style>
        .apply-card label {
            color: white;
            margin-bottom: 8px;
            font-size: 18px;
            display: block;
        }

        .input-wrapper {
            padding: 1px;
            background: linear-gradient(to bottom, #02191b, #3a5e60);
            border-radius: 8px;
            margin-bottom: 25px;
        }

        .input-wrapper input {
            width: 100%;
            padding: 12px 18px;
            background: linear-gradient(to bottom, #061113, #002123);
            border: none;
            border-radius: 8px;
            color: #fff;
            font-size: 16px;
            outline: none;
            transition: 0.3s;
        }

        .input-wrapper input:focus {
            background: linear-gradient(to bottom, #081a1c, #002c30);
            box-shadow: 0 0 10px rgba(0, 234, 255, 0.1);
        }

        .upload-box:hover {
            border-color: #00eaff;
            background: rgba(0, 234, 255, 0.08);
            transform: translateY(-2px);
        }

        button[type="submit"]:hover {
            transform: translateY(-2px);
            background: #00cfc2;
            box-shadow: 0 6px 20px rgba(0, 186, 174, 0.4);
        }

        .social-icons a:hover {
            color: #00eaff !important;
            opacity: 1 !important;
            transform: scale(1.2);
        }

        @media (max-width: 768px) {

            .col-md-6,
            .col-md-5,
            .col-md-7 {
                flex: 0 0 100% !important;
                max-width: 100% !important;
            }

            .social-icons,
            .hero-image-overlay {
                display: none !important;
            }

            .career-heading h1 {
                font-size: 38px !important;
            }

            .apply-card,
            .upload-section {
                padding: 25px !important;
                height: auto !important;
            }
        }
    </style>

    <script>
        document.getElementById('resume-upload').addEventListener('change', function () {
            if (this.files.length > 0) {
                document.getElementById('upload-text').innerText = this.files[0].name;
            }
        });
    </script>
</x-guest-layout>