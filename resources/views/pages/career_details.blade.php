<x-guest-layout>
    <x-slot name="title">{{ $job->title }} - Career Details</x-slot>

    <!-- =========== career hero section start ========= -->
    <section class="career-hero"
        style="background: linear-gradient(rgba(0, 0, 0, 0.4), rgba(0,0,0,0.5)), url('{{ asset('asset/image/carrer.png') }}') no-repeat center center/cover; position: relative; height: 200px; display: flex; align-items: center; overflow: hidden; padding: 0 5%;">

        <div class="career-heading" style="position: relative; z-index: 999; max-width: 850px; text-align: left;">
            <h1 style="color: #00F2E2; font-size: 54px; font-weight: 400; margin-bottom: 10px; line-height: 1.2;">
                {{ $job->title }}
            </h1>

            <div class="job-meta" style="margin-top: 25px; margin-bottom: 45px;">
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                    <i class="fas fa-map-marker-alt" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Location:</span> {{ $job->location }}</p>
                </div>
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                    <i class="fas fa-tag" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Category:</span> {{ $job->category }}</p>
                </div>
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                    <i class="fas fa-briefcase" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Job Type:</span> {{ $job->type ?? 'Full Time' }}</p>
                </div>
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px; margin-bottom: 12px;">
                    <i class="fas fa-users" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Positions:</span> {{ $job->positions ?? '1' }}
                        Openings</p>
                </div>
                <div class="meta-item" style="display: flex; align-items: center; gap: 15px;">
                    <i class="fas fa-calendar-alt" style="color: #00F2E2; font-size: 20px; width: 25px;"></i>
                    <p style="color: rgba(255,255,255,0.9); font-size: 19px; margin: 0;"><span
                            style="color: rgba(255,255,255,0.6);">Posted:</span>
                        {{ \Carbon\Carbon::parse($job->posted_at)->format('d M, Y') }}</p>
                </div>
            </div>

            <a href="{{ route('career.apply', $job->id) }}" class="apply-btn-hero"
                style="background: #00BAAE; color: #fff; padding: 15px 50px; border-radius: 8px; font-size: 18px; font-weight: 600; text-decoration: none; display: inline-block; transition: 0.3s; box-shadow: 0 4px 20px rgba(0, 186, 174, 0.4); text-transform: none; letter-spacing: 0.5px;">
                Apply Now
            </a>
        </div>

        <div class="social-icons"
            style="position: absolute; left: 40px; top: 50%; transform: translateY(-50%); z-index: 999; display: flex; flex-direction: column; gap: 20px;">
            <a href="https://www.linkedin.com/company/incobist/?viewAsMember=true"
                style="color: #fff; font-size: 18px; opacity: 0.7;"><i class="fab fa-linkedin-in"></i></a>
            <a href="https://www.twitter.com/incobist2001" style="color: #fff; font-size: 18px; opacity: 0.7;"><i
                    class="fab fa-twitter"></i></a>
            <a href="https://www.instagram.com/incobist" style="color: #fff; font-size: 18px; opacity: 0.7;"><i
                    class="fab fa-instagram"></i></a>
            <a href="https://www.facebook.com/incobist" style="color: #fff; font-size: 18px; opacity: 0.7;"><i
                    class="fab fa-facebook-f"></i></a>
        </div>

        <div class="hero-image-overlay"
            style="position: absolute; right: -50px; bottom: 0; z-index: 5; height: 100%; pointer-events: none;">
            <img src="{{ asset('asset/image/hero-robot.png') }}" alt="Robot Arm"
                style="height: 100%; object-fit: contain; filter: drop-shadow(-20px 0 50px rgba(0,234,255,0.2));">
        </div>
    </section>

    <div class="career-details-content" style="background: #000; padding: 20px 10% 100px 10%; min-height: 500px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <div class="description-wrapper" style="max-width: 1000px; margin: 0 auto;">
                        <h2
                            style="color: #00F2E2; font-size: 48px; font-weight: 400; margin-bottom: 20px; text-align: center; font-family: 'Exo 2', sans-serif;">
                            Role Description</h2>
                        <hr
                            style="width: 100%; height: 1px; background: rgba(0, 242, 226, 0.3); border: none; margin-bottom: 50px;">

                        <div class="description-text"
                            style="color: rgba(255,255,255,0.9); font-size: 20px; line-height: 1.8; text-align: left; margin-bottom: 80px;">
                            {!! nl2br(e($job->description)) !!}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        .apply-btn-hero:hover {
            transform: translateY(-3px);
            background: #00cfc2 !important;
            box-shadow: 0 8px 25px rgba(0, 186, 174, 0.5) !important;
        }

        .social-icons a:hover {
            color: #00eaff !important;
            opacity: 1 !important;
            transform: scale(1.2);
            transition: 0.3s;
        }

        @media (max-width: 768px) {
            .career-heading h1 {
                font-size: 36px !important;
            }

            .social-icons,
            .hero-image-overlay {
                display: none !important;
            }

            .career-details-content h2 {
                font-size: 32px !important;
            }
        }
    </style>
</x-guest-layout>