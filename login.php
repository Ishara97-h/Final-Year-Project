
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" type="text/css" href="css/signin.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" type="text/css" href="css/errors.css?v=<?php echo time(); ?>">
    <link rel="icon" href="img/1 - crop.png">
  <title>AnesCare</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="../../plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="../../plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../../dist/css/adminlte.min.css">
  <style>
            *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style: none;
            font-family: 'Montserrat', sans-serif;
        }
        body {
        font-family: 'Lato', sans-serif;
        margin: 0;
        padding: 0;
        
        background-size: cover;
        background-position: center;
        
        }

        @media screen and (max-height: 450px) {
        .overlay a {font-size: 20px}
        .overlay .closebtn {
        font-size: 40px;
        top: 15px;
        right: 35px;
        }
        }
        div.scrollmenu {
        
        background-color: #333;
        overflow: auto;
        white-space: nowrap;
        }

        .scrollmenu a {
        float: right;
        display: inline-block;
        color: white;
        text-align: center;
        padding: 14px;
        text-decoration: none;
        }

        div.scrollmenu a:hover {
        background-color: #777;
        }
        .login-box{
            width:60%;
            padding:auto;;
            margin:auto;
        }
        
        </style>
        
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html" style="color:black;"><b>Anes</b>Care</a>
  </div>
  <!-- /.login-logo -->
  <div class="container" id="container">
                
            
                    <div class="form_c signup_form_doc">
                
                        <form action="login_server.php" method="POST">
                        
                        
                            <h1>Log In for Doctors</h1>
                            
                            <hr width="100%" color="black">
                            <br>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Full name" name="username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            
                            <br>
                            <button name="submit">Sign In</button>
                            
                            
                        </form>
                    </div>
                    <div class="form_c signup_form_nurse">
                
                        <form action="login_server.php" method="POST">
                        
                            <h1>Log In for Nurses</h1>
                            
                            <hr width="100%" color="black">
                            <br>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" placeholder="Full name" name="username">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-user"></span>
                                    </div>
                                </div>
                            </div>
                            <div class="input-group mb-3">
                                <input type="password" class="form-control" placeholder="Password" name="password">
                                <div class="input-group-append">
                                    <div class="input-group-text">
                                    <span class="fas fa-lock"></span>
                                    </div>
                                </div>
                            </div>
                            <br>
                            
                            
                            <button name="submit_n">Sign In</button>
                        </form>
                    </div>
                    <div class="overlay_c">
                        <div class="overlay">

                            <div class="overlay_p signup_overlay_right">
                                <img src="img/172825.png" width="50%">
                                <p class="saign">"The art of medicine consists of amusing the patient while nature cures the
                                    disease."" <br> - Voltaire</p>
                                <button class="signupbtnnurse" id="signup_n">SIGN IN for Nurses</button>
                            </div>
                            <div class="overlay_p signup_overlay_left">
                                <img src="img/2.png" width="50%">
                                <p class="saign">"The art of medicine consists of amusing the patient while nature cures the
                                    disease."<br>- Voltaire</p>
                                <button class="signupbtndoc" id="signup_d">SIGN IN for Doctors</button>
                            </div>
                        </div>
                    </div>
                </div>
                <script type="text/javascript">
                    const signUpButton = document.getElementById('signup_n');
                    const signInButton = document.getElementById('signup_d');
                    const container = document.getElementById('container');

                    signUpButton.addEventListener('click', () => {
                        container.classList.add("right-panel-active");
                    });
                    signInButton.addEventListener('click', () => {
                        container.classList.remove("right-panel-active");
                    });
                </script>
<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
</body>
</html>
