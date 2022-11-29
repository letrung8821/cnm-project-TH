<?php
	//Start session
	session_start();
	//Check whether the session variable SESS_MEMBER_ID is present or not
	if((!isset($_SESSION['ID']) || (trim($_SESSION['ID']) == '')) && (!isset($_SESSION['vt']) || (trim($_SESSION['vt']) == ''))) 
	{
		header("location:login_form.php");
		exit();
	}
?>