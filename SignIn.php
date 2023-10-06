<?php include('register.php'); ?>
<!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PetMate | Sign In</title>
  <link rel="icon" type="image/x-icon" href="images/favicon.ico">
  <link rel="stylesheet" type="text/css" href="css/SignUp-In.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css"> 
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" /> 
  <style>
  	#remember-me{
		  display: inline-block;
		  width: 13px;
		  height: 13px;
		  margin-right: 15px;
		  margin-bottom: 3px;
		  border: 1px solid #999;
		  border-radius: 2px;
		  -moz-border-radius: 2px;
		  -webkit-border-radius: 2px;
		  -o-border-radius: 2px;
		  -ms-border-radius: 2px;
		  background: #fff;
		  background-image: none;
		  background-image: -moz-linear-gradient(white,white);
		  background-image: -ms-linear-gradient(white,white);
		  background-image: -o-linear-gradient(white,white);
		  background-image: -webkit-linear-gradient(white,white);
		  background-image: linear-gradient(white,white);
		  vertical-align: bottom;
  	}
  </style>
</head>
<body>
        <div style="max-width:1200px;width:900px;background:#ef8172;margin:0 auto;padding-left:30px;}">
        	<h1><a class="logo" href="index.html">PetMate</a></h1>
      </div>
  <div class="main">
    <section class="sign-in">
      <div class="container">
        <div class="signin-content">
          <div class="signin-image">
            <figure>
              <img src="images/dog2-img.jpg" style="max-width:100%;transform:rotate(2deg);" alt="sing up image">
            </figure>
            <a href="SignUp.php" class="signup-image-link">Create an account</a>
          </div>
          <div class="signin-form">
            <h2 class="form-title"><b>Sign In</b></h2>
            <form method="POST" action="SignIn.php" class="register-form" id="login-form">
              <div class="form-group">
                <label for="your_name">
                  <i class="fa-solid fa-user"></i>
                </label>
                <input type="text" name="username" id="username" placeholder="Username" value="<?php echo $username?>">
              </div>
              <div class="error" style="position:absolute;top:331px;color:red;"><?php echo $nameErr; ?></div>
              <div class="form-group">
                <label for="your_pass">
                  <i class="fa-solid fa-lock"></i>
                </label>
                <input type="password" name="password" id="password" placeholder="Password">
              </div>
              <div class="error" style="position:absolute;top:388px;color:red;"><?php echo $passErr; ?></div>
              <div class="form-group">
                <input type="checkbox" name="remember-me" id="remember-me" class="agree-term" style="">
                <label for="remember-me" class="label-agree-term" style="top: 2px;">
                  Remember me </label>
              </div>
              <div class="form-group form-button">
                <input type="submit" name="signin" id="signin" class="form-submit" value="Log in">
              </div>
            </form>
            
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
</body>
