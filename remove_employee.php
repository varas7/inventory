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
      <h1>Remove Employee</h1>
    </div>

<div class="box-section">
  <br><br>
  <form class="form-horizontal" role="form">
    <div class="container">
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Employee Name :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text" placeholder="Enter Employee Name" id="employeename">
        </div>
      </div>

  </form>

  <button type="button" class="btn btn-danger" data-toggle="modal" data-target="#remprod"><span class="glyphicon glyphicon-remove-sign"></span> Remove</button>&nbsp  
    <a href="owner_dashboard.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>


  <!-- Modal -->
  <div class="modal fade" id="remprod" role="dialog">
    <div class="modal-dialog">

      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Warning!</h4>
        </div>
        <div class="modal-body">
          <p>Are You Sure ?</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger"><span class="glyphicon glyphicon-check"></span> Yes</button>
          <button type="button" class="btn btn-success" data-dismiss="modal"><span class="glyphicon glyphicon-remove-sign"></span> No</button>
        </div>
      </div>

    </div>
  </div>

</div>


</div>
  </div>
</body>
</html>
