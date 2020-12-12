<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Bootstrap Dashboard Template with Sidebar</title>
  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-ML9h/UCooefre72ZPxxOHyjbrLT1xKV0AHON1J+OlOV2iwcYemqmWyMfTcfyzLJ1" crossorigin="anonymous">
  <style>
  html {
    position: relative;
    min-height: 100%;
  }
  body {
    margin-bottom: 60px; /* Margin bottom by footer height */
  }
  .footer {
    position: absolute;
    bottom: 0;
    width: 100%;
    height: 60px; /* Set the fixed height of the footer here */
    line-height: 60px; /* Vertically center the text there */
    background-color: #f5f5f5;
  }
  </style>
</head>
<body>
  <nav class="navbar navbar-dark bg-dark border-bottom">
    <h1><a class="navbar-brand badge badge-primary" href="Dashboard.php">TMC</a></h1>
    <form class="form-inline" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="text" name="searchresult" value="">
      <input class="btn btn-primary my-2 my-sm-0" type="submit" name="Submit1" value="search">

    </form>
  </nav>
<head><title>Dashboard</title></head>
<body>
<h1>Staff Open Tickets</h1>
<div>
<?php
  $host='127.0.0.1'; //server ip address
  $user='root'; //you need to supply
  $pwd=''; //you need to supply
  $db = 'ticket-system'; //database name
  $conn = mysqli_connect($host, $user, $pwd, $db);
  
  $query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'OPEN'";
  $result = mysqli_query($conn, $query);
  $total = mysqli_num_rows($result);
  echo "<h2><br>Total Number: $total</br><h1>";
  mysqli_close($conn); //disconnect
?>
</div>

<?php
  $host='127.0.0.1'; //server ip address
  $user='root'; //you need to supply
  $pwd=''; //you need to supply
  $db = 'ticket-system'; //database name
  $conn = mysqli_connect($host, $user, $pwd, $db);
echo '<div style="border: 3px solid #aaa;">';
  $query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'OPEN' ORDER BY 't_ID' ";
  $result = mysqli_query($conn, $query);
  $total = mysqli_num_rows($result);
  while ($row = mysqli_fetch_row($result)){
    echo "<p><table>

    $row[0] $row[3] $row[1]

</table></p>";
  }
echo'</div>';


  mysqli_close($conn); //disconnect
?>

<a href="Dashboard.php" class="btn btn-outline-info">Back</a>
<a href="newTicket.php" class="btn btn-outline-info">Add Ticket</a>
<a href="listOpenStaff.php?cat=staff.unsolved" class="btn btn-outline-info">View</a>

</body>
</html>
