<?php
include '../model/sqlHelper.class.php';
class pageInfo{
	    public $pageSize=10;
      	public $rowCount;    //从数据库获取
      	public $pageNow; //用户指定
      	public $pageCount;//计算得到
      	public $url="worksInfo.php";
      	public $navigate;
      	public $infoArr;
      	public $infoSum;
      	public $parInfo;
}
class worksService{
    public function updateState1($group_id){
        $sql="update osa_group set works_state=2 where group_id='$group_id'";
        $sqlHelper= new sqlHelper();
        $sqlHelper->execute_dql($sql);	
    }
    public function updateState2($group_id){
        $sql="update osa_group set works_state=3 where group_id='$group_id'";
        $sqlHelper= new sqlHelper();
        $sqlHelper->execute_dql($sql);	
    }
	public function worksList($pageNow2){
		    $pageInfo=new pageInfo();
		    $pageInfo->pageNow=$pageNow2;
			$sql1="select * from osa_group limit ".($pageInfo->pageNow-1)*$pageInfo->pageSize.",$pageInfo->pageSize";
			$sql2="select count(group_id) from osa_group";
			$sqlHelper= new sqlHelper();		
			$sqlHelper->execute_dql_page($sql1,$sql2,$pageInfo);
		 //把导航信息也封装
            for ($i=0; $i <count($pageInfo->infoArr) ; $i++) { 
            	$group_id=$pageInfo->infoArr[$i]['group_id'];
            	$sql3="select par_id from group_par where group_id='$group_id'";
            	$res=$sqlHelper->execute_dql($sql3);
            	while ($row=$res->fetch_assoc()){
		    	    //$parId[]=$row['par_id'];
		    	    $res->free;
		    	    $sql4="select * from participant where par_id=".$row['par_id'];
		    	    $res2=$sqlHelper->execute_dql($sql4);
            	     while ($row2=$res2->fetch_assoc()){
            	     	$res2->free;
            	     	for ($j=0; $j < count($res2); $j++) { 
            	     		$par[$i][]=$row2;
            	     	}
            	     	//print_r($row2); 
		          }
		         }

		     //     for ($j=3*$i; $j<(3*$i+3) ; $j++) { 
		         	
       //      	$sql4="select * from participant where par_id=".$parId[$j]; 
       //      	//echo $sql4;
                
            	// $res2=$sqlHelper->execute_dql($sql4);
            	// while ($row2=$res2->fetch_assoc()){
		    	      // $par[]=$row2;
		     //     }
               
		     // }
		          $pageInfo->parInfo=$par;
		          
		         
		          $row->free;
		          $row2->free;
		          $par->free;
            }
		  $pageInfo->pageCount=ceil($pageInfo->infoSum/$pageInfo->pageSize);
		  $pageInfo->rowCount=$pageInfo->infoSum;
		   //echo "<pre>";print_r($pageInfo);echo "</pre>";
		  $navigate="";
		  if ($pageInfo->pageNow > 1) {
		  	$prePage = $pageInfo->pageNow - 1;
		  	$navigate= "<a href='$pageInfo->url?pageNow=$prePage&flag=yes'>上一页</a>&nbsp";
		  }
		 
		  if ($pageInfo->pageNow < $pageInfo->pageCount) {
		   $nextPage = $pageInfo->pageNow + 1;
		  	$navigate.= "<a href='$pageInfo->url?pageNow=$nextPage&flag=yes'>下一页</a>&nbsp";
		  }
	
		  	// 显示当前页和共有多少页
		  	$navigate.= "当前页{$pageInfo->pageNow}/共{$pageInfo->pageCount}页";
		  
		   $pageInfo->navigate=$navigate;
		   return $pageInfo;
	}
}

?>