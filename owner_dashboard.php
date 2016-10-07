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
  			<a class='logo' href="index.php">Inventory Management System</a>
  		</div>
      <br><h1>Welcome to the Store Owner's Area</h1>
      <div class="box-section row">

        <div class="row">
          <div class="col-md-4 text-center">
            <br><br><br><br><a href="#"><button type="button" class="btn btn-primary" id="sell_product">
              <span class="glyphicon glyphicon-usd"></span> Click Here
            </button></a>
            <br>to
            <br><legend>Sell Product</legend>
            <small class="text-danger text-center">Sell a product to customer</small>
            <br><br><br>
          </div>

          <div class="col-md-4 text-center">
            <br><br><br><br><a href="invoice.php"><button type="button" class="btn btn-primary" id="new_invoice">
              <span class="glyphicon glyphicon-plus-sign"></span> Click Here
            </button></a>
            <br>to
            <br><legend>Create an Invoice</legend>
            <small class="text-danger text-center">Create a new Invoice for a customer</small>
            <br><br><br>
          </div>

          <div class="col-md-4 text-center">
            <br><br><br><br><a href="add_product"><button type="button" class="btn btn-success" id="add_product">
              <span class="glyphicon glyphicon-plus-sign"></span> Click Here
            </button></a>
            <br>to
            <br><legend>Add Product</legend>
            <small class="text-danger text-center">Start selling a Product and Add it to your system </small>
            <br><br><br>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 text-center">
            <br><br><br><br><a href="remove_product"><button type="button" class="btn btn-danger" id="rm_product">
              <span class="glyphicon glyphicon-minus-sign"></span> Click Here
            </button></a>
            <br>to
            <br><legend>Remove Product</legend>
            <small class="text-danger text-center">Stop selling a Product and Remove it from your system </small>
            <br><br><br>
          </div>

          <div class="col-md-4 text-center">
            <br><br><br><br><a href="#"><button type="button" class="btn btn-warning" id="view_pls">
              <span class="glyphicon glyphicon-folder-open"></span> Click Here
            </button></a>
            <br>to
            <br><legend>View Profit-Loss Statement</legend>
              <small class="text-danger text-center">Know how your assets are <br>performing and take wise decisions</small>
              <br><br><br>
          </div>

          <div class="col-md-4 text-center">
            <br><br><br><br><a href="#"><button type="button" class="btn btn-primary" id="view_stock">
              <span class="glyphicon glyphicon-tasks"></span> Click Here
            </button></a>
            <br>to
            <br><legend>View Available Inventory</legend>
              <small class="text-danger text-center">See the Available Items and Quantity in the Inventory</small>
              <br><br><br>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4 text-center">
            <br><br><br><br><a href="add_employee"><button type="button" class="btn btn-success" id="add_employee">
              <span class="glyphicon glyphicon-plus-sign"></span><span class="glyphicon glyphicon-user"></span> Click Here
            </button></a>
            <br>to
            <br><legend>Add an Employee</legend>
            <small class="text-danger text-center">Add you new employee to the system <br>to serve customers better</small>
            <br><br><br>
          </div>

          <div class="col-md-4 text-center">
            <br><br><br><br><a href="#"><button type="button" class="btn btn-danger" id="rm_user">
              <span class="glyphicon glyphicon-minus-sign"></span><span class="glyphicon glyphicon-user"></span> Click Here
            </button></a>
            <br>to
            <br><legend>Remove an Employee</legend>
            <small class="text-danger text-center">Remove an employee from your Store</small>
            <br><br><br>
          </div>

          <div class="col-md-4 text-center">
            <br><br><br><br><a href="#"><button type="button" class="btn btn-info" id="view_product">
              <span class="glyphicon glyphicon-search"></span> Click Here
            </button></a>
            <br>to
            <br><legend>View Product Details</legend>
            <small class="text-danger text-center">Get the details of a specific product</small>
            <br><br><br>
          </div>
        </div>

      </div>

    </div>
  </body>
</html>
