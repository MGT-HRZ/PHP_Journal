<?php
session_start();
header('Content-type:image/jpeg');

$lines = 10;
$width = 150;
$height = 50;
$font_size = 20;

$text = md5(mt_rand(1111,9999));
$text = substr($text, 0 , 4);
$text = strtoupper($text);
$_SESSION['captcha']=$text;
//$text = $_SESSION['captcha'] = mt_rand(1111 , 9999);

 $image = imagecreate($width, $height);

 $r = mt_rand(200,255);
 $b = mt_rand(100,255);
 $g = mt_rand(200,255);


 imagecolorallocate($image, $r, $g, $b);
 $r = mt_rand(0,100);
 $b = mt_rand(0,200);
 $g = mt_rand(0,100);

 $color = imagecolorallocate ($image, $r ,$g ,$b);
 
 for ($i=1; $i<=$lines ; $i++) { 
     $x1 = mt_rand(0, 150);
     $y1 = mt_rand(0, 150);
     $x2 = mt_rand(0, 150);
     $y2 = mt_rand(0, 150);

 imageline($image, $x1, $y1, $x2, $y2, $color);
}
 imagettftext($image, $font_size, 0, 30, 35, $color, 'BRLNSB.TTF' ,$text);
 
imagejpeg($image);


?>