<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>开源比赛</title>
<!-- css -->
<link href="css/bootstrap.min.css" rel="stylesheet" />
<link href="css/fancybox/jquery.fancybox.css" rel="stylesheet">
<link href="css/jcarousel.css" rel="stylesheet" />
<link href="css/flexslider.css" rel="stylesheet" />
<link href="css/style.css" rel="stylesheet" />
</head>
<body>
    <?php
/** 开启gzip压缩 */
ob_start('ob_gzhandler');

?>
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
			<div class="col-lg-8">
				
						<div class="post-image">
							<div class="post-heading">	
								<h3 align="center">第1届<span style="color: #5BC0DE;">&nbspOSA&nbsp;</span>成员选拔赛</h3>
							</div>
						
						</div>
						
						<p style="font-size:20px"><a href="signUp.php"><button type="button" class="btn btn-warning btn-lg" >参加比赛报名</button></a></p>
						<h4>一、大赛目的</h4>
						<p>
							本届大赛旨在培养和激励我校大学生的程序设计特别是算法分析与设计的能力、
							团队合作精神以及在软件开发过程中的创新意识，促进学生之间的交流与合作，
							综合运用高级语言程序设计、数据结构、算法分析与设计等课程的知识，同时借此次比赛来选拔开源协会新一届的成员。 
						</p>
						<h4>二、组织机构</h4>
						<p>
							主办单位：武汉理工大学计算机学院开源协会
						</p>
						<h4>三、参赛对象</h4>
						<p>
							 武汉理工大学计算机与科学技术学院2013级全体学生
						</p>
						<h4>四、报名要求</h4>
						<p>
							<ol>
								<li>比赛以参赛队为单位，每队一到三人。</li>
								<li>报名时，详细填写队伍信息，队员信息。</li>
								<li>报名时间：</li>
							</ol>
						</p>
						<h4>四、报名方式</h4>
						<p>
							<ol>
								<li>按要求二到三人组队报名。</li>
								<li>报名以网上报名的方式，登陆比赛主页（xb.whutosa.com）进行报名。</li>
								<li>各参赛队应该如实填写报名表，参赛队所有核心成员必须认真阅读参赛声明并签名确认，参赛队可以自行取队名（但名称必须健康）。</li>
							</ol>
						</p>
						<h4>五、比赛时间</h4>
						<p>
							 比赛时间：11月25日-12月30日（截止日期可能会更改，注意群通知）
						</p>
						<h4>六、大赛规则</h4>
						<p>
							<ol>
								<li>比赛题目共4类，参赛选手可任选其中一道进行开发。
									<ol>
										<li >UI组
                                            <ol style="list-style:upper-roman;">
                                                ①网页设计
                                            <li>题目：开源协会主页。</li>
                                            <li>要求：功能性需求参照现有主页，色调参考开源LOGO配色（蓝白），有鲜明的主题，至少设计三个页面</li>
                                            <li>参赛人数：一人</li>
                                            <li>上交：界面设计（PSD文件或html文件）+简要说明</li></ol>
                                            <ol style="list-style:upper-roman;">
                                               ②APP界面设计
                                            <li>题目：主题自定</li>
                                            <li>参赛人数：一人</li>                                       
                                            <li>上交：界面设计（PSD文件或html文件）+简要说明</li></ol>
                                            
                                        </li>
										<li>web组
                                            <ol style="list-style:upper-roman;">
                                               
                                         <li>题目：开发一套简易的留言板系统</li>
                                            <li>要求：至少包括用户注册、用户留言（不需要回复）两个功能，界面简洁大方，根据自身情况可参考添加以下功能：1.留言分页 2.留言回复 3.管理员后台管理等功能，额外功能在评选阶段有加分</li>
                                            <li>参赛人数：1-3人组队参加</li>
                                            <li>上交作品：完整源代码+开发文档+参赛心得</li></ol>
                                        </li>
								
                                <li>应用组
                                            <ol style="list-style:upper-roman;">
                                               ①PC端
                                         <li>题目：网络五子棋</li>
                                            <li>要求：实现基本的局域网，人人对战五子棋</li>
                                            <li>参赛人数：1-3人组队参加</li>
                                            <li>上交作品：apk／app可执行程序+完整源代码+开发文档</li></ol>
                                        <ol style="list-style:upper-roman;">
                                              ②APP端
                                         <li>题目：笔记应用</li>
                                            <li>要求：在实现基本的笔记功能基础上功能上有所创新，用户体验良好，UI设计美观</li>
                                            <li>参赛人数：1-3人组队参加</li>
                                            <li>上交作品：apk／app可执行程序+完整源代码+开发文档</li></ol>
                                        </li>
                                        <li>硬件组
                                            <ol style="list-style:upper-roman;">
                                               
                                         <li>题目：基于Arduino的定位传送</li>
                                            <li>要求：通过电脑（手机端更好）控制，实现物品的定位传送。</li>
                                            <li>参赛人数：组队（一队最多三人)或者个人</li>
                                                <li>参考器材：Arduino最小系统(开源提供)、
                        驱动电机板（开源提供）、
                          马达电机串口 （开源提供）、
  WiFi模块（或者其他可实现无线通信的模块）、
  超声波测距模块（或者其他可以实现测距的模块）、
  传送装置（自己设计制作）。</li>    
                                            <li>注：由于硬件特殊性，如果在硬件购买方面存在困难的同学可向开源申请相应资金或者设备</li></ol>
                                        </li>
                                        
                                        	</ol>
								</li>
							
								<li>参赛队员有权针对题目描述中的不明确或错误的部分提问。
									如果评委确认题目中确实存在不明确或错误的部分，将会通告所有参赛队伍进行声明或更正。</li>
								<li>参赛队员必须在规定时间内上交作品，超过时间，以无效论处。</li>
								<li>参赛作品必须确保作品软件和相关文档无任何知识产权纠纷，若存在任何知
                                                                              识产权纠纷则取消参赛资格，并由作者个人承担相应责任。作品须为自己创作，如发现作品属于抄袭、克隆行为，
                                                                           一经发现，组委会将取消参赛者的评奖资格。</li>
								<li>参赛作品最终所有权归参赛队伍所有。</li>
								<li>作品提交:
									<li>比赛题目共4类，参赛选手可任选其中一道进行开发。
									<ol style="list-style:upper-roman;">
										<li >作品程序（可执行程序文件.exe/apk/html/php/jsp/psd等）</li>
										<li>作品程序源代码文件</li>
										<li>程序测试文件</li>
										<li>开发文档</li>
										将以上文件通过比赛官网上传。
									</ol>
								</li>
								</li>
								<li>比赛最终解释权归武汉理工大学开源协会所有。</li>
							</ol>
						</p>
						<h4>七、比赛评判标准</h4>
						<p>
							 
									<ol >
										<li >运行结果：能完美运行程序，且符合赛题要求</li>
										<li>设计科学：软件开发符合软件工程思想，算法设计合理</li>
										<li>用户交互：作品要界面美观，运行稳定，使用方便，可操作性强</li>
									</ol>
								
						</p>
						<h4>八、大赛流程</h4>
						<p>
							 
									<ol>
										<li >宣传阶段（10月份）:
											<ol style="list-style:upper-roman;">
										<li >在年级大会上宣传本此选拔赛。</li>
										<li>通过比赛官方网站宣传比赛。</li>
										<li>与学生会合作，通过学生会的渠道宣传。</li>																			
									</ol>
										</li>
										<li>报名阶段（12月15日截止）:<br/>所有参赛选手在规定时间内通过比赛官方网站报名。</li>
										<li>作品制作阶段（11月26日0点~12月29日0点）:
											<br/>在此期间，参赛队完成报名时提交的自定作品，如果不能完成，应有
                                                                                             作品初体模型，并能实现一定功能。</li>
                                       <li>比赛作品提交:
                                       	<br/>在12月29日之前，各参赛队须将作品通过比赛官方网站提交，如不按时提交默认为弃权。</li>
                                       	<li>面试环节（12月30日）:
                                       	<br/> 参赛选手对自己参赛作品进行答辩，由开源协会对参赛作品进行评估。  </li>
                                       	<li>评选（元旦之后） :
                                       	<br/>对参赛作品进行最终筛选，选出符合要求的队伍，加入开源。 </li>
									</ol>
								
						</p>
						
						<a href="#join"><span style="margin-left: 400px;">返回顶部</span></a>
							
				</article>
				
				<!--
                	作者：李明
                	时间：2014-09-22
                	描述：网页右边
                -->
			</div>
			<div class="col-lg-4">
				<aside class="right-sidebar">
				<div class="widget" id="join">
					<h4>作品提交登录</h4>
					<form action="./control/loginProcess.php" method="post" class="form-horizontal">
						<input class="form-control form-group" type="text" placeholder="手机号" name="cap_phone" >
						<input class="form-control form-group" type="password" placeholder="密码" style="margin-top: 5px;" name="password">
				        <div class="form-group">
						<!--<input type="text" name="checkCode"  style="margin-top: 5px;width:100px" class="form-control col-sm-6" placeholder="验证码">
						 	
						<img  class="col-sm-6" title="点击更换" src="captcha.php" align="absbottom"  style="margin-top: 5px;" onclick="this.src='captcha.php?'+Math.random();"></img><br/>-->
                          </div>
                          <?php
				        if (! empty ( $_GET ['errno'] )) {
			      	// 接受错误的编号
					    	$errno = $_GET ['errno'];
						if ($errno == 1) {
							echo "<br/><span style='color:#31B0D5'>账号密码出错</span>";
						}
						if ($errno == 2){
		                  echo "<br/><span style='color:#31B0D5'>请输入账号密码</span>";
					     	}
						}
				        ?>
					<button type="submit" class="btn btn-info" style="margin-top: 5px;margin-left: 272px;">登录</button>
					</form>
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
<script>
   $(function () { $("[data-toggle='tooltip']").tooltip(); });
</script>

</body>
</html>