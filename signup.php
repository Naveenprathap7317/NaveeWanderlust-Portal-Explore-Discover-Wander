<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Travel</title>
  <link rel="stylesheet" href="login.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <style>
    /* Hide the login form initially */
    .form-login {
      display: none;
    }
  </style>
</head>
<body>
  <div class="wrapper">
    <!-- Sign-up form -->
    <form action="register.php" method="POST" class="form-signup">
      <h1>Sign up</h1>
      <div class="input-box">
        <input type="text" placeholder="First Name" name="fName" id="fName"required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="text" placeholder="Last Name" name="lName" id="lName"  required>
        <i class='bx bxs-user'></i>
      </div>

      <div class="input-box">
        <input type='email' placeholder="E-Mail" name="email" id="email" required>
        <i class='bx bxs-envelope'></i>
      </div>

      <div class="input-box">
        <input type="password" placeholder="Password" name="password" id="password"required>
        <i class='bx bxs-lock-alt'></i>
      </div>
      <button type="submit" name="signUp" class="btn">Sign up</button>
      <div class="register-link">
        <p>Already have an account?<a href="#" id="login-link"> Login here</a></p>
      </div>
    </form>

    <!-- Login form -->
    <form action="register.php" method="POST" class="form-login">
      <h1>Login</h1>
      <div class="input-box">
        <input type="email" placeholder="Email" name="email" id="email"  required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" name="password" id="password"  required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <button type="submit" name="signIn" class="btn">Login</button>
      <div class="register-link">
        <p>Don't have an account? <a href="#" id="signup-link">Register here</a></p>
      </div>
    </form>
  </div>

  <script>
    // JavaScript to toggle between sign-up and login forms
    const signupForm = document.querySelector('.form-signup');
    const loginForm = document.querySelector('.form-login');
    const signupLink = document.getElementById('signup-link');
    const loginLink = document.getElementById('login-link');

    signupLink.addEventListener('click', function(event) {
      event.preventDefault();
      signupForm.style.display = 'block';
      loginForm.style.display = 'none';
    });

    loginLink.addEventListener('click', function(event) {
      event.preventDefault();
      signupForm.style.display = 'none';
      loginForm.style.display = 'block';
    });
  </script>
</body>
</html>
