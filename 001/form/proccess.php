<meta content="text/html; charset=utf-8" http-equiv="content-type">
<?php
//echo $_GET["username"] . "<br />";
//echo $_GET["password"];
$userName = $_POST["username"] . "<br>";
$passWord = $_POST["password"];
echo $userName;
echo $passWord;
$result = ($userName == "admin" && $passWord == "123456") ? "Đăng nhập thành công" : "Đăng nhập thất bại" ;
echo $result;
?>