<?php
session_start();
ob_start();
session_destroy();
echo "Çıkış işlemini başarıyla gerçekleştirdiniz. Birazdan "Ana Sayfaya" yönlendiriliyorsunuz...";
header("Refresh: 2; url=login.html");
ob_end_flush();
?>