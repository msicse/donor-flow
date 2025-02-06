<!DOCTYPE html>
<html lang="en">
    @include('layouts.backend.partials.head')

  <body class="bg-light">
    <div class="container d-flex justify-content-center align-items-center vh-100">
        <div class="card shadow-lg p-4" style="width: 100%; max-width: 600px;">
            <!-- Logo and Application Name -->
            <div class="text-center mb-4">
                <img src="{{ asset('images/rsc.png') }}" alt="Company Logo" class="img-fluid mb-3" style="width: 200px;">
                <h2 class="fw-bold">Contribution Collection App</h4>
            </div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <!-- Password Reset Form -->
                <form action="{{ route('password.email') }}" method="POST">
                    @csrf
                    <!-- Email Input -->
                    <div class="mb-3">
                        <label for="email" class="form-label">Email address</label>
                        <input type="email" name="email" value="{{ old('email') }}" class="form-control" id="email" placeholder="Enter your email" required>
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                     <!-- Submit Button -->
                <div class="">
                    <a href="/" class="btn btn-primary">Back</a>
                    <button type="submit" class="btn btn-success">Send Link</button>
                    
                </div>
                </form>
            </div>
        </div>
    </div>
  </body>
</html>

