<?php
session_start();
require "connect.inc.php";
if(isset($_POST['sub'])){
	$stmt = $pdo->prepare("SELECT id ,username FROM user WHERE username=? and userpwd=?");
	$stmt->execute(array($_POST["username"],$_POST["userpwd"]));
	print_r($stmt);

	if($stmt->rowCount()>0){
		$_SESSION=$stmt->fetch(PDO::FETCH_ASSOC);
		$_SESSION["isLogin"]=1;
		// var_dump($_SESSTION);
		header("Location:index.php");
	}else{
		echo '<font color="red">用户名或密码错误！</font>';
	}
}
?>
<html>
	<head><title>邮件系统登录</title></head>
	<body>
		<p>欢迎光临邮件系统.Session ID:<?php echo session_id();?></p>
		<form action="login.php" method="post">
			用户名:<input type="text" name="username"><br>
			密&nbsp;&nbsp;码:<input type="password" name="userpwd"><br>
			<input type="submit" name="sub" value="登录">
		</form>
	</body>
</html>