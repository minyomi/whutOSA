<?php 
    class sqlHelper{  	   
    public $conn;
	public $dbname="app_somnus";
	public $username = "wn50nm4l02";
	public $password = "24kjwhmlx2y2mzki54z0xji01zh5kyjmwzx4jw0w";
	public $host = "w.rdc.sae.sina.com.cn";
	public $port="3307";
	public function __construct() {

		$this->conn = new MySQLi( $this->host.':'.$this->port, $this->username, $this->password, $this->dbname ) or die ( $this->conn->error );
	}
	// 执行dql语句
	// public $dbname="whutosa";
	// public $username = "root";
	// public $password = "1234";
	// public $host = "localhost";
	// public function __construct() {

	// 	$this->conn = new MySQLi( $this->host, $this->username, $this->password, $this->dbname ) or die ( $this->conn->error );
	// }
	 function execute_dql($sql) {

		$res = $this->conn->query ( $sql ) or die ( $this->conn->error );
		return $res;
	}
	//执行dql语句，但是返回的是一个数组
	
	//考虑分页情况的查询
	//$sql1="select * from where 表名 limit ...."
	//$sql2="select count(id) from 表名”
	 function execute_dql_page($sql1,$sql2,$pageInfo){
		
		  $res=$this->conn->query($sql1) or die($this->conn->error);
		  $pageInfo->infoArr=array();
		  while ($row=$res->fetch_assoc()){
		  	$pageInfo->infoArr[]=$row;
		  }
		  $res->free();
		  //把$arr赋给
		  $res2=$this->conn->query($sql2);
		  if ($row=$res2->fetch_row()){
		  	$pageInfo->infoSum=$row[0];//总的作品数
		  }

	  $res2->free();
		  
		 
	}
	// 执行dml语句
	 function execute_dml($sql) {
		$this->conn->query ( $sql ) or die($this->conn->error);

	}
	 function execute_dml_update($sql) {
		$res=$this->conn->query ( $sql ) or die($this->conn->error);
        if($res){
        	return 1;
        }else{
        	return 0;
        }
	}
	
	// 关闭连接的方法
     function close_connect() {
		if (! empty ( $this->conn )) {
			$this->conn->close ();
		}
	}
}

 ?>