<?php 
include 'sqlHelper.class.php';
class loginService{

	public function login($username,$password){
         $sql="select password,group_id from account where username='$username'";
         $sqlHelper= new sqlHelper();
         $res=$sqlHelper->execute_dql($sql);
         if ($row=$res->fetch_assoc()) {        
         	if (md5($password)!=$row['password']) {
         		return false;
         	}
         }
         session_start();
         $_SESSION['username']=$username;
         $group_id=$row['group_id'];
         $sql2="select works_type,works_state from osa_group where group_id='$group_id'";
         $res2=$sqlHelper->execute_dql($sql2);
         if ($arr=$res2->fetch_assoc()) {
            $row['works_type']=$arr['works_type'];
            $row['works_state']=$arr['works_state'];
            return $row;
         }
         $res->free;
         $res2->free;
         $sqlHelper->close_connect();

	}
}

 ?>