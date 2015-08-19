<?php 
header("content-type:text/html;charset=utf-8");
  header("Location:../signUp.php?ok=2");  
        exit();
$works_type=$_POST['works_type'];
$name=array($_POST['cap_name']);
$class=array($_POST['cap_class']);
$phone=array($_POST['cap_phone']);
if (!empty($_POST['member2_name'])) {
    $name[1]=$_POST['member2_name'];
    $class[1]=$_POST['member2_class'];
    $phone[1]=$_POST['member2_phone'];
    }if (!empty($_POST['member3_name'])) {
    $name[2]=$_POST['member3_name'];
    $class[2]=$_POST['member3_class'];
    $phone[2]=$_POST['member3_phone'];
    }
$identity=$_POST['identity'];
$password=md5($_POST['password']);

include '../model/signUpService.php';
$signupService= new signUpService();
$res=$signupService->signup($works_type,$name,$class,$phone,$password,$identity);
if ($res) {  
        header("Location:../signUp.php?ok=1");  
        exit();
     }else{
        header("Loaction:../err.php");
        exit();
     }


?>