<?php
 

$json = array();

if (isset($_REQUEST["username"])) 
{

try
{
  
	
	$username=$_REQUEST["username"];
	
  	$db=mysql_connect("localhost","root","");
	mysql_select_db("dbprint",$db);
	$q="select * from tbregister where uname='$username'";
	$result=mysql_query($q);
	
	$out="{\"details\":[";
	while($row=mysql_fetch_array($result))
	{
		extract($row);
		if($out!="{\"details\":[")
		{
		$out=$out.",";

		}
	$out=$out.'{"fname":"'.$fname.'",';
	$out=$out.'"lname":"'.$lname.'",';
	
	$out=$out.'"email":"'.$email.'",';
	$out=$out.'"address":"'.$address.'",';
	$out=$out.'"contact":"'.$contact.'"}';
		
	}
	$out=$out."]}";
	echo $out;

 
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