<!Doctype html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @vite('resources/css/login.css')

    <title>LogixBPO HRIS</title>
  </head>
  <body>
    <div class="login-container">
      <div class="container">
        <div class="login-left">
          <div class="main-logo">
            {{-- to enhance for tenancy --}}
            <img src="/assets/images/logix-logo.webp" alt="LogixBPO Logo" />
          </div>
          <div class="login-left-text">
              <div class="login-left-text-inner">
                <h2 class="login-left-header">Live the Logix Life</h2>
                <h2 class="login-left-subheader">#Literally</h2>
                <h2 class="login-left-subheader">#Legendary</h2>
              </div>
              <p>© 2025 Logix BPO PTY LTD & Logix BPO Managed Services Philippines INC. <span>All Rights Reserved.</span></p>
          </div>
        </div>
        <div class="login-right">
          <h2 class="login-right-header"> Welcome to <span>Logix HRIS Portal</span> </h2>
          <div class="login-form">
            <p>Please sign-in your credentials to start.</p>
            <form method="POST" action="{{ route('login.submit') }}">
              @csrf

              <div class="input-form">
                <input type="email" name="email" required>
                <label for="email">Email</label>
              </div>
              <div class="input-form">
                <input type="password" name="password" required>
                <label for="password">Password</label>
              </div>
              <div class="input-form">
                <button type="submit">Login</button>
              </div>
            </form>

            @if(session('error'))
                <p style="color:red">{{ session('error') }}</p>
            @endif

            <small>Forget password Click here</small>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>