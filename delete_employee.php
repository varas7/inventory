<?php
	if( isset($_POST['submit']) ){
		include 'configuration.php';
		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$selemp=$_POST['employee'];


		$del = "DELETE FROM person WHERE name='".$selemp."'";
		$query = mysql_query($del);


		echo "Deleting the" .$selemp. "from the records";
		header("refresh:5;url=owner_dashboard.php");
	}
?>