@extends('layouts.auth')
@section('content')


        <!-- Session Status -->
        <x-auth-session-status class="mb-4" :status="session('status')" />

        <!-- Validation Errors -->
        <x-auth-validation-errors class="mb-4" :errors="$errors" />

        <h4 class="card-title mb-1">Welcome to Staxo Store! 👋</h4>

        <div class="mb-4 text-sm text-gray-600">
            <p class="card-text mb-2">{{ __('Forgot your password? No problem. Just let us know your email address and we will email you a password reset link that will allow you to choose a new one.') }}
            </p>
        </div>
        <form class="auth-forgot-password-form mt-2" action="{{route('password.email')}}" method="POST">
            @csrf
            <div class="mb-1">
                <label for="forgot-password-email" class="form-label">Email</label>
                <input
                    type="text"
                    class="form-control"
                    id="forgot-password-email"
                    name="email"
                    placeholder="john@example.com"
                    aria-describedby="forgot-password-email"
                    tabindex="1"
                    autofocus
                />
            </div>
            <button class="btn btn-primary w-100" tabindex="2">Send reset link</button>
        </form>

        <p class="text-center mt-2">
            <a href="{{route('login')}}"> <i data-feather="chevron-left"></i> Back to login </a>
        </p>

@endsection
