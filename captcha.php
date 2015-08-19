<?php
session_start();
include  'ValidateCode.class.php'; 
$_vc = new ValidateCode();	
$_vc->doimg();		
$_SESSION['myCheckCode'] = $_vc->getCode();
?>