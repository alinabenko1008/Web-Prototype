<?php
	$link = mysql_connect('localhost', 'root', '');
	
	if (!$link) {
		die('Could not connect: ' . mysql_error());
	}
	
	//select a database to work with
	$selected = mysql_select_db("db_detego_test",$link) 
	  or die("Could not select examples");
	  
	//execute the SQL query and return records
	$result = mysql_query("SELECT * FROM tb_overall_stock");
	
	//fetch tha data from the database
	while ($row = mysql_fetch_array($result)) {
		$var_stock=$row{'backroom'}."%";
		$var_onfloor=$row{'salesfloor'}."%";
	}
	
	$var_inbound_accuracy=96.27;
	$var_hitrate=86.7;
	mysql_close($link);
?>