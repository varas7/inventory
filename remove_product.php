  <html>
<head>
  <meta charset="utf-8">
  <title>Remove Product</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <?php
    include 'configuration.php';
    if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
    mysql_select_db($db);
  ?>
  <div class="container">
    <div class="container" id="logo">
      <a class='logo' href="owner_dashboard.php">Inventory Management System</a>
      <h1>Remove Product</h1>
    </div>

<div class="box-section">
  <br><br>
  <form class="form-horizontal" role="form" id="remprod" method="POST" action="delete_product.php">
    <div class="container">
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Select Product :</label>
        <?php
          $selectprod = mysql_query('SELECT product_name FROM product');
        ?>
        <select name="prod" >
          <option value="selprod">-----Select Product-----</option>
    <?php
      while ($row = mysql_fetch_array($selectprod))
      {
    ?>
    <option value="<?php echo $row['product_name']?>"><?php echo $row['product_name']?></option>
    <?php
      }
    ?>
  </select>
      </div>
        <button type="submit" name="submit" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Remove</button>
    <a href="owner_dashboard.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>

  </form>


</div>


</div>
  </div>
</body>
</html>
