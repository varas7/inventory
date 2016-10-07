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

    <h1 ><center>Inventory Management System</center></h1>
    <form class="form-horizontal" role="form">
      <div class="form-group">
        <label for="Product ID">Enter Product ID:</label>
        <input type="text" class="form-control" id="ID">
      </div>
      <div class="form-group">
        <label for="product name">Enter Product Name:</label>
        <input type="text" class="form-control" id="name">
      </div>
      <div class="form-group">
        <label for="Category">Enter Category:</label>
        <input type="text" class="form-control" id="category">
      </div>
      <div class="form-group">
        <label for="quantity">Enter Quantity:</label>
        <input type="text" class="form-control" id="quantity">
      </div>
      <div class="form-group">
        <label for="cost price">Enter Cost Price:</label>
        <input type="text" class="form-control" id="cost price">
      </div>
      <div class="form-group">
        <label for="selling price">Enter Selling Price:</label>
        <input type="text" class="form-control" id="selling price" placeholder="nothing">
      </div>
      <div class="form-group">
        <label for="expiry">Enter Expiry Date:</label>
        <input type="text" class="form-control" id="expiry" placeholder="dd/mm/yyyy">
      </div>
      <div class="form-group">
        <label for="manu company">Enter Manufacturing Company:</label>
        <input type="text" class="form-control" id="manu company">
      </div>
  <button type="submit" class="btn btn-default">Submit</button>
</form>


  </div>
</body>
</html>
