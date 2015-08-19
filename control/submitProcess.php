<?php 
header("content-type:text/html;charset=utf-8");
include '../model/submitService.php';

 $works_info=$_POST['works_info'];
 $works_file_size=$_FILES['works_file']['size'];
 $works_file_type=$_FILES['works_file']['type'];
 $works_file_tmp=$_FILES['works_file']['tmp_name'];
 $works_file_name=$_FILES['works_file']['name'];
 session_start();
 $group_id=$_SESSION['group_id'];

    if ($works_file_type!='application/octet-stream'&&$works_file_type!="application/zip"&&$works_file_type!="application/x-zip-compressed") {
         $url = "http://".$_SERVER['HTTP_HOST']."/submit.php?errno=2";  
     echo "<script language='javascript'type='text/javascript'>";  
     echo "window.location.href='$url'";  
     echo "</script>";     
        exit();
    }
    
  if ($works_file_size>20*1042*1024||$works_file_size==0) {

     $url = "http://".$_SERVER['HTTP_HOST']."/submit.php?errno=3";  
     echo "<script language='javascript'type='text/javascript'>";  
     echo "window.location.href='$url'";  
     echo "</script>";  
          exit();
     } 
  $submitService= new submitService();
  $res=$submitService->submit($group_id,$works_info,$works_file_name,$works_file_tmp);
  if($res==1){
    $url = "http://".$_SERVER['HTTP_HOST']."/submit.php?ok=1";  
    echo "<script language='javascript'type='text/javascript'>";  
    echo "window.location.href='$url'";  
    echo "</script>";  

      exit();
  }
 ?>
