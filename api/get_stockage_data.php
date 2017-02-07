<?php

	include('database_connect.php');
	$query = "SELECT * FROM tb_stock_age ORDER BY week DESC";
	//ORDER BY Country ASC, CustomerName DESC;
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$resultDate = array(); // make a new array to hold all your data
	$resultItemNumber=array();
		
	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultDate[$index] = "'".$row{'week'}."week'";
		 $resultItemNumber[$index] = $row{'itemnumer'};
		 $index++;
	}
	mysql_close($link);
	
		//var stock_age=['number of Items',2,2,18,1,1,4,2,460,910,1360,1837,4598];
		//var stock_age_x_axis=['12week', '11week', '10week', '9week', '8week', '7week','6week', '5week', '4week', '3week', '2week', '1week'];
	//passing php array to javascript array
	$script = '<script>var stock_age = new Array('.'\'number of Items\''.','. implode(',', $resultItemNumber) . ');</script>';
	echo $script;
	$script = '<script>var stock_age_x_axis = new Array(' . implode(',', $resultDate) . ');</script>';
	echo $script; 
	
?>