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
  <div>
    <?php
    echo  "<form class form-group action= add.php method= post>
    <h6>
    <div class=col-sm-7>
            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1> User: </div>
            <div class=col ><input placeholder= 'First Name' class= form-control mr- type= text name= adduser  value=></div>
            <div class=col><input placeholder= 'Last Name' class= form-control mr- type= text name= adduser  value=></div>
            </div>
            </div>

            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1>Title:</div>
            <div class=col><input placeholder= Title class= form-control type= text name= addtitle value=></div>
            </div>
            </div>

            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1>Summary:</div>
            <div class=col><textarea class= form-control rows= 3 type= text name= addsummary value=></textarea></div>
            </div>
            </div>

            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1>User Group:</div>
            <div class=col><input readonly class= form-control type= text name= addusergroup value=CUSTOMER></div>
            </div>
            </div>

            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1>User ID:</div>
            <div class=col><input class= form-control type= text name= adduid value=></div>
            </div>
            </div>

            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1>Date:</div>
            <div class=col><input readonly class= form-control type= text name= adddatetime value=$currentdate></div>
            </div>
            </div>

            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1>Category:</div>
            <div class=col><select class= custom-select type= text name= addcat value= OPEN></div>
            <option class= form-control>SOFTWARE</option>
            <option class= form-control>GENERAL</option>
            <option class= form-control>HARDWARE</option>
            <option class= form-control>MISC</option>
            </div>
            </div>

            <div class= form-group>
            <div class = 'form row'>
            <div class=col-sm-1>Status:</div>
            <div class=col><input readonly class= form-control type= text name= addstatus value= OPEN></div>
            </div>
            </div>

            <input class= btn btn-outline type= submit name= Submit1 value= ADD>
            </h6>
            </div>
          </form>";
?>
  </div>

</html>
