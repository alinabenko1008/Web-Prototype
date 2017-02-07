<?php

	include('database_connect.php');
	$query = "SELECT * FROM tb_reservation ORDER BY id DESC";
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$resultDuring = array(); // make a new array to hold all your data
	$resultItemPercentage=array();
		
	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultDuring[$index] ="'".$row{'minutes'}."minute'";
		 $resultItemPercentage[$index] = $row{'itempercentage'};
		 $index++;
	}
	mysql_close($link);
		//var reservation_data=['PERCENTAGE of Item',1.00,2.00,2.00,1.50,1.00,1.50,2.00,1.00,5.00,15.00,44.00,24.00];
		//var reservation_x_axis=['60minutes','55minutes','50minutes','45minutes','40minutes','35minutes','30minutes','25minutes','20minutes','15minutes','10minutes','5minutes'];
	//passing php array to javascript array
	$script = '<script>var reservation_data = new Array('.'\'PERCENTAGE of Item\''.','. implode(',', $resultItemPercentage) . ');</script>';
	echo $script;
	$script = '<script>var reservation_x_axis = new Array(' . implode(',', $resultDuring) . ');</script>';
	echo $script; 
	
?>