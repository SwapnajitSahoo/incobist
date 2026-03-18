<x-app-layout>
<div class="container-fluid px-4 mt-4">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0">Profile Management</h4>
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0">
                <li class="breadcrumb-item"><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <div class="col-lg-8">
            {{-- Update Profile Info --}}
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white border-bottom py-3">
                    <h5 class="card-title mb-0 fw-bold">Update Profile Information</h5>
                </div>
                <div class="card-body p-4">
                    <div class="max-w-xl">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
            </div>

            {{-- Update Password --}}
            <div class="card shadow-sm border-0 mb-4">
                <div class="card-header bg-white border-bottom py-3">
                    <h5 class="card-title mb-0 fw-bold">Update Password</h5>
                </div>
                <div class="card-body p-4">
                    <div class="max-w-xl">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
            </div>

            {{-- Delete Account --}}
            <div class="card shadow-sm border-0 mb-5 border-top border-danger border-4">
                <div class="card-header bg-white border-bottom py-3">
                    <h5 class="card-title mb-0 text-danger fw-bold">Delete Account</h5>
                </div>
                <div class="card-body p-4">
                    <div class="max-w-xl">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>

        <div class="col-lg-4">
            <div class="card shadow-sm border-0 mb-4 bg-primary text-white overflow-hidden">
                <div class="card-body p-4 position-relative">
                    <div style="opacity: 0.1; position: absolute; top: -10px; right: -10px; font-size: 100px;">
                        <i class="fe fe-user"></i>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <div class="avatar bg-white-transparent p-1 rounded-circle me-3" style="width: 60px; height: 60px;">
                             <img src="https://ui-avatars.com/api/?name={{ urlencode($user->name) }}&background=fff&color=7367f0" class="rounded-circle w-100 h-100" alt="Avatar">
                        </div>
                        <div>
                            <h5 class="mb-0 fw-bold">{{ $user->name }}</h5>
                            <p class="mb-0 small opacity-75 text-white">{{ $user->email }}</p>
                        </div>
                    </div>
                    <p class="mb-0 small">Account created on {{ $user->created_at->format('M d, Y') }}</p>
                </div>
            </div>

            <div class="card shadow-sm border-0">
                <div class="card-body p-4">
                    <h6 class="fw-bold mb-3 small text-uppercase text-muted">Quick Settings</h6>
                    <ul class="list-group list-group-flush small">
                        <li class="list-group-item px-0 py-2 border-top-0 d-flex justify-content-between align-items-center">
                            Two-Factor Authentication
                            <span class="badge bg-light text-muted">Disabled</span>
                        </li>
                        <li class="list-group-item px-0 py-2 d-flex justify-content-between align-items-center">
                            Email Notifications
                            <span class="badge bg-success">Active</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
</x-app-layout>
