<?php
error_reporting(0);
session_start();
$ses_id = session_id();

$host = 'localhost';
$username = 'web2te_Amazing-Infotech-pvt-ltd';
$password = '.KGfQ6Pni-oO';
$dbName = 'web2te_Amazing-Infotech-pvt-ltd';



$conn = new mysqli($host,$username,$password,$dbName);
if($conn->connect_errno)
{
	echo $conn->connect_error;
}



//$site_root = 'https://'.$_SERVER['HTTP_HOST'].'/';
$site_root = 'https://web2tech.org/Amazing-Infotech-pvt-ltd/admin';
$site = 'https://web2tech.org/Amazing-Infotech-pvt-ltd/';

?>