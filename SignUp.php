<?php include('register.php'); ?>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PetMate | Sign Up</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" href="css/material-design-iconic-font.min.css">
  <link rel="stylesheet" href="css/SignUp-In.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> </head>
  <meta name="robots" content="noindex, follow">
</head>
<body>
        <div class="nav">
        	<h1><a class="logo" href="index.html">PetMate</a></h1>
      </div>
  <div class="main">
    <section class="signup">
      <div class="container">
        <div class="signup-content">
          <div class="signup-form">
            <h2 class="form-title"><b>Sign up</b></h2>
            <form method="POST" action="SignUp.php" class="register-form" id="register-form">
           

              <div class="form-group">
                <label for="name">
                  <i class="fa-solid fa-user"></i>
                </label>
                <input type="text" name="name" id="name" placeholder="Username" value="<?php echo $username ; ?>">
                <div class="error" style="position:fixed;color:red;"><?php echo $nameErr; ?></div>
              </div>
              
              <div class="form-group">
                <label for="email">
                  <i class="fa-solid fa-envelope"></i>
                </label>
                <input type="email" name="email" id="email" placeholder="Email" value="<?php echo $email ; ?>">
                <div class="error" style="position:fixed;color:red;"><?php echo $emailErr; ?></div>
              </div>
              
              <div class="form-group">
                <label for="pass">
                  <i class="fa-solid fa-lock"></i>
                </label>
                <input type="password" name="pass" id="pass" placeholder="Password" ">
                <div class="error" style="position:fixed;color:red;"><?php echo $passErr; ?></div>
              </div>
              
              <div class="form-group">
                <label for="re-pass">
                  <i class="fa-solid fa-lock"></i>
                </label>
                <input type="password" name="re_pass" id="re_pass" placeholder="Repeat your password" >
                <div class="error" style="position:fixed;color:red;"><?php echo $repassErr; ?></div>
                
              </div>
              
              <div class="form-group form-button">
                <input type="submit" name="signup" id="signup" class="form-submit" value="Register">
              </div>
            </form>
          </div>
          <div class="signup-image">
            <figure>
              <img src="images/dog-img.png" alt="sing up image">
            </figure>
            <a href="SignIn.php" class="signup-image-link">I am already member</a>
          </div>
        </div>
      </div>
    </section>
    <!--<section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure>
              <img src="images/signin-image.jpg" alt="sing up image">
            </figure>
            <a href="#" class="signup-image-link">Create an account</a>
          </div>
          <div class="signin-form">
            <h2 class="form-title">Sign up</h2>
            <form method="POST" class="register-form" id="login-form">
              <div class="form-group">
                <label for="your_name">
                  <i class="zmdi zmdi-account material-icons-name"></i>
                </label>
                <input type="text" name="your_name" id="your_name" placeholder="Your Name">
              </div>
              <div class="form-group">
                <label for="your_pass">
                  <i class="zmdi zmdi-lock"></i>
                </label>
                <input type="password" name="your_pass" id="your_pass" placeholder="Password">
              </div>
              <div class="form-group">
                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term">
                <label for="remember-me" class="label-agree-term">
                  <span>
                    <span></span>
                  </span>Remember me </label>
              </div>
              <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
              </div>
            </form>
            <div class="social-login">
              <span class="social-label">Or login with</span>
              <ul class="socials">
                <li>
                  <a href="#">
                    <i class="display-flex-center zmdi zmdi-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="display-flex-center zmdi zmdi-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="display-flex-center zmdi zmdi-google"></i>
                  </a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>-->
  </div>
</body>
