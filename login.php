<?php
 
// response json

$json = array();

if (isset($_REQUEST["username"]) && isset($_REQUEST["password"])) {

try
{
  
	$uname=$_REQUEST["username"];
	$password=$_REQUEST["password"];
	
  	$db=mysql_connect("localhost","root","");
	mysql_select_db("dbprint",$db);
	$q="select * from tbregister where uname='$uname' and password='$password'";
	$result=mysql_query($q);
	if(mysql_num_rows($result)>0)
	{
	echo "success";
	}
	else
	{
	echo "failure";
	}
 
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