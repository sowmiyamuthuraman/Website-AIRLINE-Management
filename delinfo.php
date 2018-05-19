<?php
  include("db1.php");  

	$id =$_REQUEST['id'];
	
	
	// sending query
	mysql_query("DELETE FROM updates WHERE id = '$id'")
	or die(mysql_error());  	
	
	header("Location: web.php");
?> 