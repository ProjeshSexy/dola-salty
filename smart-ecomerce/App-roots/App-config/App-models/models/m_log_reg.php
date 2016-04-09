<?php

include("../../init.php");
$op=$_REQUEST['op'];
 if (isset($op)&& $op=="reg_user")
 {
	 		
		$auth->validate_registation($_REQUEST['u-name'],$_REQUEST['password'],$_REQUEST['re-password'],$_REQUEST['email']);

		echo 1;
 	
	
 }


//$op=$_REQUEST['op'];

 if ( isset($op)&& $op=="verify_user")
{

	 if ($auth->validate_login($_REQUEST['u-name'],$_REQUEST['password'])==0)
	 {
	
		echo 0;
	 }
	else
	{
		if ($auth->validate_login_admin($_REQUEST['u-name'],$_REQUEST['password'])==1){
			$_SESSION['admin']=TRUE;
			$_SESSION['username'] = $_REQUEST['u-name'];
		    $_SESSION['loggedin'] = TRUE;
		    var_dump($_SESSION['admin']+"is admin");die;
		    echo 1;
		}else{
		$_SESSION['username'] = $_REQUEST['u-name'];
		$_SESSION['loggedin'] = TRUE;
		


	// $sale=$_REQUEST["saleinfo"];
	// //$name= $_REQUEST['password'];
	// $name=$_REQUEST["u-name"];

	// 	$sql = "INSERT INTO buyer (fullname,buy_details)
	// 	VALUES ('".$name."','".$sale."')";
	// 	//ho $sql;
 //       $Database->query($sql);
		echo 1;
	}
	}
}
