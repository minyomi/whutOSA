<?php 
include '../model/sqlHelper.class.php';
class signUpService{

public function signUp($works_type,$name,$class,$phone,$password,$identity){
	$sqlHelper= new sqlHelper();
	$osa_group_sql="insert into osa_group(works_type) values('$works_type')";
    $sqlHelper->execute_dml($osa_group_sql);
    $group_id=$sqlHelper->conn->insert_id;
    $count=count($name);
  for ($i=0; $i <$count ; $i++) {
  	  	$now_phone=$phone[$i];
  	    $now_class=$class[$i];
  	    $now_identity=$identity[$i];
  	    $now_name=$name[$i];
  	if ($now_identity=='captain') {		
  		$account_sql="insert into account(group_id,username,password) values('$group_id','$now_phone','$password')";
  		$sqlHelper->execute_dml($account_sql);
  	}
  	$par_sql="insert into participant(name,class,phone,type) values('$now_name','$now_class','$now_phone','$now_identity')";
  	$sqlHelper->execute_dml($par_sql);
  	$par_id=$sqlHelper->conn->insert_id;
  	$group_par_sql="insert into group_par(group_id,par_id) values ('$group_id','$par_id')";
  	$sqlHelper->execute_dml($group_par_sql);
  }
   
   $sqlHelper->close_connect();
   return ture;
   }
 }
 ?>