<?php
include("ayar.php");
session_start();
ob_start();
if(($_POST["username"]==$user) and ($_POST["password"]==$pass)){
$_SESSION["login"] = "true";
$_SESSION["user"] = $user;
$_SESSION["pass"] = $pass;
header("Location:admin.php");
}else{
echo "Kullancı adı veya şifrenizi yanlış girdiniz.<br>";
echo "Giriş sayfasına yönlendiriliyorsunuz.";
header("Refresh: 2; url=login.html");
}
ob_end_flush();
?>