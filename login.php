<?php
ob_start();
session_start();
require_once 'dbconnect.php';

// if session is set direct to index
if (isset($_SESSION['user'])) {
    header("Location: index.php");
    exit;
}

if (isset($_POST['btn-login'])) {
    $email = $_POST['email'];
    $upass = $_POST['pass'];

    $password = hash('sha256', $upass); // password hashing using SHA256
    $stmt = $conn->prepare("SELECT id, username, password FROM users WHERE email= ?");
    $stmt->bind_param("s", $email);
    /* execute query */
    $stmt->execute();
    //get result
    $res = $stmt->get_result();
    $stmt->close();

    $row = mysqli_fetch_array($res, MYSQLI_ASSOC);

    $count = $res->num_rows;
    if ($count == 1 && $row['password'] == $password) {
        $_SESSION['user'] = $row['id'];
        header("Location: index.php");
    } elseif ($count == 1) {
        $errMSG = "Bad password";
    } else $errMSG = "User not found";
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
				           <li><a href="gallery.html">Gallery</a></li>
                   <li><a href="dining.html">Dining</a></li>
                   <li><a href="rooms.html">Rooms</a></li>
                   <li><a href="booking.html">Booking</a></li>
                   <li><a href="index.html">Home</a></li>

                 </ul>
					</nav>
        </div>
      </div>
  	</div>
<br><br><br><br><br><br><br><br>

    <div class="container">
      <form method="post" autocomplete="off">

          <div class="col-md-12">

              <div class="form-group">
                  <h2 class="">Create an account</h2>
              </div>

              <div class="form-group">
                  <hr/>
              </div>

              <?php
              if (isset($errMSG)) {

                  ?>
                  <div class="form-group">
                      <div class="alert alert-danger">
                          <span class="glyphicon glyphicon-info-sign"></span> <?php echo $errMSG; ?>
                      </div>
                  </div>
                  <?php
              }
              ?>

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-envelope"></span></span>
                      <input type="email" name="email" class="form-control" placeholder="Email" required/>
                  </div>
              </div>

              <div class="form-group">
                  <div class="input-group">
                      <span class="input-group-addon"><span class="glyphicon glyphicon-lock"></span></span>
                      <input type="password" name="pass" class="form-control" placeholder="Password" required/>
                  </div>
              </div>

              <div class="form-group">
                  <hr/>
              </div>

              <div class="form-group">
                  <button type="submit" class="btn btn-block btn-primary" name="btn-login">Login</button>
              </div>

              <div class="form-group">
                  <hr/>
              </div>

              <div class="form-group">
                  <a href="register.php" type="button" class="btn btn-block btn-primary"
                     name="btn-login">Register</a>
              </div>

          </div>

      </form>
    </div>

    <br><br><br><br>





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
