<?php 
include './model/sqlHelper.class.php';
$username=$_POST['cap_name'];
$sql="select group_id from account where username=$username";
$sqlHelper = new sqlHelper();
$res=$sqlHelper->execute_dql($sql);
if (empty($res)) {
	return false;
}else{
	return true;
}

 ?>