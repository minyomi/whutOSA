<?php
include 'sqlHelper.class.php';
include 'sdk.class.php';

class submitService{

	public function submit($group_id,$works_info,$works_name,$works_file_tmp){
         if (is_uploaded_file($works_file_tmp)) {
         $oss_sdk_service = new ALIOSS();
	         //通过路径上传文件
	    
		$bucket = 'somnus-osa';
		$object = $works_name;	
		$file_path =$works_file_tmp;
		$file_sql_path="http://somnus-osa.oss-cn-hangzhou.aliyuncs.com/".$bucket."/".$object."/".$works_name;
		$oss_sdk_service->upload_file_by_file($bucket,$object,$file_path);
		//_format($response);
		$sql="update osa_group set works_info='$works_info',works_name='$works_name',works_path='$file_sql_path',works_state=1 where group_id=$group_id";
        $sqlHelper= new sqlHelper();
        $res=$sqlHelper->execute_dml_update($sql);
        return $res;
        $res->free;
        $sqlHelper->close_connect();
	 }
}
   public function state($group_id){

   	    $sql1="select works_state from osa_group where group_id='$group_id'";

   	     $sqlHelper= new sqlHelper();
   	     $res=$sqlHelper->execute_dql($sql1);
   	     while ($row=$res->fetch_row()) {
   	     	$state=$row[0];
   	     }
   	     $res->free;
   	     $sqlHelper->close_connect();
   	     return $state;
   }
}

?>