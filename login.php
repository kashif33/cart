<?php
error_reporting(0);
session_start();
$email = $_POST['email'];
$password = $_POST['pwd'];
$r1 = "usman";
$r2 = "123";
//print_r($email);
//print_r($password);
//exit();
if($r1==$email && $r2==$password)
{
	//echo "your login";
	$_session['abc']=1;
	//print_r($_session);
	//exit();
	header('location:session.php');
	//exit();

}else{
	echo "invalid email or password";
}


?>