<x-guest-login-layout>
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="">
                    <div class="text-white">
                        <div class="card-body">
                            <h2 class="display-4 mb-2 font-weight-bold error-text text-center"><strong>Login</strong></h2>
                            <h4 class="text-white-80 mb-7 text-center">Sign In to your account</h4>
                            <form method="POST" action="{{ route('login') }}">
                                @csrf

                                <div class="row">
                                    <div class="col-9 d-block mx-auto">

                                        <!-- Email -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fe fe-user"></i>
                                                </div>
                                            </div>
                                            <input
                                                type="email"
                                                class="form-control"
                                                name="email"
                                                value="{{ old('email') }}"
                                                placeholder="Email"
                                                required
                                                autofocus>
                                        </div>

                                        @error('email')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                        <!-- Password -->
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <div class="input-group-text">
                                                    <i class="fe fe-lock"></i>
                                                </div>
                                            </div>
                                            <input
                                                type="password"
                                                class="form-control"
                                                name="password"
                                                placeholder="Password"
                                                required>
                                        </div>

                                        @error('password')
                                        <span class="text-danger">{{ $message }}</span>
                                        @enderror


                                        <!-- Remember me -->
                                        <div class="form-group mb-3">
                                            <label>
                                                <input type="checkbox" name="remember"> Remember Me
                                            </label>
                                        </div>


                                        <div class="row">
                                            <div class="col-12">
                                                <button type="submit" class="btn btn-secondary btn-block px-4">
                                                    Login
                                                </button>
                                            </div>

                                            <!-- <div class="col-12 text-center mt-2">
                                                @if (Route::has('password.request'))
                                                <a href="{{ route('password.request') }}"
                                                    class="btn btn-link box-shadow-0 px-0 text-white-80">
                                                    Forgot password?
                                                </a>
                                                @endif
                                            </div> -->
                                        </div>

                                    </div>
                                </div>
                            </form>
                            <!-- <div class="text-center pt-4">
                                <div class="font-weight-normal fs-16">You Don't have an account <a class="btn-link font-weight-normal text-white-80" href="#">Register Here</a></div>
                            </div> -->
                        </div>
                        <div class="custom-btns text-center">
                            <button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-facebook-f"></i></span></button>
                            <button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-google"></i></span></button>
                            <button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-twitter"></i></span></button>
                            <button class="btn btn-icon" type="button"><span class="btn-inner-icon"><i class="fa fa-pinterest-p"></i></span></button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6 d-none d-md-flex align-items-center">
                <img src="{{ asset('asset/admin/images/png/login.png') }}" alt="img">
            </div>
        </div>
    </div>
</x-guest-login-layout>