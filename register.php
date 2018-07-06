<?php
 
// response json

$json = array();

if (isset($_REQUEST["fname"]) && isset($_REQUEST["uname"]) && isset($_REQUEST["email"])) {

try
{
  
	$fname=$_REQUEST["fname"];
	$lname=$_REQUEST["lname"];
	$uname=$_REQUEST["uname"];
	$password=$_REQUEST["password"];
	$email=$_REQUEST["email"];
	$address=$_REQUEST["address"];
	$contact=$_REQUEST["contact"];
  	$db=mysql_connect("localhost","root","");
	mysql_select_db("dbprint",$db);
$q="insert into tbregister(fname,lname,uname,password,email,address,contact)values('$fname','$lname','$uname','$password','$email','$address','$contact')";
	mysql_query($q);
 
} 
catch (Exception $e) 
{
    echo 'Caught exception: ',  $e->getMessage(), "\n";
}
    
}
 else 
{
    // user details missing
echo "details missing";
}
?>