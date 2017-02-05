<?php
mysql_connect('localhost','root','');
mysql_select_db('test');
echo "<center><h1>";
$d=date('d:M:y h:i:s');

$f1=$_REQUEST['s1'];
$f2=$_REQUEST['s2'];
$f3=$_REQUEST['s3'];
$f4=$_REQUEST['s4'];
$f5=$_REQUEST['s5'];
$f6=$_REQUEST['s6'];
$f7=$_REQUEST['s7'];

$q="INSERT INTO rumours (dt,outbreak,title,description,pincode,symtoms,pre,med) VALUES ('$d','$f7','$f1','$f2','$f3','$f4','$f5','$f6')";

$rs=mysql_query($q);
if ($rs) {
                        
	 echo "Successfully Submitted your Report.";

	
	 }
	 else
	 {
	 	echo "UnSuccessfull <br><h2>Please <a href='report.html'>Try again</a>";
	 }


	 						

?>