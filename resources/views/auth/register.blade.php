@extends('layouts.auth')
@section('content')


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h4 class="card-title mb-1">Welcome to Staxo Store! 👋</h4>
        <p class="card-text mb-2">Please sign-up for an  account and get spending lol.</p>

        <form method="POST" action="{{ route('register') }}" class="auth-login-form mt-2">
            @csrf

            <!-- Username -->
                <div class="mb-1">
                    <label for="name" class="form-label">Username</label>
                    <input
                        type="text"
                        class="form-control"
                        id="name"
                        name="name"
                        required
                        placeholder="Allanstack101"
                        aria-describedby="name"
                        tabindex="1"
                        autofocus
                    />
                </div>


            <!-- Email Address -->
            <div class="mb-1">
                <label for="login-email" class="form-label">Email</label>
                <input
                    type="email"
                    class="form-control"
                    id="login-email"
                    name="email"
                    value="{{old('email')}}"
                    required
                    placeholder="john@example.com"
                    aria-describedby="login-email"
                    tabindex="1"
                    autofocus
                />
            </div>

            <!-- Password -->
            <div class="mb-1">
                <div class="d-flex justify-content-between">
                    <label class="form-label" for="password">Password</label>
                </div>

                <div class="input-group input-group-merge form-password-toggle">
                   <input
                        class="form-control form-control-merge"
                        id="password"
                        type="password"
                        name="password"
                        required
                        autocomplete="current-password"
                        tabindex="2"
                        placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                        aria-describedby="password"
                    />
                    <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                </div>
            </div>

            <!-- Confirm Password -->
            <div class="mb-1">
                    <div class="d-flex justify-content-between">
                        <label class="form-label" for="password_confirmation">Confirm Password</label>
                    </div>

                    <div class="input-group input-group-merge form-password-toggle">
                       <input
                            class="form-control form-control-merge"
                            id="password_confirmation"
                            type="password"
                            name="password_confirmation"
                            required
                            tabindex="2"
                            placeholder="&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;&#xb7;"
                            aria-describedby="password"
                        />
                        <span class="input-group-text cursor-pointer"><i data-feather="eye"></i></span>
                    </div>
                </div>


                <div class="flex items-center justify-end mt-4">
                <div class="mb-1">
                    <div class="form-check">
                        <input class="form-check-input" checked type="checkbox" id="register-privacy-policy"  required tabindex="4" />
                        <label class="form-check-label" for="register-privacy-policy">
                            I agree to <a href="#">privacy policy & terms</a>
                        </label>
                    </div>
                </div>
                <button class="btn btn-primary w-100" type="submit" tabindex="4">Sign Up</button>
            </div>
        </form>


        <p class="text-center mt-2">
            <span>Already have an account?</span>
            <a href="{{route('login')}}">
                <span>Sign in instead</span>
            </a>
        </p>

    <!-- BEGIN: Page JS-->
    <script src="{{asset('app-assets/js/scripts/pages/page-auth-register.min.js')}}"></script>
    <!-- END: Page JS-->
@endsection
