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

                          🎓 ASB InternSphere

                    </span>

                </a>
            </div>

            <h1>

                Start Your
                Internship Journey

            </h1>

            <p>

                Join thousands of students building
                real-world skills, completing projects,
                and preparing for successful careers.

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
                    <h3>50+</h3>
                    <span>Partner Companies</span>
                </div>

            </div>

        </div>

    </div>

    <!-- RIGHT SIDE -->

    <div class="auth-right">

        <div class="login-card">

            <div class="login-header">

                <h2>Create Account</h2>

                <p>
                    Register to begin your internship
                    experience with ASB InternSphere
                </p>

            </div>

            <form method="POST"
                  action="{{ route('register') }}">

                @csrf

                <!-- Name -->

                <div class="form-group">

                    <label>Full Name</label>

                    <input type="text"
                           name="name"
                           value="{{ old('name') }}"
                           class="form-control"
                           placeholder="Enter full name"
                           required>

                    @error('name')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- Email -->

                <div class="form-group mt-4">

                    <label>Email Address</label>

                    <input type="email"
                           name="email"
                           value="{{ old('email') }}"
                           class="form-control"
                           placeholder="Enter email address"
                           required>

                    @error('email')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- Password -->

                <div class="form-group mt-4">

                    <label>Password</label>

                    <input type="password"
                           name="password"
                           class="form-control"
                           placeholder="Create password"
                           required>

                    @error('password')
                        <div class="text-danger mt-2">
                            {{ $message }}
                        </div>
                    @enderror

                </div>

                <!-- Confirm Password -->

                <div class="form-group mt-4">

                    <label>Confirm Password</label>

                    <input type="password"
                           name="password_confirmation"
                           class="form-control"
                           placeholder="Confirm password"
                           required>

                </div>

                <button type="submit"
                        class="login-btn mt-4">

                    Create Account

                </button>

                <div class="register-link">

                    Already have an account?

                    <a href="{{ route('login') }}">

                        Login

                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

@endsection