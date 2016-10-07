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
      <h1>Add Owner</h1>
    </div>

<div class="box-section">
  <br><br>
  <form class="form-horizontal" role="form">
    <div class="container">
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Full Name :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text" placeholder="Enter Full Name"  id="fullname">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Username :</label>
          <div class="col-xs-4">
            <input class="form-control" type="text"  placeholder="Enter Userame" id="user_name">
          </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Password :</label>
        <div class="col-xs-4">
            <input class="form-control" type="text" placeholder="Enter Password" id="password">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Password :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text" placeholder="Re-enter Password" id="repass">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Contact Number :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text" placeholder="Enter Contact Number" id="contacno">
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Address :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text" placeholder="Enter Address" id="address">
        </div>
      </div>


        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addowner"><span class="glyphicon glyphicon-check"></span> Submit</button>&nbsp
        <a href="#"><button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Reset</button></a>&nbsp
        <a href="admin_dashboard.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>&nbsp
        <!-- Modal -->
        <div class="modal fade" id="addowner" role="dialog">
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
  </form>
</div>
  </div>
</body>
</html>
