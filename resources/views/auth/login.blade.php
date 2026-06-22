@extends('layouts.guest')

@section('content')

<div class="auth-page">

    <!-- Left Side -->

    <div class="auth-left">

        <div class="auth-overlay"></div>

        <div class="auth-content">

            <div class="auth-badge">
           

                <a href="{{ url('/') }}" class="home-btn">

                    <span>

                         🚀 ASB InternSphere

                    </span>

                </a>
            </div>

            <h1>

                Welcome Back
                Future Professional

            </h1>

            <p>

                Continue your internship journey,
                track progress, complete projects
                and unlock new opportunities.

            </p>

            <div class="auth-stats">

                <div>

                    <h3>5000+</h3>

                    <span>Students</span>

                </div>

                <div>

                    <h3>150+</h3>

                    <span>Mentors</span>

                </div>

                <div>

                    <h3>95%</h3>

                    <span>Success Rate</span>

                </div>

            </div>

        </div>

    </div>

    <!-- Right Side -->

    <div class="auth-right">

        <div class="login-card">

            <div class="login-header">

                <h2>Sign In</h2>

                <p>
                    Access your internship dashboard
                </p>

            </div>

            <x-auth-session-status
                class="mb-4"
                :status="session('status')" />

            <form method="POST"
                  action="{{ route('login') }}">

                @csrf

                <!-- Email -->

                <div class="form-group">

                    <label>Email Address</label>

                    <input
                        type="email"
                        name="email"
                        value="{{ old('email') }}"
                        class="form-control"
                        placeholder="Enter email"
                        required>

                    <x-input-error
                        :messages="$errors->get('email')"
                        class="mt-2" />

                </div>

                <!-- Password -->

                <div class="form-group mt-4">

                    <label>Password</label>

                    <input
                        type="password"
                        name="password"
                        class="form-control"
                        placeholder="Enter password"
                        required>

                    <x-input-error
                        :messages="$errors->get('password')"
                        class="mt-2" />

                </div>

                <!-- Remember -->

                <div class="auth-options">

                    <label>

                        <input type="checkbox"
                               name="remember">

                        Remember Me

                    </label>

                    @if (Route::has('password.request'))

                        <a href="{{ route('password.request') }}">

                            Forgot Password?

                        </a>

                    @endif

                </div>

                <button
                    type="submit"
                    class="login-btn">

                    Login

                </button>

                <div class="register-link">

                    Don't have an account?

                    <a href="{{ route('register') }}">

                        Apply Now

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection