<?php
include 'worksService.php';
             
           if (!empty($_POST['username'])) {
     
           if ($_POST['username']=='whutosa'&&$_POST['password']=='5680206') {
           	 
           	 
           	 $url = "http://".$_SERVER['HTTP_HOST']."/back/worksInfo.php?flag=yes";  
		     echo "<script language='javascript'type='text/javascript'>";  
		     echo "window.location.href='$url'";  
		     echo "</script>";  
            }else{
            	$url = "http://".$_SERVER['HTTP_HOST']."/back/login.php";  
		     echo "<script language='javascript'type='text/javascript'>";  
		     echo "window.location.href='$url'";  
		     echo "</script>"; 
            }
            }
           	

        if ($_GET['flag']==check) {
           $worksService=new worksService();
           $worksService->updateState1($_GET['id']);
         
           header("Location:../back/worksInfo.php?flag=yes");  
           exit();
        }else if($_GET['flag']==del){
             $worksService=new worksService();
           $worksService->updateState2($_GET['id']);
            header("Location:../back/worksInfo.php?flag=yes");  
           exit();
        }

	
	
?>