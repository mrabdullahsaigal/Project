<?php
error_reporting(0);
require_once 'database.php';
if(isset($_POST['login'])){
$email = $_POST['user_email'];
$pass = $_POST['user_pass'];
$sel_user = "select * from users where email='$email' AND PASSWORD='$pass'";
$run_user = mysqli_query($conn, $sel_user);
$check_user = mysqli_num_rows($run_user);
if($check_user==0){
    $error_msg = 'Password or Email is wrong, try again';
}
else
{
    $_SESSION['user_email'] = $email;
    if(!empty($_POST['remember'])) {
        setcookie('user_email', $email, time() + (10 * 365 * 24 * 60 * 60));
        setcookie('user_pass', $pass, time() + (10 * 365 * 24 * 60 * 60));
    } else {
        setcookie('user_email','' );
        setcookie('user_pass', '');
    }
    header('location:index.php?logged_in=You have successfully logged in!');
}
}
    ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="css1.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

    
<!--------------------------------------------------------------------------------------------------------------->
    <div class="row bg-primary">
  <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

      <div class="container">
          <div class="row bg-primary">
              <header class="site-navbar js-sticky-header site-navbar-target" role="banner">

                  <div class="container">
                      <div class="row align-items-center position-relative">
                          <div class="site-logo">
                              <a href="index.php" class="text-black"><span class="text-danger" style="font-size:22px">MODERN MACHINES</span></a>
                          </div>

                          <div class="col-11">
                              <nav class="site-navigation text-center " role="navigation">

                                  <ul class="site-menu main-menu js-clone-nav ml-auto d-none d-lg-block">
                                      <li class="hov"><a href="index.php" class="nav-link">Home</a></li>
                                      <li class="hov"><a href="login.php" class="nav-link">Login</a></li>
                                      <li class="hov"><a href="forget.php" class="nav-link">Forget-password</a></li>
                                      <li class="hov"><a href="signup.php" class="nav-link">SignUp</a></li>

                                      <li><a href="about.php" class="nav-link">About</a></li>
                                      <li><a href="contacts.php" class="nav-link">Contact</a></li>
                                  </ul>
                              </nav>
                          </div>
                          <div class="toggle-button align-items-center d-flex">
                              <nav class="navbar navbar-light bg-light">
                                  <form class="form-inline">
                                      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                                      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                                  </form>
                              </nav>
                          </div>

                      </div>
                  </div>

              </header>
          </div>


</nav>
          </div>

        </div>
      </div>

    </header>
        </div>
    <!--form----------------------------------------------------------------------->
    <div class="container-fluid mt-5 bg-form">
    <form class="needs-validation" novalidate action="login.php" method="post">
         <h3 class="login-label col-md-2">SIGN IN</h3>
       <div class="form-group col-md-6 was-validated"> 
             <label for="inputEmail4" style="font-size: 20px;"><i>Email</i></label>
        <input  id ="data1" type="email" name="user_email" class="form-control is-valid rdis text-muted" required pattern="^([a-zA-Z0-9_\-\.]+)@([a-zA-Z0-9_\-\.]+)\.([a-zA-Z]{2,5})$">
       <small id="emailHelp" class="form-text">We'll never share your email with anyone else.</small>
  </div>
     <div class="form-group col-md-6 was-validated">
      <label for="inputPassword4"style="font-size: 20px;"><i>Password</i></label>
      <input id="data" type="password" class="form-control rdis text-muted" id="inputPassword4" name="user_pass" placeholder="Password"required pattern=".{8,20}">
           <div class="valid-feedback">
        Looks good!
      </div>
           <small id="passwordHelpInline"> 
      Must be 8-20 characters long and must be alphanumeric.
    </small>
    </div>
      <br>
        <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
      <label class="form-check-label" for="invalidCheck">
        Agree to terms and conditions
      </label>
      <div class="invalid-feedback">
        You must agree before submitting.
      </div>
    </div>
  </div>
        <button  id = click class="btn btn-primary login-btn" type="submit" name="login">Login</button>
            </form>

        <div><?php echo $error_msg;?></div>
           <a href="forget.php">Forget Password?</a>

    </div>
    
    <!--end form--------------------------------------------------------------------->
    <div>
    <h4>Don't Have an Account? <a href="signup.php">SIGN UP</a></h4>
    </div>

    <!--------------------------------------------------------------------------------------------------------------->
   
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script src="login.js"></script>
</body>
</html>
