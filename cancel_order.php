<?php
session_start();
if(isset($_SESSION['user'])=="") 
{
	header("location:login.php?msg=stop");
	exit();
}
include("connect.php");
$i=$_REQUEST['did'];

mysql_query("delete from  food_orders where frid=$i")or die ("Delete Query Fail");
header("location:order_history.php");
?>