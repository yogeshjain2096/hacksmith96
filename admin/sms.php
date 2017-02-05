<?php
if(!isset($_POST['submit']))
{
	//This page should not be accessed directly. Need to submit the form.
	echo "error; you need to submit the form!";
}

$mob = $_POST['mobile'];
$msg = $_POST['message'];

$mob ='8982696654';
$msg = 'message';

header('Location:https://control.msg91.com/api/sendhttp.php?authkey=140074AmssKqxj1iu589594a0&mobiles=91'.$mob.'&message='.$msg.'&sender=senderid&route=4&country=0');
?> 

