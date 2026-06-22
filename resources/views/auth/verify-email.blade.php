@extends('layouts.guest')

@section('content')

<div class="auth-page">

    <!-- LEFT SIDE -->

    <div class="auth-left">

        <div class="auth-overlay"></div>

        <div class="auth-content">

            <div class="auth-badge">
                ✉️ Email Verification
            </div>

            
            <div class="auth-badge">
           

                <a href="{{ url('/') }}" class="home-btn">

                    <span>

                          🔑 Password Recovery

                    </span>

                </a>
            </div>

            <h1>

                Verify Your
                Email Address

            </h1>

            <p>

                One final step before accessing
                your internship dashboard.
                Please verify your email address
                to activate your account.

            </p>

            <div class="auth-stats">

                <div>
                    <h3>Secure</h3>
                    <span>Account</span>
                </div>

                <div>
                    <h3>Instant</h3>
                    <span>Access</span>
                </div>

                <div>
                    <h3>Verified</h3>
                    <span>Certificate</span>
                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT SIDE -->

    <div class="auth-right">

        <div class="login-card">

            <div class="text-center mb-4">

                <div class="verification-icon">

                    ✉️

                </div>

            </div>

            <div class="login-header text-center">

                <h2>Check Your Inbox</h2>

                <p>

                    We've sent a verification link
                    to your registered email address.

                </p>

            </div>

            @if (session('status') == 'verification-link-sent')

                <div class="alert alert-success">

                    A new verification link has been
                    sent successfully.

                </div>

            @endif

            <div class="verification-info">

                Before getting started, please verify
                your email address by clicking the link
                we just emailed to you.

            </div>

            <form method="POST"
                  action="{{ route('verification.send') }}">

                @csrf

                <button type="submit"
                        class="login-btn">

                    Resend Verification Email

                </button>

            </form>

            <form method="POST"
                  action="{{ route('logout') }}"
                  class="mt-3">

                @csrf

                <button type="submit"
                        class="logout-btn">

                    Logout

                </button>

            </form>

        </div>

    </div>

</div>

@endsection