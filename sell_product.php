<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Sell Product</title>
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
			    <a class='logo' href="index.php">Inventory Management System</a>
			    <h1>Sell Product</h1>
		    </div>
		    <div class="box-section"><br>

		    	<form class="form-horizontal" role="form" id="sell_prod" method="POST" action="invoice.php">
		    		<div class="container">

		    			<div class="form-group row">
	        				<label for="customer_name" class="col-xs-4 col-form-label text-right">Customer Name :</label>
	        				<div class="col-xs-4">
	            				<input class="form-control" type="text" name="customer_name"  id="cust_name">
	        				</div>
      					</div>
      					<div class="form-group row">
	        				<label for="customer_con" class="col-xs-4 col-form-label text-right">Customer Contact :</label>
	        				<div class="col-xs-4">
	            				<input class="form-control" type="text" name="customer_con"  id="cust_con">
	        				</div>
      					</div>
      					<div class="form-group row">
	        				<label for="customer_addr" class="col-xs-4 col-form-label text-right">Customer Address :</label>
	        				<div class="col-xs-4">
	            				<input class="form-control" type="text" name="customer_addr"  id="cust_addr">
	        				</div>
      					</div>

      					<!--<div class="form-group row">
      						<label for="example-text-input" class="col-xs-4 col-form-label text-right">Select No. of Products to be Sold :</label>
      						<select name="num">
      							<option value="1">1</option>
      							<option value="2">2</option>
      							<option value="3">3</option>
      							<option value="4">4</option>
      							<option value="5">5</option>
      						</select>
      					</div>-->
      					<div class="form-group row">
					        <label for="prod_sell1" class="col-xs-4 col-form-label text-right">Select Product 1:</label>
					        <?php
					          $selectprod = mysql_query('SELECT * FROM product');
					        ?>
					        <select name="product1" >
					        	<option value="selpro">-----Select Product-----</option>
					    		<?php
					      			while ($row = mysql_fetch_array($selectprod))
					      			{
					    		?>
					    				<option value="<?php echo  $row['product_id'].','.$row['product_name'].','.$row['qty'].','.$row['exp_date'].','.$row['buy_ts'].','.$row['sp'];?>"><?php echo $row['product_id'].','.$row['product_name'].','.$row['qty'].','.$row['exp_date'].','.$row['sp'];?></option>
					    		<?php
					      			}
					    		?>
							</select>
							<select name="quantity1">
								<?php
									for($i=1;$i<=10;$i++)
									{
								?>
									<option val="<?php $i?>"><?php echo $i?></option>
								<?php
									}
								?>
							</select>
    					</div>
    					<div class="form-group row">
					        <label for="prod_sell2" class="col-xs-4 col-form-label text-right">Select Product 2:</label>
					        <?php
					          $selectprod = mysql_query('SELECT * FROM product');
					        ?>
					        <select name="product2" >
					        	<option value="selpro">-----Select Product-----</option>
					    		<?php
					      			while ($row = mysql_fetch_array($selectprod))
					      			{
					    		?>
					    				<option value="<?php echo  $row['product_id'].','.$row['product_name'].','.$row['qty'].','.$row['exp_date'].','.$row['buy_ts'].','.$row['sp'];?>"><?php echo $row['product_id'].','.$row['product_name'].','.$row['qty'].','.$row['exp_date'].','.$row['sp'];?></option>
					    		<?php
					      			}
					    		?>
							</select>
							<select name="quantity2">
								<?php
									for($i=1;$i<=10;$i++)
									{
								?>
									<option val="<?php $i?>"><?php echo $i?></option>
								<?php
									}
								?>
							</select>
    					</div>
    					<div class="form-group row">
					        <label for="prod_sell3" class="col-xs-4 col-form-label text-right">Select Product 3:</label>
					        <?php
					          $selectprod = mysql_query('SELECT * FROM product');
					        ?>
					        <select name="product3" >
					        	<option value="selpro">-----Select Product-----</option>
					    		<?php
					      			while ($row = mysql_fetch_array($selectprod))
					      			{
					    		?>
					    				<option value="<?php echo  $row['product_id'].','.$row['product_name'].','.$row['qty'].','.$row['exp_date'].','.$row['buy_ts'].','.$row['sp'];?>"><?php echo $row['product_id'].','.$row['product_name'].','.$row['qty'].','.$row['exp_date'].','.$row['sp'];?></option>
					    		<?php
					      			}
					    		?>
							</select>
							<select name="quantity3">
								<?php
									for($i=1;$i<=10;$i++)
									{
								?>
									<option val="<?php $i?>"><?php echo $i?></option>
								<?php
									}
								?>
							</select>
    					</div>


    					<a href="#"><button type="submit" name="submit" id="submitsell" class="btn btn-primary"><span class="glyphicon glyphicon-check"></span>Sell</button></a>
    					<a href="#"><button type="reset" name="reset" class="btn btn-danger"><span class="glyphicon glyphicon-remove-sign"></span> Reset</button></a>
       					<a href="owner_dashboard.php"><button type="button" class="btn btn-success"><span class="glyphicon glyphicon-arrow-left"></span> Cancel</button></a>

		    		</div>
		    	</form>

		    </div>
		</div>
	</body>
</html>