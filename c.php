<?php
	$mysqli = new mysqli("localhost","root","","pcdo");
	if($mysqli->connect_errno)
		die("Connection failed".$mysqli->connect_error);
			$s;
$s = "insert into test6(one,two,three,four,five,six,seven,eight,nine,ten,elven,twel,username,jone) values";
for($i=0;$i<$_REQUEST['numbers'];$i++)
	{
	
 $s.= "('".$_REQUEST['one'][$i]."','".$_REQUEST['two'][$i]."','".$_REQUEST['three'][$i]."','".$_REQUEST['four'][$i]."','".$_REQUEST['five'][$i]."','".$_REQUEST['six'][$i]."','".$_REQUEST['seven'][$i]."','".$_REQUEST['eight'][$i]."','".$_REQUEST['nine'][$i]."','".$_REQUEST['ten'][$i]."','".$_REQUEST['elven'][$i]."','".$_REQUEST['twel'][$i]."','".$_REQUEST['username'][$i]."','".$_REQUEST['jone'][$i]."'),";

}
	$s = rtrim($s,",");
	if(!$mysqli->query($s))
		echo $mysqli->error;
	else
		echo "Records Saved <br />";
		
	$mysqli->close();


?>