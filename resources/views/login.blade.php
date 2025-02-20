<!DOCTYPE html>
<html lang="en">
    @include('layouts.backend.partials.head')
    @section('title', 'Home')

  <body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 600px;">
            <!-- Logo and Application Name -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/rsc.png') }}" alt="Company Logo" class="img-fluid mb-3" style="width: 200px;">
                <h2 class="fw-bold">Contribution Collection App</h4>
            </div>
            <!-- Login Form -->
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <!-- Email Input -->
                <div class="mb-3">
                    <label for="email" class="form-label">Email address</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Enter your email" required>
                    @if ($errors->has('email'))
                        <div class="text-danger">{{ $errors->first('email') }}</div>
                    @endif
                </div>
                <!-- Password Input -->
                <div class="mb-3">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
                    @if ($errors->has('password'))
                        <div class="text-danger">{{ $errors->first('password') }}</div>
                    @endif
                </div>
                <!-- Remember Me Checkbox -->
                <div class="mb-3 form-check">
                    <input type="checkbox" class="form-check-input" name="remember_me" value="1" id="rememberMe">
                    <label class="form-check-label" for="rememberMe">Remember me</label>
                </div>
                <!-- Submit Button -->
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>
            </form>
            <!-- Footer Links -->
            <div class="text-center mt-3">
                <p class="text-muted"><a href="{{ route('password.request') }}" class="text-primary">Forgot password?</a></p>
            </div>
        </div>
    </div>
  </body>
</html>
