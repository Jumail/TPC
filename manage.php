<?php

  session_start();

 ?>


<html>
  <head>
    <title>Admin Panel - The Palms Colomobo</title>
    <link href="style.css" rel="stylesheet" />
    <link href="css/bootstrap.min.css" rel="stylesheet">
    
    
    <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 100%;
}

td, th {
    border: 1px solid #dddddd;
    text-align: left;
    padding: 8px;
}

tr:nth-child(even) {
    background-color: #dddddd;
}
</style>
  </head>
  <body>

    <div class="header">
      <div class="site-name">
        <h2>The Palms Colombo - Admin Panel</h2>
      </div>

    <div>
      <div class="navbar">
        <nav class="navbar-contents">
               <ul>
                 <li><a href="reservation.php">Reservations</a></li>
                 <li><a href="manage.php" class="active">Manage Rooms</a></li>
                 <li><a href="index.php" >Settings</a></li>
                 <li><a href="account.php">Account</a></li>
               </ul>
        </nav>
      </div>
      </div>
      </div>
      
    <h2>table</h2>
    
      <table>
  <tr>
    <th>Company</th>
    <th>Contact</th>
    <th>Country</th>
  </tr>
  <tr>
    <td>Alfreds Futterkiste</td>
    <td>Maria Anders</td>
    <td>Germany</td>
  </tr>
  </table>
      
       
  </body>
</html>