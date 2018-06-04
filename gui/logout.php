<?php
	if (session_id() === "")
	{
		session_start();
	}
	
	require_once($_SERVER["DOCUMENT_ROOT"] .  "/Common_project/bl/bl_classes/user/loginbl.class.php");
	
	$loginBL = new LoginBL();
	$loginBL->Logout();
?>