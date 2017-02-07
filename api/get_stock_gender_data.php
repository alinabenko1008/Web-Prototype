<?php

	include('database_connect.php');
	$query = "SELECT * FROM `tb_stock_gender` ";
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$resultMan = array(); // make a new array to hold all your data
	$resultWoman=array();
	$resultKids=array();
	$resultUnsex=array();
	
	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultMan[$index] = $row{'man'};
		 $resultWoman[$index] = $row{'woman'};
		 $resultKids[$index] = $row{'kids'};
		 $resultUnsex[$index] = $row{'unsex'};
		 $index++;
	}
	mysql_close($link);
		//var gender_data1=['man',  739,2621,  14];
		//var gender_data2=['woman',  1431,3462, 24];
		//var gender_data3=['kids',  125,341,  1];
		//var gender_data4=['unisex', 140,297,  0];	
	//passing php array to javascript array
	$script = '<script>var gender_data1 = new Array('.'\'man\''.','. implode(',', $resultMan) . ');</script>';
	echo $script;
	$script = '<script>var gender_data2 = new Array('.'\'woman\''.','. implode(',', $resultWoman) . ');</script>';
	echo $script;
	$script = '<script>var gender_data3 = new Array('.'\'kids\''.','. implode(',', $resultKids) . ');</script>';
	echo $script;
	$script = '<script>var gender_data4 = new Array('.'\'unisex\''.','. implode(',', $resultUnsex) . ');</script>';
	echo $script;
	
?>