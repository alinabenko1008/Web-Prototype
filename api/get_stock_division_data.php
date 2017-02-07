<?php

	include('database_connect.php');
	$query = "SELECT * FROM tb_stock_division";
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	
	$resultFootwear = array(); // make a new array to hold all your data
	$resultApparel=array();
	$resultAccessories=array();
	
	$index = 0;
	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultFootwear[$index] = $row{'footwear'};
		 $resultApparel[$index] = $row{'apparel'};
		 $resultAccessories[$index] = $row{'accessories'};
		 $index++;
	}
	mysql_close($link);

	//var stock_data1=['Footwear',  150, 471, 8];
	//var stock_data2=['Apparel', 2075, 5729, 19];
	//var stock_data3=['Accessories',  210, 521, 12];	
	
	//passing php array to javascript array
	$script = '<script>var stock_data1 = new Array('.'\'Footwear\''.','. implode(',', $resultFootwear) . ');</script>';
	echo $script;
	$script = '<script>var stock_data2 = new Array('.'\'Apparel\''.','. implode(',', $resultApparel) . ');</script>';
	echo $script;
	$script = '<script>var stock_data3 = new Array('.'\'Accessories\''.','. implode(',', $resultAccessories) . ');</script>';
	echo $script;
	
?>