<?php
  session_start();
  if(!isset($_SESSION['employee']))
  {
    header("Location: index.php");
    exit();
  }
  include 'configuration.php';
  if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
  mysql_select_db($db);
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Dashboard - Inventory Management System</title>
    <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <script src="js/jquery-3.1.0.min.js"></script>
    <script src="css/bootstrap/js/bootstrap.min.js"></script>
  </head>
  <body>
    <div class="container">

      <div class="container" id="logo">
  			<a class='logo' href="employee_dashboard.php">Inventory Management System</a>
  		</div>
      <br><h1>Welcome to the Employee's Dashboard</h1>
      <div class="box-section row">
        <div class="col-md-4 text-center">
          <br><br><br><br><a href="sell_product.php"><button type="button" class="btn btn-danger" id="new_invoice">
            <span class="glyphicon glyphicon-plus-sign"></span> Click Here
          </button></a>
          <br>to
          <br><legend>Sell Product</legend>
          <small class="text-danger text-center">Sell a product to customer</small>
          <br><br><br>
        </div>

        <div class="col-md-4 text-center">
          <br><br><br><br><a href="#"><button type="button" class="btn btn-primary" id="view_stock">
            <span class="glyphicon glyphicon-tasks"></span> Click Here
          </button></a>
          <br>to
          <br><legend>View Available Inventory</legend>
            <small class="text-danger text-center">See the Available Items in the Inventory</small>
            <br><br><br>
        </div>

        <div class="col-md-4 text-center">
          <br><br><br><br><a href="select_product.php"><button type="button" class="btn btn-info" id="view_product">
            <span class="glyphicon glyphicon-search"></span> Click Here
          </button></a>
          <br>to
          <br><legend>View Product Details</legend>
          <small class="text-danger text-center">Get the details of a specific product</small>
          <br><br><br>
        </div>
      </div>

    </div>
  </body>
</html>
