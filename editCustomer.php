<!DOCTYPE html>
<html><head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Bootstrap Dashboard Template with Sidebar</title>
  <!-- Bootstrap core CSS -->
  <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.1.3/lux/bootstrap.min.css" rel="stylesheet" integrity="sha384-ML9h/UCooefre72ZPxxOHyjbrLT1xKV0AHON1J+OlOV2iwcYemqmWyMfTcfyzLJ1" crossorigin="anonymous">
<style>
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


<head><title>Product List</title></head>
<body>
<h1></h1>
<div>
<?php
  $host='127.0.0.1'; //server ip address
  $user='s4913757'; //you need to supply
  $pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
  $db = $user; //database name
  $conn = mysqli_connect($host, $user, $pwd, $db);

  if (isset($_GET['id'])){ //think the overall logic then perfect it
	if (isset($_POST['edit'])){
	  $tID = $_POST['id'];
	  $priority = $_POST['priority'];
	  $status = $_POST['status'];
      $query = "UPDATE ticket_CUSTOMER SET t_PRIORITY = $priority, t_STATUS = '$status' WHERE t_ID = $tID";
      $result = mysqli_query($conn, $query);

      if ($result == 1){
      echo "Record updated successfully";
      }
      else{
      echo "Error updating record: " . mysqli_error($conn);
      }
	}

  if (isset($_REQUEST['delete'])){
    $tID = $_POST['id'];
    $priority = $_POST['priority'];
    $status = $_POST['status'];
    $query = "DELETE FROM ticket_CUSTOMER WHERE t_ID= $tID";
    $result = mysqli_query($conn, $query);

    if ($result == 1){
    echo "Record deleted successfully";
    }
    else{
    echo "Error deleting record: " . mysqli_error($conn);
    }

  }

	$tID = $_GET['id'];
    $query = "SELECT * FROM ticket_CUSTOMER WHERE t_ID = $tID";
    $result = mysqli_query($conn, $query);
    while ($row = mysqli_fetch_row($result)){
      echo "<form action=\"\" method=\"post\">
      <h6>
        <div class=col-sm-9>
          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> User: </div>
          <div class=col><input class= form-control mr-sm- type=\"text\" name=\"id\" value=\"$row[0]\" readonly></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> User: </div>
		      <div class=col><input class= form-control mr-sm-2 type=\"text\" name=\"user\" value=\"$row[3]\" readonly></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> Title: </div>
          <div class=col><input class= form-control mr-sm-2 type=\"text\" name=\"title\" value=\"$row[1]\" readonly></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> Summary: </div>
          <div class=col><textarea class= form-control mr-sm-2 type=\"text\" name=\"summary\" value=\"$row[2]\" readonly></textarea></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> User ID: </div>
		      <div class=col><input class= form-control mr-sm-2 type=\"text\" name=\"uid\" value=\"$row[4]\" readonly></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> User Group: </div>
		      <div class=col><input class= form-control mr-sm-2 type=\"text\" name=\"ugroup\" value=\"$row[5]\" readonly></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> Category: </div>
		      <div class=col><input class= form-control mr-sm-2 type=\"text\" name=\"cat\" value=\"$row[6]\" readonly></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> Timestamp: </div>
		      <div class=col><input class= form-control mr-sm-2 type=\"text\" name=\"timestamp\" value=\"$row[7]\" readonly></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> Priority: </div>
		      <div class=col><input class= form-control mr-sm-2 type=\"text\" name=\"priority\" value=\"$row[8]\"></div>
          </div>
          </div>

          <div class= form-group>
          <div class = 'form row'>
          <div class=col-sm-1> Status: </div>
		      <div class=col><select class= form-control mr-sm-2 type=\"text\" name=\"status\" value=\"$row[9]\"></div>
          <option class= form-control>CLOSED</option>
          <option class= form-control>OPEN</option>
          </div>
          </div>
            <div class= form-group>
            <div class = 'form row'>
            <div class=col><input class= btn btn-primary my-2 my-sm-1 type=\"submit\" name=\"edit\" value=\"Update\"></div>
	          <div class=col><input class= btn btn-primary my-2 my-sm-1 type=\"submit\" name=\"delete\" value=\"Delete\"></div>
            </div>
            </div>

    </h6>
    </div>
      </form>";
	}


  } else {
	  	echo "<p>Direct access is locked.</p>";
  }
  mysqli_close($conn); //disconnect
?>
</div>
</body>
<a href="Dashboard.php" class="btn btn-outline-info">Back</a>
</html>
