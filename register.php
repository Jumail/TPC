<?php
ob_start();
session_start();

if (isset($_SESSION['user']) != "") {
    header("Location: index.php");
}
include_once 'dbconnect.php';

if (isset($_POST['signup'])) {

    $uname = trim($_POST['uname']); // get posted data and remove whitespace
    $email = trim($_POST['email']);
    $upass = trim($_POST['pass']);

    // hash password with SHA256;
    $password = hash('sha256', $upass);

    // check email exist or not
    $stmt = $conn->prepare("SELECT email FROM users WHERE email=?");
    $stmt->bind_param("s", $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();

    $count = $result->num_rows;

    if ($count == 0) { // if email is not found add user


        $stmts = $conn->prepare("INSERT INTO users(username,email,password) VALUES(?, ?, ?)");
        $stmts->bind_param("sss", $uname, $email, $password);
        $res = $stmts->execute();//get result
        $stmts->close();

        $user_id = mysqli_insert_id($conn);
        if ($user_id > 0) {
            $_SESSION['user'] = $user_id; // set session and redirect to index page
            if (isset($_SESSION['user'])) {
                print_r($_SESSION);
                header("Location: index.php");
                exit;
            }

        } else {
            $errTyp = "danger";
            $errMSG = "Something went wrong, try again";
        }

    } else {
        $errTyp = "warning";
        $errMSG = "Email is already used";
    }

}
?>

<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">

<title>Hello,<?php echo $userRow['email']; ?></title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/style.css" rel="stylesheet">
  <link href="css/indexnew.css" rel="stylesheet">
  <script src="script/scroll-hide.js"> </script>


</head>

<body>
  	<!-- Header -->
    <div class="header" id="header">
  		<div class="container">
  			<div class="site-name-container">
          <a href="index.html" class="site-name">The Palms Colombo</a>
  				<nav class="nav">
					       <ul>
				           <li><a href="gallery.html">Create your account</a></li>


                 </ul>
					</nav>
        </div>
      </div>
  	</div>
<br><br><br><br><br><br>

<div class="container">
  <div id="login-form">
      <form method="post" autocomplete="off">

          <div class="col-md-12">

              <div class="form-group">
                  <h2 class="site-name">Sign Up</h2>
              </div>


              <?php
              if (isset($errMSG)) {

                  ?>
                  <div class="form-group">
                      <div class="alert alert-<?php echo ($errTyp == "success") ? "success" : $errTyp; ?>">
                          <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                      </div>
                  </div>
                  <?php
              }
              ?>

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
                      <input type="text" name="uname" class="form-control" placeholder="Enter Username" required/>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="email" name="email" class="form-control" placeholder="Enter Email" required/>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="password" name="pass" class="form-control" placeholder="Enter Password"
                             required/>
                  </div>
              </div>

              <div class="checkbox">
                  <label><input type="checkbox" id="TOS" value="This"><a href="#">I agree with
                          terms of service</a></label>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn    btn-block btn-primary" name="signup" id="reg">Register</button>
              </div>

              <div class="form-group">
                  <hr/>
              </div>

              <div class="form-group">
                  <a href="login.php" type="button" class="btn btn-block btn-primary" name="btn-login">Login</a>
              </div>

            </div>

        </form>
    </div>
  </div>



    <br><br><br>





	<footer class="footer">

			<p class="footer-heading">Find us on</p>
			<p class="footer-links">
				<img class="footer-social-icons" src="icons/facebook.png" width="50px" />
        <img class="footer-social-icons" src="icons/twitter.png" width="50px" />
        <img class="footer-social-icons" src="icons/instagram.png" width="50px" />
        <img class="footer-social-icons" src="icons/youtube.png" width="50px" />
			</p>
      <p class="footer-company-name">The Palms Colombo &copy; 2018</p>

		</footer>

  </body>
</html>
