<section class="p-3">
    <header class="mb-4">
        <h5 class="fw-bold mb-1">
            {{ __('Profile Information') }}
        </h5>

        <p class="mb-0 small text-muted">
            {{ __("Update your account's profile information and email address.") }}
        </p>
    </header>

    <form id="send-verification" method="post" action="{{ route('verification.send') }}">
        @csrf
    </form>

    <form method="post" action="{{ route('profile.update') }}" class="mt-4">
        @csrf
        @method('patch')

        <div class="mb-4">
            <label class="form-label fw-bold small text-muted text-uppercase mb-1" for="name">Name</label>
            <input id="name" name="name" type="text" class="form-control form-control-lg border-0 bg-light-transparent" 
                value="{{ old('name', $user->name) }}" required autofocus autocomplete="name">
            @if($errors->get('name'))
                <div class="text-danger small mt-1">@foreach($errors->get('name') as $m) {{ $m }} @endforeach</div>
            @endif
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold small text-muted text-uppercase mb-1" for="email">Email Address</label>
            <input id="email" name="email" type="email" class="form-control form-control-lg border-0 bg-light-transparent" 
                value="{{ old('email', $user->email) }}" required autocomplete="username">
            @if($errors->get('email'))
                <div class="text-danger small mt-1">@foreach($errors->get('email') as $m) {{ $m }} @endforeach</div>
            @endif

            @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                <div class="mt-3 p-3 bg-light rounded shadow-sm border-start border-warning border-4">
                    <p class="mb-0 small">
                        {{ __('Your email address is unverified.') }}
                        <button form="send-verification" class="btn btn-link btn-sm p-0 mb-1 fw-bold text-decoration-underline">
                            {{ __('Click here to re-send the verification email.') }}
                        </button>
                    </p>

                    @if (session('status') === 'verification-link-sent')
                        <p class="mt-1 small fw-bold text-success">
                            {{ __('A new verification link has been sent to your email address.') }}
                        </p>
                    @endif
                </div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary btn-lg shadow-sm px-4 fw-bold shadow-hover">
                {{ __('Save Changes') }}
            </button>

            @if (session('status') === 'profile-updated')
                <div class="alert alert-success border-0 shadow-sm mb-0 p-2 px-3 small rounded-pill d-flex align-items-center" 
                    id="profile-saved-alert">
                    <i class="fe fe-check-circle me-1"></i> {{ __('Saved.') }}
                </div>
                <script>
                    setTimeout(() => {
                        const alert = document.getElementById('profile-saved-alert');
                        if (alert) {
                            alert.classList.add('fade-out');
                            setTimeout(() => alert.remove(), 500);
                        }
                    }, 2000);
                </script>
                <style>
                    .fade-out { opacity: 0; transition: opacity 0.5s ease; }
                    .shadow-hover:hover { transform: translateY(-3px); transition: transform 0.3s ease; box-shadow: 0 4px 15px rgba(0,0,0,0.1) !important; }
                    .bg-light-transparent { background-color: #f8f9fc !important; border: 1px solid #e3e6f0 !important; }
                    .bg-light-transparent:focus { background-color: #fff !important; box-shadow: 0 0 0 0.25rem rgba(115,103,240,0.1); }
                </style>
            @endif
        </div>
    </form>
</section>
