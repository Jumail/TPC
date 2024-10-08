<?php
ob_start();
require_once 'dbconnect.php';


// select logged in users detail
$res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
$userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

?>

<!-- // Tried to autohide the Login,logout
    // button but still needs some fixing to do -->
<script type="text/javascript">
  document.getElementId('autohide').style.display="none";
</script>

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

                   <li class="dropdown" id="autohide">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                          aria-expanded="false">
                           &nbsp;Logged
                           in: <?php echo $userRow['email']; ?>
                           &nbsp;</a>

                   </li>
                   <li id="autohide">
                    <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                   </li>
				           <li><a href="gallery.html">Gallery</a></li>
                   <li><a href="dining.html">Dining</a></li>
                   <li><a href="rooms.html">Rooms</a></li>
                   <li><a href="booking.php">Booking</a></li>
                   <li><a href="index.php" class="active">Home</a></li>

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
  <div class="slide">
     <img class="mySlides" src="Palms Images/Main/main1.jpg" width="100%" height="680px">
     <img class="mySlides" src="Palms Images/Main/main2.jpg" width="100%" height="680px">
	 <img class="mySlides" src="Palms Images/Main/main3.jpg" width="100%" height="680px">
	 <img class="mySlides" src="Palms Images/Main/main4.jpg" width="100%" height="680px">
	 <img class="mySlides" src="Palms Images/Main/main5.jpg" width="100%" height="680px">
	 <img class="mySlides" src="Palms Images/Main/main6.jpg" width="100%" height="680px">
  </div>

<!-- Script for Carousel -->
<script>
var myIndex = 0;
carousel();

function carousel() {
    var i;
    var x = document.getElementsByClassName("mySlides");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 5000); // Change image every 5 seconds
}
</script>

    <div class="main-content">
      <div>
        <h2 align="center" >A NEW LEVEL OF LUXURY ARRIVES IN COLOMBO</h2>
        <br>

        <h4 align="center">
        Bejeweled as one of the finest five-star Colombo hotels located in-between Galle Face Green, the World Trade Centre and the Dutch Hospital Precinct, we welcome you to The Palms Colombo. With easy access for shopping, entertainment and your business needs, we will ensure your stay is perfect and your experiences are complete. <br>
		</h4>
		<p align="center">
        A : 48, Janadhipathi Mawatha, Colombo 01, Sri Lanka. <br>
        E : info@thepalmshotel.com <br>
        T : +94 112 421 221
        </p>

      </div>
    </div>



        <br>
          <h3 class="sub-heading" align="center">A luxurious escape in the heart of the city</h3>
          <br>
          <center> The Palms, Colombo offers 500 guest rooms and suites, and 41 serviced apartments. <br>
          Our finely appointed rooms are among the largest in Colombo and offer striking views of the Indian Ocean, Beira Lake and the city beyond. <br>

          Refined furnishing materials, such as marble and silk, blend with contemporary light woods, complementing the urban and ocean-side location. <br>

          High-end technology sits comfortably alongside subtle luxury. <br>

          The 34 spacious suites are the finest in the city, and include personal butler service. <br>

          All rooms and suites feature signature Palms Beds – which utilize patented body-contouring technology – complimentary Wi-Fi Internet and premium Palms amenities. </center>

			  <br>



<div class="content">
	<h2 class="heading" align="center">Featured Rooms</h2>
        <div class="row ">
          	<div class="colomn">
				<img src="img/1.jpg" class="featured-images" />




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
