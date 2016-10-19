<?php
	if( isset($_POST['submit']) ){
		include 'configuration.php';
		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$selprod=$_POST['prod'];


		$del = "DELETE FROM product WHERE product_name='".$selprod."'";
		$query = mysql_query($del);

		$del = "DELETE FROM mfg_company WHERE product_name='".$selprod."'";
		$query = mysql_query($del);

		$del = "DELETE FROM category WHERE product_name='".$selprod."'";
		$query = mysql_query($del);

		echo "Deleting the" .$selprod. "from the records";
		header("refresh:5;url=owner_dashboard.php");
	}
?>