<?php
ob_start();
session_start();
require_once 'dbconnect.php';


  if(!isset($_SESSION['user'])) {
    header("Location: login.php");
    exit;
  } else {

  }

  // select logged in users detail
  $res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
  $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

 ?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home - The Palms Colombo</title>
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
      <link href="css/style.css" rel="stylesheet">
      <script src="script/scroll-hide.js"> </script>

      <!-- Bootstrap Scripts -->
      <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
</head>

<body>
  	<!-- Header -->
  	<div class="header">
  		<div class="container">
  			<div class="site-name-container">
                <a href="index.html" class="site-name">The Palms Colombo</a>
  				<nav class="nav">
						<ul>
                       		<li><a href="gallery.html">Gallery</a></li>
                   <li><a href="dining.html">Dining</a></li>
                   <li><a href="rooms.html">Rooms</a></li>
                   <li><a href="booking.html" class="active">Booking</a></li>
                   <li><a href="index.html">Home</a></li>
    					</ul>
					</nav>
			</div>
		</div>
  	</div>
<br>
<br>
<br>
<br>
<br>
<br>
 <section class="site-section">
   <div class="container">
   </br></br></br></br>
   <div class="container">
      <div class='col-md-5'>
          <div class="form-group">
              <div class='input-group date' id='datetimepicker6'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
      </div>
      <div class='col-md-5'>
          <div class="form-group">
              <div class='input-group date' id='datetimepicker7'>
                  <input type='text' class="form-control" />
                  <span class="input-group-addon">
                      <span class="glyphicon glyphicon-calendar"></span>
                  </span>
              </div>
          </div>
      </div>
    </div>
    <script type="text/javascript">
      $(function () {
          $('#datetimepicker6').datetimepicker();
          $('#datetimepicker7').datetimepicker({
              useCurrent: false //Important! See issue #1075
          });
          $("#datetimepicker6").on("dp.change", function (e) {
              $('#datetimepicker7').data("DateTimePicker").minDate(e.date);
          });
          $("#datetimepicker7").on("dp.change", function (e) {
              $('#datetimepicker6').data("DateTimePicker").maxDate(e.date);
          });
      });
    </script>
    </div>
  </section>






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
