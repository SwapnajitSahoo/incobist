<section class="p-3">
    <header class="mb-4">
        <h5 class="fw-bold mb-1 text-danger">
            {{ __('Delete Account') }}
        </h5>

        <p class="mb-0 small text-muted">
            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain.') }}
        </p>
    </header>

    <button type="button" class="btn btn-danger btn-lg shadow-sm px-4 fw-bold" 
        data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
        {{ __('Delete Account') }}
    </button>

    <!-- Modal -->
    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionModalLabel" aria-hidden="true" 
        @if($errors->userDeletion->isNotEmpty()) style="display: block;" @endif>
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content border-0 shadow-lg">
                <form method="post" action="{{ route('profile.destroy') }}" class="p-4">
                    @csrf
                    @method('delete')

                    <div class="modal-header border-0 p-0 mb-3">
                        <h5 class="modal-title fw-bold" id="confirmUserDeletionModalLabel">
                            {{ __('Are you sure you want to delete your account?') }}
                        </h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body p-0">
                        <p class="small text-muted mb-4">
                            {{ __('Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account.') }}
                        </p>

                        <div class="mb-0">
                            <label for="password" class="form-label fw-bold small text-muted text-uppercase mb-1">Confirm Password</label>
                            <input id="password" name="password" type="password" 
                                class="form-control form-control-lg border-0 bg-light" placeholder="Enter your password">
                            @if($errors->userDeletion->get('password'))
                                <div class="text-danger small mt-1">@foreach($errors->userDeletion->get('password') as $m) {{ $m }} @endforeach</div>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer border-0 p-0 mt-4 d-flex justify-content-end gap-2">
                        <button type="button" class="btn btn-outline-secondary px-4 fw-bold" data-bs-dismiss="modal">
                            {{ __('Cancel') }}
                        </button>
                        <button type="submit" class="btn btn-danger px-4 fw-bold">
                            {{ __('Delete Account') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
