<?php
  ob_start();
  session_start();
  require_once 'dbconnect.php';

  // select logged in users detail
  $res = $conn->query("SELECT * FROM users WHERE id=" . $_SESSION['user']);
  $userRow = mysqli_fetch_array($res, MYSQLI_ASSOC);

  if(isset($_POST['submit'])) {
    $name = trim($_POST['name']);
    $checkindate = trim($_POST['datetime1']);
    $checkoutdate = trim($_POST['datetime2']);
    $roomType = trim($_POST['room']);
    $guestNumber = trim($_POST['room']);
    $contact = trim($_POST['contact']);
    $email = "fakeemail.com";
    $remarks = trim($_POST['remarks']);

    $result = mysql_query($conn, "INSERT INTO booking(name,checkindate, checkoutdate, roomType, guestNumber, contact, email, remarks) VALUES('$name', '$checkindate', '$checkoutdate', '$roomType', '$guestNumber', '$contact', '$email', '$remarks')");
    // $sql = "INSERT INTO booking(name,checkindate, checkoutdate, roomType, guestNumber, contact, email, remarks) VALUES('$name', '$checkindate', '$checkoutdate', '$roomType', '$guestNumber', '$contact', '$email', '$remarks')";

    if (!mysql_query($sql,$conn)) {

      die('Error: ' . mysql_error());

      }

    echo "1 record added";
      // $stmts->bind_param("sss", $name, $checkindate, $checkoutdate, $roomType, $guestNumber, $contact, $email, $remarks);
      // $res = $stmts->execute();//get result
      // $stmts->close();
      //
      // $user_id = mysqli_insert_id($conn);
  }





?>
