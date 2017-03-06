<?php
define("DSN","mysql:host=localhost;dbname=datebase");
define("DBUSER","root");
define("DBPASS","root");

try{
	$pdo = new PDO(DSN,DBUSER,DBPASS);
}catch(PDOException $e){
	die("连接失败：".$e->getMessage());
}