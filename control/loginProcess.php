<?php
header("content-type:text/html;charset=utf-8");
include '../model/loginService.php';
session_start();
// $checkCode=$_POST['checkCode'];
// if ($checkCode!=$_SESSION['myCheckCode']) {
// 	header("Location:../index.php?errno=2");
// 	exit();
// }
$password=$_POST['password'];
$username=$_POST['cap_phone'];
if (empty($password)||empty($username)) {
	header("Location:../index.php?errno=2");
	exit();
}
$loginService= new loginService();
$res=$loginService->login($username,$password);
if ($res) {
	session_start();
	$_SESSION['group_id']=$res['group_id'];
	$_SESSION['works_type']=$res['works_type'];
	$_SESSION['works_state']=$res['works_state'];
	header("Location:../submit.php");
	exit();
}else{
	//非法
	header ( "Location:../index.php?errno=1" );
	exit ();
}
?>