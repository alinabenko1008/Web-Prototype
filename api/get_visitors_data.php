<?php

	include('database_connect.php');
	
	// selected day 
	if(isset($_POST["submit"])){
		$pick_date=$_POST["pick_day"];
		$seleted_day=explode("-",$pick_date);
		$year=$seleted_day[0];
		$month=$seleted_day[1];
		$day=$seleted_day[2];		
		//$test_date=$year."  ".$month."  ".$day;
	}else
	{
		$pick_date=date("Y-m-d");
		$year=date("Y");
		$month=date("m");
		$day=date("d");
	}

	$intday=(int)$day;
	$intmonth=(int)$month;

		
	//$query = "SELECT * FROM `tb_storevisitor` WHERE `month` = ".$month." AND day <= ".$intday;
	$query = "SELECT * FROM `tb_storevisitor` WHERE visitday <= '".$pick_date."'";
	$result = mysql_query($query) or die($query."<br/><br/>".mysql_error());
	$resultYear = array(); // make a new array to hold all your data
	$resultMonth=array();
	$resultDay=array();
	$resultValue=array();
	$resultvisitday=array();

	$index = 0;

	while($row = mysql_fetch_assoc($result)){ // loop to store the data in an associative array.
		 $resultYear[$index] = $row{'year'};
		 $resultMonth[$index] = $row{'month'};
		 $resultDay[$index] = $row{'day'};
		 $resultValue[$index] = $row{'value'};
		 $resultvisitday[$index] = $row{'visitday'};
		 $index++;
	}
	mysql_close($link);
	$end=$index-1;
	$diff=$index-30; //30
	$endindex=$index;
	
	// getting the last 30 days' info
	
	$x=array();
	$y=array();
	$visit_day=array();
	
	for($i=0;$i<30;$i++)
	{
		$k=$i+$diff;
		$x[$i]=$resultDay[$k];

		$y[$i]=$resultValue[$k];
			
		$visit_day[$i]=$resultvisitday[$k];
		
	}
	// getting the only date from DateTime format date data
	list($fromDate, $time1) = split(' ', $visit_day[0]);
	list($endDate, $time2) = split(' ', $visit_day[29]);
	$chartview_date_area=$fromDate."  ~  ".$endDate;
	
	//passing php array to javascript array
	$script = '<script>var store_x_axis = new Array(' . implode(',', $x) . ');</script>';
	echo $script; 
	$script = '<script>var store_data1 = new Array('.'\'Number of visitors\''.','. implode(',', $y) . ');</script>';
	echo $script
	
?>