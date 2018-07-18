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
  <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Title -->
    <title>Home - The Palms Colombo</title>

      <link href="css/style.css" rel="stylesheet">
      <script src="script/scroll-hide.js"> </script>

      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
      <script src="https://cdn.jsdelivr.net/momentjs/2.14.1/moment.min.js"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/js/bootstrap-datetimepicker.min.js"></script>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.37/css/bootstrap-datetimepicker.min.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
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
                   <li><a href="booking.php" class="active">Booking</a></li>
                   <li><a href="index.php">Home</a></li>
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
     <div class="row">
       <div class="">
         <h2 class="" align="center">Book your stay online</h2>
         <p>
             <form action="booking_updater.php" method="post">
               <div class="row">
                 <div class="form-group">
                    <label class="control-label">CHECK-IN DATE</label>
                    <div class='input-group date' id='datetime1'>
                       <input type='text' class="form-control" />
                       <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                       </span>
                    </div>
                    <script>
                      $(function () {
                        $('#datetime1').datetimepicker();
                     });
                    </script>
                 </div>

                 <div class="form-group">
                    <label class="control-label">CHECK-OUT DATE</label>
                    <div class='input-group date' id='datetime2'>
                       <input type='text' class="form-control" />
                       <span class="input-group-addon">
                       <span class="glyphicon glyphicon-calendar"></span>
                       </span>
                    </div>
                    <script>
                      $(function () {
                        $('#datetime2').datetimepicker();
                     });
                    </script>
                 </div>

               </div>


               <div class="row">
                 <div class="col-md-6 form-group">
                   <label for="room">Select Your Room</label>
                   <select name="" id="room" class="form-control">
                     <option value="">Deluxe Lake View</option>
                     <option value="">Deluxe Ocean View</option>
                     <option value="">Premier Balcony View</option>
                     <option value="">Premier Ocean View</option>
                   </select>
                 </div>

                 <div class="col-md-6 form-group">
                   <label for="guest">Number of Guests</label>
                   <select name="" id="guest" class="form-control">
                     <option value="">1 Guest</option>
                     <option value="">2 Guests</option>
                     <option value="">3 Guests</option>
                     <option value="">4 Guests</option>
                     <option value="">5+ Guests</option>
                   </select>
                 </div>
               </div>

               <div class="row">
                 <div class="col-md-12 form-group">
                   <label for="contact">Contact Number</label>
                   <input  id="contact" class="form-control ">
                 </div>
               </div>

               <div class="row">
                 <div class="col-md-12 form-group">
                   <label for="remarks">Remarks</label>
                   <textarea name="remarks" id="remarks" class="form-control " cols="30" rows="8"></textarea>
                 </div>
               </div>
               <div class="row">
                 <div class=" ">
                   <input type="submit" value="Reserve Now" class="btn btn-primary" >
                 </div>
               </div>
             </form>
           </div>
           </div>
           </div>








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
