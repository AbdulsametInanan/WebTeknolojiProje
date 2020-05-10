<?php
include("ayar.php");
session_start();
if(!isset($_SESSION["login"])){
echo "Bu sayfayı görüntülemeye yetkiniz bulunmamaktadır.";
}else{
echo "Admin sayfasına hoş geldiniz..<br>";
echo "<a href=logout.php>Çıkış Yap</a>";
}
?>