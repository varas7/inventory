<?php
	if( isset($_POST['submit']) ){
		include 'configuration.php';
		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$custname = $_POST['customer_name'];
		$custcon = $_POST['customer_con'];
		$custaddr = $_POST['customer_addr'];
		$p1det = $_POST['product1'];
		$p2det = $_POST['product2'];
		$p3det = $_POST['product3'];
		$noof1 = $_POST['quantity1'];
		$noof2 = $_POST['quantity2'];
		$noof3 = $_POST['quantity3'];


		for($i=1;$i<=3;$i++)
		{
			$p = explode(",",${'p'.$i.'det'});
			${'p'.$i.'id'} = $p[0];
			${'p'.$i.'name'} = $p[1];
			${'p'.$i.'ts'}=$p[2];
			${'p'.$i.'expd'}=$p[3];
			${'p'.$i.'cp'}=$p[4];
			${'p'.$i.'sp'}=$p[5];
		}



		$bill = 0;

		echo "Customer Name -	".$custname."<br />";
		echo "Customer Contact -	".$custcon."<br />";
		echo "Customer Address -	".$custaddr."<br />";

		for($i=1;$i<=3;$i++)
		{
			echo "<b><u>Product	".$i."</b></u><br />";
			echo "  Name -				".${'p'.$i.'name'}."<br />";
			echo "  Exp. Date (yyyy-mm-dd) -	".${'p'.$i.'expd'}."<br />";
			echo "  Selling Price(each) - Rs.	".${'p'.$i.'sp'}."<br />";
			echo "  Quantity -			".${'noof'.$i}."<br />";
			$cost = ${'p'.$i.'sp'}*${'noof'.$i};
			echo "  Selling Price - Rs.		".$cost."<br /><br />";
			$bill = $bill + $cost;
		}

		echo "***************************<br /><b>TOTAL BILL - Rs.	".$bill."</b><br />";

		$insert = "INSERT INTO person (name,contact_no,address, role) VALUES ('".$custname."','".$custcon."','".$custaddr."','Customer')";
		$query = mysql_query($insert);

		$date = new DateTime();
		$ts = $date->getTimestamp();
		$insert = "INSERT INTO transaction (txn_timestamp,txn_type) VALUES ('".date('Y-m-d H:i:s',$ts)."','S')";
		$query = mysql_query($insert);
		$txnid = mysql_insert_id();

		for($i=1;$i<=3;$i++)
			{
				$insert = "INSERT INTO txn_on (product_name, txn_timestamp, expiry_date, cp, id, qty_buy_sell, txn_type) VALUES ('".${'p'.$i.'name'}."','".${'p'.$i.'ts'}."','".${'p'.$i.'expd'}."','".${'p'.$i.'cp'}."','".$txnid."','".${'noof'.$i}."', 'S')";
				$query = mysql_query($insert);
			}

					$check = mysql_query("SELECT * FROM product WHERE product_id='".$p1id."' ");
					$query = mysql_fetch_array($check);
					$qtyf=$query['qty']-$noof1;

					$query= mysql_query("UPDATE product SET qty=".$qtyf." WHERE product_id='".$p1id."'");


					$check = mysql_query("SELECT * FROM product WHERE product_id='".$p2id."' ");
					$query = mysql_fetch_array($check);
					$qtyf=$query['qty']-$noof2;

					$query= mysql_query("UPDATE product SET qty=".$qtyf." WHERE product_id='".$p2id."'");


					$check = mysql_query("SELECT * FROM product WHERE product_id='".$p3id."' ");
					$query = mysql_fetch_array($check);
					$qtyf=$query['qty']-$noof3;

					$query= mysql_query("UPDATE product SET qty=".$qtyf." WHERE product_id='".$p3id."'");

		echo "<b>BILL NO......................................................".$txnid."</b><br />";


	}
	else
	{
		echo "Go to Sell Product section for the Invoice Generation";
	}

?>