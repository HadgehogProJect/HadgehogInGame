<?php 
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$err = '';
if(trim($email) == '')
	$err ='enter your email';
else if (trim($name) == '')
$err = 'enter your name';
else if (trim($message) == '')
$err = 'where your message';

else if (strlen($message) < 10)
$err = 'your message so short';

if ($err != '') {
	echo $err;
	exit;
}

?>