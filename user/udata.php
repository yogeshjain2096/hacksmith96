<?php
$name=$_REQUEST['x'];
$password=$_REQUEST['y'];
mysql_connect('localhost','root','');
mysql_select_db('test');

 $q="Select * from logintbl;
$rs=mysql_query($q);

if($rs) 

	echo "Login Succesfully";
else 
	echo "Check Login Credentials !";
?>