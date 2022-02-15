@extends('layouts.auth')
@section('content')


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h4 class="card-title mb-1">Welcome to Staxo Store! 👋</h4>
        <p class="card-text mb-2">Please sign-in to your account and start the adventure</p>

        <form method="POST" action="{{ route('login') }}" class="auth-login-form mt-2">
            @csrf

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
                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900" href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif
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


            <!-- Remember Me -->
            <div class="mb-1">
                <div class="form-check">
                    <input class="form-check-input" name="remember" type="checkbox" id="remember_me" tabindex="3" />
                    <label class="form-check-label" for="remember_me"> Remember Me </label>
                </div>
            </div>

            <div class="flex items-center justify-end mt-4">
                <button class="btn btn-primary w-100" type="submit" tabindex="4">Sign in</button>
            </div>
        </form>

        <p class="text-center mt-2">
            <span>New on our platform?</span>
            <a href="{{route('register')}}">
                <span>Create an account</span>
            </a>
        </p>
@endsection
