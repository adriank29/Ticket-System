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

</head>
<body>
  <nav class="navbar navbar-dark bg-dark border-bottom">
    <h1><a class="navbar-brand badge badge-primary" href="Dashboard.php">TMC</a></h1>
    <form class="form-inline" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="text" name="searchresult" value="">
      <input class="btn btn-primary my-2 my-sm-0" type="submit" name="Submit1" value="search">

    </form>
  </nav>
<head><title>Product List</title></head>
<body>
<h1>Customer Closed Tickets</h1>
<div>

<?php
$host='127.0.0.1'; //server ip address
$user='s4913757'; //you need to supply
$pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
$db = $user; //database name
$conn = mysqli_connect($host, $user, $pwd, $db);
if (isset($_GET['cat'])){
  if ($_GET['cat']=='customer.solved'){ //this controls what will be displayed so obviously you can have your own options here
  $query = "SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'CLOSED' ORDER BY 't_ID'";
  $result = mysqli_query($conn, $query);
  while ($row = mysqli_fetch_row($result)){
    echo "<p><table border='2'> <tr><td>$row[3]</td></tr> <tr><td>$row[0]</td></tr> <tr><td>$row[1]</tr></td> <td>$row[2]</td></table></p>";
    echo "<a href=\"editCustomer.php?id=$row[0]\"><th>View</th></a>";
  }
} else {
  echo "<p>This demo does not support other options.</p>";
}
 } else {
  echo "<p>This script is locked for unintended access.</p>";
}
mysqli_close($conn); //disconnect
?>
	<div class="row my-3">
<a href="dashboardClosed.php" class="btn btn-outline-info">Back</a>
</div>
</div>
</body>
</html>
