<?php

	include('database_connect.php');
	$query = "SELECT * FROM tb_four_analysis";
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$resultDate = array(); // make a new array to hold all your data
	$resultStoreVisitor=array();
	$resultFittingRoom=array();
	$resultConsumerRate=array();
	$resultFittingRate=array();
	
	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultDate[$index] = "'".$row{'date'}."'";
		 $resultStoreVisitor[$index] = $row{'storevisitor'};
		 $resultFittingRoom[$index] = $row{'fittingroom'};
		 $resultConsumerRate[$index] = $row{'consumerrate'};
		 $resultFittingRate[$index] = $row{'fittingrate'};
		 $index++;
	}
	mysql_close($link);
		//var store_data11=['Number of visitors',413,399,1128,379,898,145,549];
		//var fitting_data1=['Number of Items',209,514,592,921,282,138,513];
		//var consumer_data1=['percentage of consumers',23.02,33.02,25.81,36.78,26.27,48.68,31.82];
		//var sold_data1=['percentage of items', 26.00, 33.00, 20.00, 10.00, 0.00, 15.00,18.00];
		//var store_x_axis1=['1/19/2017','1/20/2017','1/21/2017','1/22/2017','1/23/2017','1/24/2017','1/25/2017'];
	//passing php array to javascript array
	$script = '<script>var store_data11 = new Array('.'\'Number of visitors\''.','. implode(',', $resultStoreVisitor) . ');</script>';
	echo $script;
	$script = '<script>var fitting_data1 = new Array('.'\'Number of Items\''.','. implode(',', $resultFittingRoom) . ');</script>';
	echo $script;
	$script = '<script>var consumer_data1 = new Array('.'\'percentage of consumers\''.','. implode(',', $resultConsumerRate) . ');</script>';
	echo $script;
	$script = '<script>var sold_data1 = new Array('.'\'percentage of items\''.','. implode(',', $resultFittingRate) . ');</script>';
	echo $script;
	$script = '<script>var store_x_axis1 = new Array(' . implode(',', $resultDate) . ');</script>';
	echo $script;     
	$script = '<script>var fitting_x_axis = new Array(' . implode(',', $resultDate) . ');</script>';
	echo $script;
	$script = '<script>var consumer_x_axis = new Array(' . implode(',', $resultDate) . ');</script>';
	echo $script;
	$script = '<script>var sold_x_axis = new Array(' . implode(',', $resultDate) . ');</script>';
	echo $script;
?>