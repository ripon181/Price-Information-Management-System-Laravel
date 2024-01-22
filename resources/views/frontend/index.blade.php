<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="{{ asset('frontend/login-assets/style.css') }}">
  <link rel="icon" type="image/png" href="{{ asset('frontend/login-assets/img/favicon.png') }}">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PIMS-South Bangla Computers</title>
  <style>
    .error-message {
      color: #fff;
    }
  </style>
</head>
<body>
  <section class="form-section">
    <div class="form-wrapper">
      <form method="POST" action="{{ route('adminloginform') }}">
        @csrf
        <div class="photo-info">
          <img src="{{ asset('frontend/login-assets/img/Southbangla-logo.png') }}" alt="">
          <h3>South Bangla Computers</h3>
          <h5>Price Information Management System</h5>
        </div>
        <div class="input-block email">
          <input id="username" type="text" placeholder="username" name="username">
          @error('email')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>
        <div class="input-block password">
          <input type="password" id="password" placeholder="Password" name="password">
          @error('password')
            <span class="error-message">{{ $message }}</span>
          @enderror
        </div>
        <button type="submit" class="btn-login">Log In</button>
        @if ($errors->any())
        <div class="error-message">
          Invalid email or password.
        </div>
      @endif
      </form>
    </div>
  </section>
</body>
</html>
