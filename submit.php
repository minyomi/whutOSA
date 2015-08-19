<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>作品提交</title>
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
</head>
<body>

<div id="wrapper">
	<section id="inner-headline" style="background-color: #5BC0DE;padding: 70px;">
	<div class="container" >
		<div class="row">
			<div class="col-lg-12">
				<p align="center"><img src="img/whutosa.png" style="height: 140px;padding-top: 10px;" ></p>						    
			</div>		
		</div>
	</div>
	</section>
	<section id="content">
	<div class="container">
		<div class="row">
			<div class="col-lg-8" >
				
						<div class="post-image">
							<div class="post-heading">	
								<h3 align="center">作品提交</h3>
							</div>
						
						</div>
						<div>
						<label>作品编号：<span>
						<?php
    include 'commen.php';
    include './model/submitService.php';
    session_start();
   
    checkUserValidate();

?>
						<?php 
                         
                         echo $_SESSION['works_type'];
                         echo $_SESSION['group_id']."号";
                         
						?></label>
						<?php
						 $submitService=new submitService();
                         $_SESSION['works_state']=$submitService->state($_SESSION['group_id']);
                         if ($_SESSION['works_state']==1) {
                             echo "<br/><label>文件状态：</label><span style='color:red;'>上传成功，审核中...</span>";
                         }else if ($_SESSION['works_state']==2) {
                         	  echo "<br/><label>文件状态：<span style='color:red;'>上传成功，审核通过！<span></label>";
                         }else if ($_SESSION['works_state']==3) {
                         	  echo "<br/><label>文件状态：<span style='color:red;'>文件审核失败，请重新上传！<span></label>";
                         }else{
                              echo "<br/><label>文件状态：<span style='color:red;'>未上传<span></label>";
                         }
						?>
						<br/>
						<form enctype="multipart/form-data" method="post" action="./control/submitProcess.php" id="submitForm">
						<label class="control-label" >作品概要说明</label>
						<textarea class="form-control required" rows="5" name="works_info"></textarea>      
                        <div class="form-group">
					    <label >作品上传</label>
					    <input type="file" name="works_file" class="required" >
					    <p style="color:red;"class="help-block">文件保存格式为“XX组XX号作品名.zip"格式(例如：web组1号图书管理网站.zip,或者rar，小于20M)。若不是则无法上传。<br/>
					    文件内容包括：1.作品源码 2.可执行文件 3.开发文档 </p>
					  </div>
					   <p style='color:#31B0D5'>
					   <?php
                            if (!empty($_GET['ok'])) {
                            	echo "文件上传成功";
                            }
                            if (!empty($_GET['errno'])) {
                            	if ($_GET['errno']==2) {
                            		echo "文件格式错误，请按要求上传！";
                            	}else{
                            		echo "文件过大或文件为空！亲！";
                            	}
                            }
					   ?></p>                                                                                           
                        <button type="submit" class="btn btn-info submit" style="margin-top: 5px;margin-left: 272px;">提交</button>
			</div></form>
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget" id="join">
					
					
				</div>
				
				<div class="widget">
					<h4 class="widgetheading">其他信息</h4>
					<ul class="recent">
						<li>						
						<h5>友情链接</h5>
						<p>
							 <a href="http://iwhut.aliapp.com ">开源协会官网</a>
						</p>
						</li>
						<li>
						
						<h6>大赛组委会联系方式</h6>
						<p>
							  tel:18202715321
						</p>
						</li>	
						<li>
						
						<h6>网站制作</h6>
						<p>
							   Powerby开源Web组<br/> 
							  <a href="http://minyomi.sinaapp.com">开发者博客</a>
						</p>
						</li>
					</ul>
				</div>
				
				</aside>
			</div>
		</div>
	</div>
	
	</section>
	<footer>	
	</footer>
</div>
<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.validate.js"></script>
<script src="js/jquery.metadata.js"></script>
<script>
$().ready(function() {

 $("#submitForm").validate({

        rules: {


   works_file: {

    required: true,

   },

   works_info: {

    required: true,

   },


  },

        messages: {


   works_info: {

    required: "请输入作品概括！",

   },

   works_file: {

    required: "请上传文件！",

   },

  }

    });

});
</script>

</body>
</html>