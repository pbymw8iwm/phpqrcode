<?php 
include 'phpqrcode.php'; 
$value = $_GET['url'];//二维码内容  
$errorCorrectionLevel = 'L';//容错级别 
$matrixPointSize = 10;//生成图片大小 
//生成二维码图片 
QRcode::png($value, 'qrcode.png', $errorCorrectionLevel, $matrixPointSize, 2);  
//输出图片 
Header("Content-type: image/png");
ImagePng($QR);
?>
