@extends('layouts.guest')

@section('content')

<div class="auth-page">

    <!-- LEFT SIDE -->

    <div class="auth-left">

        <div class="auth-overlay"></div>

        <div class="auth-content">

            <div class="auth-badge">
           

                <a href="{{ url('/') }}" class="home-btn">

                    <span>

                          🔑 Password Recovery

                    </span>

                </a>
            </div>

            <h1>

                Create Your
                New Password

            </h1>

            <p>

                Your account security is important.
                Choose a strong password to continue
                your internship journey safely.

            </p>

            <div class="auth-stats">

                <div>
                    <h3>256-bit</h3>
                    <span>Security</span>
                </div>

                <div>
                    <h3>100%</h3>
                    <span>Protected</span>
                </div>

                <div>
                    <h3>24/7</h3>
                    <span>Access</span>
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

                    Enter your new password below
                    to regain access to your account.

                </p>

            </div>

            <form method="POST"
                  action="{{ route('password.store') }}">

                @csrf

                <!-- TOKEN -->

                <input type="hidden"
                       name="token"
                       value="{{ $request->route('token') }}">

                <!-- EMAIL -->

                <div class="form-group">

                    <label>Email Address</label>

                    <input type="email"
                           name="email"
                           value="{{ old('email', $request->email) }}"
                           class="form-control"
                           readonly>

                    @error('email')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- PASSWORD -->

                <div class="form-group mt-4">

                    <label>New Password</label>

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Enter new password"
                           required>

                    @error('password')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- CONFIRM PASSWORD -->

                <div class="form-group mt-4">

                    <label>Confirm Password</label>

                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           placeholder="Confirm new password"
                           required>

                    @error('password_confirmation')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <button type="submit"
                        class="login-btn mt-4">

                    Reset Password

                </button>

                <div class="register-link">

                    Remembered your password?

                    <a href="{{ route('login') }}">
                        Back to Login
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection