<?php 

$pdo = new PDO("mysql:host=localhost;dbname=test","root","root"); 
$name = $_POST['name'];
$password = $_POST['password'];
$rs = $pdo -> query("select * from snw where name='".$name."' and password='".$password."'"); 
$result = "登录失败";
while($row = $rs -> fetch()){ 
	$result = "登录成功";
}	

?>
<!DOCTYPE html>
<html>
<head>
	<title>renzheng</title>
</head>
<body>
	<h4>亲爱的<?php echo $name; ?></h4>
	<p><?php echo $result; ?></p>
</body>
</html>