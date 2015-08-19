<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>OSA后台</title>
	<link rel="stylesheet" href="css/style.css" media="all" />
</head>
<body>
<?php
                                                       
                           if (empty($_GET['flag'])) {

						     	$url = "http://".$_SERVER['HTTP_HOST']."/back/login.php";  
							     echo "<script language='javascript'type='text/javascript'>";  
							     echo "window.location.href='$url'";  
							     echo "</script>"; 
						     	 exit();
						     }
?>
<div class="testing">
<header class="main">
	<h1><strong>OSA比赛后台</strong></h1>
</header>
<section class="user">
	
	<div class="buttons">
		<button class="ico-font">&#9206;</button>
		<span class="button dropdown">
			<a href="#">未审核<span class="pip"></span></a>
		</span> 
		 <span class="button blue"><a href="login.html">退出</a></span>
	</div>
</section>
</div>
<nav>
	<ul>
		<li class="section"><a href="dashboard.html" ><span class="icon">&#128711;</span>作品信息</a></li>
		<li>
			<a href="#"><span class="icon">&#128196;</span> 其他信息</a>
		</li>
		
	</ul>
</nav>

	
<section class="content">
	<section class="widget">
		<header>
		</header>
		<div class="content">
			<table id="myTable" border="0" width="100">
				<thead>
					<tr>
						<th class="avatar">作品组</th>
						<th>作品编号</th>
						<th>作品名</th>
						<th>参赛人员</th>
						<th>作品信息</th>
						<th>作品状态</th>
						<th>操作</th>
					</tr>
				</thead>
					<tbody>
						
						<?php
						     
					        include 'worksService.php';
							$worksService=new  worksService();
							if (!empty($_GET['pageNow'])) {
								$pageInfo=$worksService->worksList($_GET ['pageNow']);
                            }else {
                            	$pageInfo=$worksService->worksList(1);
                            }
							
							
                           
							
            
						for($i=0;$i<count($pageInfo->infoArr);$i++){
							$row=$pageInfo->infoArr[$i];
						    $parInfo=$pageInfo->parInfo[$i];
						   // print_r($row);exit();
						    	
						    

							echo "<tr><td>{$row['works_type']}</td><td>{$row['group_id']}</td><td>{$row['works_name']}</td>" ;
							 echo "<td>";
							for ($j=0; $j <count($parInfo) ; $j++) { 
							 	echo $parInfo[$j]['name']."-";
							 	echo $parInfo[$j]['class']."-";
							 	echo $parInfo[$j]['phone']."-";
							 	echo $parInfo[$j]['type']."<br/>";
							 }
							 echo "</td>";
							 echo "<td>{$row['works_info']}</td><td>{$row['works_state']}</td>".
							"<td><a onclick='return confirmDele({$row['group_id']})' href='worksProcess.php?flag=check&id={$row['group_id']}'><button class='button blue'>审核通过</button></a><br/><a href='worksProcess.php?flag=del&id={$row['group_id']}'><button class='red'>未通过&nbsp;&nbsp;&nbsp;</button></a></td></tr>";
						 }
							
					?>
						
						
					</tbody>
				</table>
				<p align="center" style="font-size:20px">
				<?php
                    echo $pageInfo->navigate;
				?>
				</p>
		</div>
	</section>
</section>











</body>
</html>