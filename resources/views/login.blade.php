<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Sign In — The Daily Read</title>
  @vite(['resources/css/app.css'])
</head>
<body>

  <div class="page-bg">
    <div class="noise"></div>
  </div>

  <main class="card">

    <div class="top-rule"></div>

    <div class="site-name">The Daily Read</div>
    <h1 class="heading">Sign in to<br>your account</h1>
    <p class="subtext">Welcome back, reader. Your stories are waiting.</p>

    <div class="field">
      <label for="email" class="label">Email address</label>
      <input type="email" id="email" name="email" class="input" placeholder="reader@example.com" autocomplete="email"/>
    </div>

    <div class="field">
      <label for="password" class="label">Password</label>
      <div class="input-wrap">
        <input type="password" id="password" name="password" class="input" placeholder="••••••••" autocomplete="current-password"/>
        <button class="toggle-pass" type="button" aria-label="Toggle password visibility">
          <svg width="15" height="15" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.8">
            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"/>
            <circle cx="12" cy="12" r="3"/>
          </svg>
        </button>
      </div>
    </div>

    <div class="meta">
      <label class="remember">
        <input type="checkbox" class="checkbox-input"/>
        <span class="checkbox-custom"></span>
        <span>Keep me signed in</span>
      </label>
      <a href="#" class="forgot">Forgot password?</a>
    </div>

    <button class="btn-login" type="button">
      <span class="btn-text">Continue reading</span>
      <span class="btn-arrow">→</span>
    </button>

    <div class="divider">
      <span class="divider-line"></span>
      <span class="divider-text">or sign in with</span>
      <span class="divider-line"></span>
    </div>

    <div class="socials">
      <button class="social-btn" type="button">Google</button>
      <button class="social-btn" type="button">GitHub</button>
    </div>

    <p class="signup">New here? <a href="#">Create an account</a></p>

    <div class="bottom-dots">
      <span class="dot"></span>
      <span class="dot active"></span>
      <span class="dot"></span>
    </div>

  </main>

  <script>
    // Toggle password visibility
    document.querySelector('.toggle-pass').addEventListener('click', function () {
      const input = document.getElementById('password');
      input.type = input.type === 'password' ? 'text' : 'password';
      this.classList.toggle('active');
    });

    // Loading state on submit
    document.querySelector('.btn-login').addEventListener('click', function () {
      this.classList.add('loading');
      setTimeout(() => this.classList.remove('loading'), 2000);
    });
  </script>

</body>
</html>
