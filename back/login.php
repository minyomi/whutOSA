<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<link rel="stylesheet" href="css/style.css"  />
</head>
<body class="login">
<?php
  session_start();
?>
	<section>
		<h1><strong>OSA比赛后台</strong> </h1>
		<form method="post" action="worksProcess.php">
			<input type="text"  name="username" />
			<input type="password" name="password" />
			<button class="blue" type="submit">登录</button>
		</form>

	</section>
</body>
</html>