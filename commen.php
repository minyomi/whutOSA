<?php 
//写一些常用的方法
 function checkUserValidate(){
        	 session_start();
        	if (empty($_SESSION['username'])){
        		header ( "Location:index.php" );
        		exit ();
        	}    
    } 
    ?>