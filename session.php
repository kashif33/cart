<?php
error_reporting(0);
session_start();
$_session['abc']=1;
//print_r($_session);
//exit();

if($_session['abc']==1)
 {
	echo "i am here";
}
else{
	echo "invalid";
}


?>