
<html lang="en">
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
    <h1><a class="navbar-brand badge badge-primary" href="#">TMC</a></h1>
    <form class="form-inline" action="search.php" method="post">
      <input class="form-control mr-sm-2" type="text" name="searchresult" value="">
      <input class="btn btn-primary my-2 my-sm-0" type="submit" name="Submit1" value="search">

    </form>
  </nav>
  <div class="container-fluid my-2">
	<div class="row my-2">
	  <div class="col-6">
      <div class="card">
        <h2 class="card-header">Closed Tickets for Staff</h2>
        <div class="card-body">
          <h3 class="card-title"><?php
            $host='127.0.0.1'; //server ip address
            $user='s4913757'; //you need to supply
            $pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
            $db = $user; //database name
            $conn = mysqli_connect($host, $user, $pwd, $db);

            $query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'CLOSED'";
            $result = mysqli_query($conn, $query);
            $total = mysqli_num_rows($result);

            echo "<h3> Currently $total Closed Tickets</h3>";
            mysqli_close($conn); //disconnect
          ?>
          </h3>
          <a href="dashboardClosed.php" class="btn btn-outline-info">View</a>
        </div>
	  </div>
	  </div>
	  <div class="col-6">
      <div class="card">
        <h2 class="card-header">Open Tickets for Staff</h2>
        <div class="card-body">
          <h3 class="card-title"><?php
            $host='127.0.0.1'; //server ip address
            $user='s4913757'; //you need to supply
            $pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
            $db = $user; //database name
            $conn = mysqli_connect($host, $user, $pwd, $db);

            $query = "SELECT * FROM ticket_STAFF WHERE t_STATUS = 'OPEN'";
            $result = mysqli_query($conn, $query);
            $total = mysqli_num_rows($result);

            echo "<h3> There are $total open tickets</h3>";
            mysqli_close($conn); //disconnect
          ?>
          </h3>
          <a href="dashboardOpen.php" class="btn btn-outline-info">View</a>
          <a href="newTicket.php" class="btn btn-outline-info">Add New Staff Ticket</a>
        </div>
      </div>
	  </div>
    </div>
	<div class="row my-3">
	  <div class="col-6">
      <div class="card">
        <h2 class="card-header">Closed Tickets for Customers</h2>
        <div class="card-body">
          <h3 class="card-title"><?php
            $host='127.0.0.1'; //server ip address
            $user='s4913757'; //you need to supply
            $pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
            $db = $user; //database name
            $conn = mysqli_connect($host, $user, $pwd, $db);

            $query = "SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'CLOSED'";
            $result = mysqli_query($conn, $query);
            $total = mysqli_num_rows($result);

            echo "<h3> There are $total CLOSED tickets</h3>";
            mysqli_close($conn); //disconnect
          ?></h3>
          <a href="dashboardClosedCustomer.php" class="btn btn-outline-info">View</a>
        </div>
	  </div>
	  </div>
	  <div class="col-6">
      <div class="card">
        <h2 class="card-header">Open Tickets for Customers</h2>
        <div class="card-body">
          <h3 class="card-title"><?php
            $host='127.0.0.1'; //server ip address
            $user='s4913757'; //you need to supply
            $pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
            $db = $user; //database name
            $conn = mysqli_connect($host, $user, $pwd, $db);

            $query = "SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'OPEN'";
            $result = mysqli_query($conn, $query);
            $total = mysqli_num_rows($result);

            echo "<h3> There are $total open tickets</h3>";
            mysqli_close($conn); //disconnect
          ?>
          </h3>
          <a href="dashboardOpenCustomer.php" class="btn btn-outline-info">View</a>
            <a href="newCustomer.php" class="btn btn-outline-info">Add Customer Ticket</a>
        </div>
      </div>
	  </div>
    </div>
    <div class="row my-2">
  	  <div class="col-6">
        <div class="card">
          <h2 class="card-header">Tickets In progress</h2>
          <div class="card-body">
            <h3 class="card-title"><?php
              $host='127.0.0.1'; //server ip address
              $user='s4913757'; //you need to supply
              $pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
              $db = $user; //database name
              $conn = mysqli_connect($host, $user, $pwd, $db);

              $query = "(SELECT * FROM ticket_STAFF WHERE t_STATUS = 'IN PROGRESS' )
              UNION (SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'IN PROGRESS' )";
              $result = mysqli_query($conn, $query);
              $total = mysqli_num_rows($result);

              echo "<h3> There are $total tickets in progress</h3>";
              mysqli_close($conn); //disconnect
            ?></h3>
            <a href="dashboardTicketsInProgress.php" class="btn btn-outline-info">View</a>
          </div>
  	  </div>
  	  </div>
  	  <div class="col-6">
        <div class="card">
          <h2 class="card-header">Check/Follow</h2>
          <div class="card-body">
            <h3 class="card-title"><?php
              $host='127.0.0.1'; //server ip address
              $user='s4913757'; //you need to supply
              $pwd='qXodmihNoP7VEhpxWHKEAMTkWknyKcCc'; //you need to supply
              $db = $user; //database name
              $conn = mysqli_connect($host, $user, $pwd, $db);

              $query = "(SELECT * FROM ticket_STAFF WHERE t_STATUS = 'CHECK' )
              UNION (SELECT * FROM ticket_CUSTOMER WHERE t_STATUS = 'FOLLOW' )";
              $result = mysqli_query($conn, $query);
              $total = mysqli_num_rows($result);

              echo "<h3> There are $total Check/Follow Tickets</h3>";
              mysqli_close($conn); //disconnect
            ?></h3>
            <a href="checkfollow.php" class="btn btn-outline-info">View</a>
          </div>
        </div>
  	  </div>
      </div>
    </div>
  </footer>
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>

</html>
