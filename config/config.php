<?php
try 
{
if(!defined('HOSTNAME')) define("HOSTNAME","localhost");


//DB NAME

if(!defined('DBNAME')) define("DBNAME","homeland");


//user
if(!defined('USER')) define("USER","root");


//password
if(!defined('PASS')) define("PASS","");


$conn=new PDO("mysql:host=".HOSTNAME.";dbname=".DBNAME.";",USER,PASS);
 $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
   


/*
if($conn == true)
{
	echo "db connected ";
}
else
{
	echo "not connectd";
}




*/
}
catch(PDOException $e)
{
    die("Database connection failed: " . $e->getMessage());
}
?>