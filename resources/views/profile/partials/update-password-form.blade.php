<section class="p-3">
    <header class="mb-4">
        <h5 class="fw-bold mb-1">
            {{ __('Update Password') }}
        </h5>

        <p class="mb-0 small text-muted">
            {{ __('Ensure your account is using a long, random password to stay secure.') }}
        </p>
    </header>

    <form method="post" action="{{ route('password.update') }}" class="mt-4">
        @csrf
        @method('put')

        <div class="mb-4">
            <label class="form-label fw-bold small text-muted text-uppercase mb-1" for="update_password_current_password">Current Password</label>
            <input id="update_password_current_password" name="current_password" type="password" 
                class="form-control form-control-lg border-0 bg-light-transparent" autocomplete="current-password">
            @if($errors->updatePassword->get('current_password'))
                <div class="text-danger small mt-1">@foreach($errors->updatePassword->get('current_password') as $m) {{ $m }} @endforeach</div>
            @endif
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold small text-muted text-uppercase mb-1" for="update_password_password">New Password</label>
            <input id="update_password_password" name="password" type="password" 
                class="form-control form-control-lg border-0 bg-light-transparent" autocomplete="new-password">
             @if($errors->updatePassword->get('password'))
                <div class="text-danger small mt-1">@foreach($errors->updatePassword->get('password') as $m) {{ $m }} @endforeach</div>
            @endif
        </div>

        <div class="mb-4">
            <label class="form-label fw-bold small text-muted text-uppercase mb-1" for="update_password_password_confirmation">Confirm Password</label>
            <input id="update_password_password_confirmation" name="password_confirmation" type="password" 
                class="form-control form-control-lg border-0 bg-light-transparent" autocomplete="new-password">
            @if($errors->updatePassword->get('password_confirmation'))
                <div class="text-danger small mt-1">@foreach($errors->updatePassword->get('password_confirmation') as $m) {{ $m }} @endforeach</div>
            @endif
        </div>

        <div class="d-flex align-items-center gap-3">
            <button type="submit" class="btn btn-primary btn-lg shadow-sm px-4 fw-bold shadow-hover">
                {{ __('Update Password') }}
            </button>

            @if (session('status') === 'password-updated')
                <div class="alert alert-success border-0 shadow-sm mb-0 p-2 px-3 small rounded-pill d-flex align-items-center" 
                    id="password-saved-alert">
                    <i class="fe fe-check-circle me-1"></i> {{ __('Saved.') }}
                </div>
                <script>
                    setTimeout(() => {
                        const alert = document.getElementById('password-saved-alert');
                        if (alert) {
                            alert.classList.add('fade-out');
                            setTimeout(() => alert.remove(), 500);
                        }
                    }, 2000);
                </script>
            @endif
        </div>
    </form>
</section>
