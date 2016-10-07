<?php
	session_start();
	if( isset($_POST['login']) && isset($_POST['username']) && isset($_POST['pwd']) )
	{
		include 'configuration.php';

		$username = stripslashes($_POST['username']);
		$password = stripslashes($_POST['pwd']);

		if(!($dbconn = @mysql_connect($dbhost, $dbuser, $dbpass))) exit('Error connecting to database.');
		mysql_select_db($db);

		$getCreds = mysql_query("SELECT role FROM ".$dbtable." WHERE username='".$username."' AND password='".$password."'");
		$gotCreds = mysql_fetch_array($getCreds);

		if(strcmp($gotCreds['role'],'admin')==0){
			$_SESSION['admin']='administrator';
			header("Location: admin_dashboard.php");
		}
		else if($gotCreds['role']=='owner'){
			$_SESSION['owner']='shopowner';
			header("Location: owner_dashboard.php");
		}
		else if($gotCreds['role']=='employee'){
			$_SESSION['employee']='emp';
			header("Location: employee_dashboard.php");
		}
		else
		{
			header("Location: index.php");
		}
	}
	else
	{
		header("Location: index.php");
	}
?>
