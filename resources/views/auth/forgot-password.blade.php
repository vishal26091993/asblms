@extends('layouts.guest')

@section('content')

<div class="auth-page">

    <!-- LEFT SIDE -->

    <div class="auth-left">

        <div class="auth-overlay"></div>

        <div class="auth-content">

            <div class="auth-badge">
                🔐 Account Recovery
            </div>

            <h1>

                Forgot Your
                Password?

            </h1>

            <p>

                Don't worry. Enter your registered
                email address and we'll send you
                a secure password reset link.

            </p>

            <div class="auth-stats">

                <div>
                    <h3>100%</h3>
                    <span>Secure</span>
                </div>

                <div>
                    <h3>24/7</h3>
                    <span>Support</span>
                </div>

                <div>
                    <h3>5 Min</h3>
                    <span>Recovery</span>
                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT SIDE -->

    <div class="auth-right">

        <div class="login-card">

            <div class="login-header">

                <h2>Reset Password</h2>

                <p>

                    Enter your email address and we'll
                    send you a password reset link.

                </p>

            </div>

            <x-auth-session-status
                class="mb-4"
                :status="session('status')" />

            <form method="POST"
                  action="{{ route('password.email') }}">

                @csrf

                <div class="form-group">

                    <label>Email Address</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control"
                        placeholder="Enter registered email"
                        required
                        autofocus>

                    @error('email')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <button
                    type="submit"
                    class="login-btn mt-4">

                    Send Reset Link

                </button>

                <div class="register-link">

                    Remember your password?

                    <a href="{{ route('login') }}">
                        Back to Login
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection