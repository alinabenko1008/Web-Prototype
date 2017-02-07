<?php

	include('database_connect.php');
	$query = "SELECT * FROM `tb_refill` ";
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$resultDate = array(); // make a new array to hold all your data
	$resultRefill_10=array();
	$resultRefill_30=array();
	$resultRefill_60=array();
	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultDate[$index] = "'".$row{'date'}."'";
		 $resultRefill_10[$index] = $row{'refill_10'};
		 $resultRefill_30[$index] = $row{'refill_30'};
		 $resultRefill_60[$index] = $row{'refill_60'};
		 $index++;
	}
	mysql_close($link);
		//var refill_data1=['refilled number(10 min)',81,96,382,52,76,59,209];
		//var refill_data2=['refilled number(30 min)',45,53,32,81,143,25,30];
		//var refill_data3=['refilled number(60 min)',45,53,32,81,142,24,29];
		//var refill_x_axis=['1/19/2017','1/20/2017','1/21/2017','1/22/2017','1/23/2017','1/24/2017','1/25/2017'];
	//passing php array to javascript array
	$script = '<script>var refill_data1 = new Array('.'\'refilled number(10 min)\''.','. implode(',', $resultRefill_10) . ');</script>';
	echo $script;
	$script = '<script>var refill_data2 = new Array('.'\'refilled number(30 min)\''.','. implode(',', $resultRefill_30) . ');</script>';
	echo $script;
	$script = '<script>var refill_data3 = new Array('.'\'refilled number(60 min)\''.','. implode(',', $resultRefill_60) . ');</script>';
	echo $script;
	$script = '<script>var refill_x_axis = new Array(' . implode(',', $resultDate) . ');</script>';
	echo $script; 
	
?>