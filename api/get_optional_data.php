<?php

	include('database_connect.php');
	$query = "SELECT * FROM `tb_optional` ";
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$resultDate = array(); // make a new array to hold all your data
	$resultInbound=array();
	$resultOutbound=array();
	$resultSales=array();
	$resultReturns=array();
	
	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultDate[$index] = "'".$row{'date'}."'";
		 $resultInbound[$index] = $row{'inbound'};
		 $resultOutbound[$index] = $row{'outbound'};
		 $resultSales[$index] = $row{'sales'};
		 $resultReturns[$index] = $row{'returns'};
		 $index++;
	}
	mysql_close($link);
	
		//var optional_data1=['InBound',250,351,555,690,342,295,107];
		//var optional_data2=['OutBound',5,12,55,74,99,124,149];
		//var optional_data3=['Sales',190,224,495,237,401,120,297];
		//var optional_data4=['Returns',0,2,2,3,10,5,3];
		//var optional_x_axis=['1/19/2017','1/20/2017','1/21/2017','1/22/2017','1/23/2017','1/24/2017','1/25/2017'];
	//passing php array to javascript array
	$script = '<script>var optional_data1 = new Array('.'\'InBound\''.','. implode(',', $resultInbound) . ');</script>';
	echo $script;
	$script = '<script>var optional_data2 = new Array('.'\'OutBound\''.','. implode(',', $resultOutbound) . ');</script>';
	echo $script;
	$script = '<script>var optional_data3 = new Array('.'\'Sales\''.','. implode(',', $resultSales) . ');</script>';
	echo $script;
	$script = '<script>var optional_data4 = new Array('.'\'Returns\''.','. implode(',', $resultReturns) . ');</script>';
	echo $script;
	$script = '<script>var optional_x_axis = new Array(' . implode(',', $resultDate) . ');</script>';
	echo $script; 
	
?>