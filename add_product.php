<html>
<head>
  <meta charset="utf-8">
  <title>Add Product</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="container" id="logo">
      <a class='logo' href="index.php">Inventory Management System</a>
      <h1>Add Product</h1>
    </div>

<div class="box-section">
  <br><br>
  <form class="form-horizontal" role="form">
    <div class="container">
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Product ID :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text"  id="example-text-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Product Name :</label>
          <div class="col-xs-4">
            <input class="form-control" type="text"  id="example-text-input">
          </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Category :</label>
        <div class="col-xs-4">
            <input class="form-control" type="text"  id="example-text-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Quantity :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text"  id="example-text-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Cost Price :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text"  id="example-text-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Selling Price :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text"  id="example-text-input">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-date-input" class="col-xs-4 col-form-label text-right">Enter Expiry Date :</label>
          <div class="col-xs-4">
            <input class="form-control" type="date" value="2016-10-07" id="example-date-input">
          </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Enter Manufacturing Company :</label>
        <div class="col-xs-4">
            <input class="form-control" type="text"  id="example-text-input">
          </div>
        </div>
        <a href="#"><button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Submit</button></a>
        <a href="#"><button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Reset</button></a>
    </div>
  </form>
</div>
  </div>
</body>
</html>
