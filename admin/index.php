<?php
  session_start();
  require_once "dbconnect.php"
?>

<html>
<head>
  <!DOCTYPE html>
  <title>Admin Panel</title>

  <link rel="stylesheet" href="scss/datepicker.css">
  <link href="scss/datepicker.css" rel="stylesheet" type="text/css"/>
  <!--link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/themes/base/jquery-ui.css" rel="stylesheet" type="text/css"/-->
  <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.8/jquery-ui.min.js"></script>

  <!-- Local CSS -->
  <link href="../css/bootstrap.min.css" rel="stylesheet">
  <link href="../css/style.css" rel="stylesheet">
  <link href="../css/indexnew.css" rel="stylesheet">
  <script src="../script/scroll-hide.js"> </script>

  <script>
    $(document).ready(function() {
  		$("#checkout").datepicker();
  		$("#checkin").datepicker({
  		minDate : new Date(),
  		onSelect: function (dateText, inst) {
          var date = $.datepicker.parseDate($.datepicker._defaults.dateFormat, dateText);
          $("#checkout").datepicker("option", "minDate", date);
  		}
  		});
    });
  </script>
  <link href='http://fonts.googleapis.com/css?family=Slabo+27px' rel='stylesheet' type='text/css'>
  <meta class="foundation-data-attribute-namespace"><meta class="foundation-mq-xxlarge"><meta class="foundation-mq-xlarge"><meta class="foundation-mq-large"><meta class="foundation-mq-medium"><meta class="foundation-mq-small"><style></style><meta class="foundation-mq-topbar"></head>

</head>
<body>

  <!-- Header -->
  <div class="header" id="header">
    <div class="container">
      <div class="site-name-container">
        <a href="index.html" class="site-name">The Palms Colombo Management</a>
        <nav class="nav">
               <ul>
                 <li id="autohide">
                  <a href="logout.php?logout"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a>
                 </li>
                 <li><a href="gallery.html">Gallery</a></li>
                 <li><a href="dining.html">Dining</a></li>
                 <li><a href="rooms.html">Rooms</a></li>
                 <li><a href="booking.php">Booking</a></li>
                 <li><a href="index.php" class="active">Reservations</a></li>

               </ul>
        </nav>
      </div>
    </div>
  </div>

  <!-- Added line break -->
<br><br>
<br><br>
<br>
<br>
<br>
  <div class="container">
    <table class="table">
      <thead>
        <tr>
          <th>Name</th>
          <th>Arrival date</th>
          <th>Leaving date</th>
          <th>Leaving date</th>
          <th>Room selected</th>
          <th>People</th>
          <th>Contact</th>
          <th>Email</th>
          <th>Remarks</th>
          <th>Edit</th>
        </tr>
      </thead>
      <tbody>

        <?php
          $result = mysqli_query($con,"SELECT * FROM Persons");
          while ($row = mysqli_fetch_array($result)) {
            echo "<tr>";
            echo "<td>" .$row['name']. "</td>";
            echo "</tr>";
          }

        ?>
      </tbody>
    </table>
  </div>

  <!-- Added line break -->
<br>
<br>
<br>
<br>
<br>

  </div>

</body>
</html>
