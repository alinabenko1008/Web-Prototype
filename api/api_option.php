<?php
include('database_connect.php');

//execute the SQL query and return records
$result = mysql_query("SELECT * FROM tb_optional");

	$resultinbound = array(); // make a new array to hold all your data
	$resultoutbound=array();
	$resultsales=array();
	$resultreturns=array();
	$resultdate=array();

	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultinbound[$index] = $row{'inbound'};
		 $resultoutbound[$index] = $row{'outbound'};
		 $resultsales[$index] = $row{'sales'};
		 $resultreturns[$index] = $row{'returns'};
		 $resultdate[$index] = $row{'date'};
		 $index++;
	}
	$number_optional=$index;
mysql_close($link);

?>