<html>
<head>
  <meta charset="utf-8">
  <title>Add Employee</title>
  <link rel="stylesheet" href="css/bootstrap/css/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="style.css" media="screen" title="no title">
  <script src="js/jquery-3.1.0.min.js"></script>
  <script src="css/bootstrap/js/bootstrap.min.js"></script>
  <script src="js/validator.min.js"></script>
</head>
<body>
  <div class="container">
    <div class="container" id="logo">
      <a class='logo' href="index.php">Inventory Management System</a>
      <h1>Add Employee</h1>
    </div>

<div class="box-section">
  <br><br>
  <form class="form-horizontal" role="form" id="add_emp" method="POST" action="add_person_details.php" data-toggle="validator">
    <div class="container">
      <div class="form-group row">
        <label for="fullname" class="col-xs-4 col-form-label text-right">Full Name :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text" placeholder="Enter Full Name" name="full_name" id="fullname" data-error="Please enter Fullname" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Username :</label>
          <div class="col-xs-4">
            <input class="form-control" type="text"  placeholder="Enter Userame" name="username" id="user_name" data-error="Please enter Username" required>
            <div class="help-block with-errors"></div>
          </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Password :</label>
        <div class="col-xs-4">
            <input class="form-control" type="password" placeholder="Enter Password" name="password" id="password" data-error="Please enter Password" required>
            <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Password :</label>
        <div class="col-xs-4">
          <input class="form-control" type="password" placeholder="Re-enter Password" name="repassword" id="repass" data-match="#password" data-match-error="Passwords don't match" data-error="Please enter Password" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Contact Number :</label>
        <div class="col-xs-4">
          <input class="form-control" type="number" data-minlength="10" placeholder="Enter Contact Number" name="contact_no" id="contacno" data-error="Please enter Contact Number" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>
      <div class="form-group row">
        <label for="example-text-input" class="col-xs-4 col-form-label text-right">Address :</label>
        <div class="col-xs-4">
          <input class="form-control" type="text" placeholder="Enter Address" name="address" id="address" data-error="Please enter Address" required>
          <div class="help-block with-errors"></div>
        </div>
      </div>


        <a href="#"><button type="submit" name="submit" id="submitpro" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span> Submit</button></a>&nbsp
        <a href="#"><button type="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Reset</button></a>&nbsp
        <a href="owner_dashboard.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>&nbsp
    </div>
  </form>
</div>
  </div>
</body>
</html>
