<?php
header('Access-Control-Allow-Origin: *');
	header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");
	ini_set('display_errors',0);
	include('dbcon.php');
		
	$em = json_decode( $_POST['email']);
	echo $em;
	$un = json_decode( $_POST['username']);
	echo $un;
	$pd = json_decode( $_POST['pwd']);
	echo 
	
	var_export( $em);
	//var_export( $un);
	//var_export( $pd);
	
	
	//$add = mysql_query("INSERT INTO user_registration(emailaddress,username,password) VALUES('".$_REQUEST['email']."','".$_REQUEST['username']."','".$_REQUEST['pwd']."')");
	 $add = mysql_query("INSERT INTO user_registration(emailaddress,username,password) VALUES('$em','$un','$pd')");
?>