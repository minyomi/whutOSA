<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>比赛报名</title>
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
								<h3 align="center">第1届<span style="color: #5BC0DE;">&nbsp;OSA&nbsp;</span>成员选拔赛报名</h3>
							</div>
						</div>

						<div>
						<form action="./control/signUpProcess.php" method="post" id="signupForm">
							<label>参赛组别：</label>
						<select class="form-control" name="works_type"style="width: 400px;margin-top: 5px;">
						  <option value="UI组">UI组</option>
						  <option value="web组">web组</option>
						  <option value="应用组">应用组</option>
						  <option value="硬件组">硬件组</option>		  
						</select>
						<div class="form-group" style="width: 400px;margin-top: 5px;">
                        <label class="control-label" >队长姓名</label>
                        <input type="text" class="form-control {required:true}" name="cap_name" >
                        <input type="hidden"  name="identity[]" value="captain" >
                        </div>
                        
                        </select>
						<div class="form-group " style="width: 400px;margin-top: 5px;">
                        <label class="control-label" >队长班级</label>
                        <input type="text" class="form-control " name="cap_class" >
                        
                        </div>
                        
                        <div class="form-group" style="width: 400px;margin-top: 5px;">
                        <label class="control-label" >队长手机号（手机号将作为作品提交时的登录账号）</label>
                        <input maxlength="11" type="text" class="form-control {required:true,number:ture,minlength:11}" name="cap_phone">
                       
                        </div>
                        
                        <div class="form-group" style="width: 400px;margin-top: 5px;">
                        <label class="control-label" >设置密码</label>
                        <input type="password" name="password" class="form-control {required:true,minlength:6}" id="password">
                        
                        </div>
                        
                        <div class="form-group" style="width: 400px;margin-top: 5px;">
                        <label class="control-label"  >确认密码</label>
                        <input type="password" class="form-control {required:true,minlength:5,equalTo:'#password'}"  name="confirm_password"  >
                        
                        <input type=button onclick="addInput()" value="添加队友信息" id="add">
                        </div>
                        <p style="color:red;">
                        <?php 
                                  if (!empty($_GET['ok'])) {
                                  if ($_GET['ok']==1) {
                                    echo "注册成功！";
                                  }else if ($_GET['ok']==2) {
                                     echo "<p color='red'>报名时间已过！</p>";
                                  }
                                  else{
                                    echo "注册失败，请重新注册！";
                                  }
                                  }
                        ?></p>
                        <button type="submit" class="btn btn-info submit" style="margin-top: 5px;margin-left: 272px;" >提交</button>
                        </form>

			</div>
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
   $(function () { $("[data-toggle='tooltip']").tooltip(); });
   var i=2;
   function addInput(){
   	     if(i<=3){
         var obj = document.getElementById("add");
         obj.insertAdjacentHTML("beforeBegin","<br><label class='control-label'>队员"+i+"姓名:</label><input name='member"+i+"_name' class='form-control'><label class='control-label'>队员"+i+"班级:</label><input name='member"+i+"_class' class='form-control'><label class='control-label'>队员"+i+"联系方式:</label><input name='member"+i+++"_phone' class='form-control'><input name='identity[]' type='hidden'  value='member'>");
         }
     }


 $().ready(function() {
 $("#signupForm").validate({
        rules: {
   cap_name:  {
   	required:true
   },

   cap_phone: {
    required: true,
    number: true,
    minlength:11  
   },

   cap_class: {
    required: true
   },
   password: {
    required: true,
    minlength: 6,
   },
   confirm_password: {
    required: true,
    minlength: 6,
    equalTo: "#password"
   }
 },
   messages: {
   cap_name: {
   	required:"请输入姓名"
   },
   cap_class: {
   	required:"请输入班级"
   },
   cap_phone: {
    required: "请输入手机长号",
    number: "请输入正确的手机号",
    minlength:"请输11位手机长号",  
   },
   password: {
    required: "请输入密码",
    minlength: jQuery.format("密码不能小于{0}个字 符")
   },
   confirm_password: {
    required: "请输入确认密码",
    minlength: "确认密码不能小于5个字符",
    equalTo: "两次输入密码不一致"
   }
  }

    });
});
</script>

</body>
</html>