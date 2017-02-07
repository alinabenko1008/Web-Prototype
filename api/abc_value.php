<?php

include('database_connect.php');
  
 //execute the SQL query and return records
$result = mysql_query("SELECT * FROM tb_overview");
//fetch tha data from the database
while ($row = mysql_fetch_array($result)) {
    //echo "ID:".$row{'id'}." backroom:".$row{'backroom'}." salesfloor:".$row{'salesfloor'};
    $var_sales=$row{'salesfloor'};
	$var_backroom=$row{'backroom'};
	$var_manne=$row{'mannequin'};
}
mysql_close($link);
/* $sum=$var_sales+$var_backroom+$var_manne;
$mean=100/$sum;
$sales_rate=round($var_sales*$mean,1);
$back_rate=round($var_backroom*$mean,1);
$mann_rate=round($var_manne*$mean,1);

$title_sales="Sales Floor: ".$sales_rate."%";
$title_back="Back Room: ".$back_rate."%";
$title_mann="Mannequin Area: ".$mann_rate."%"; */

$sales_rate=$var_sales;
$back_rate=$var_backroom;
$mann_rate=$var_manne;

$title_sales="Sales Floor: ".$var_sales;
$title_back="Back Room: ".$var_backroom;
$title_mann="Shopping Window: ".$var_manne;

$script = '<script>var sales="'.$title_sales.'";</script>';
echo $script; 
$script = '<script>var back="'.$title_back.'";</script>';
echo $script;
$script = '<script>var mann="'.$title_mann. '";</script>';
echo $script;
$script = '<script>var a='.$var_sales.';</script>';
echo $script;
$script = '<script>var b='.$var_backroom. ';</script>';
echo $script;
$script = '<script>var c='.$var_manne. ';</script>';
echo $script;

?>


