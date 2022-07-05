<?php

    session_start();
    header('Content-type:image/jpeg');

    $lines = 10;
    $width = 150;
    $height = 50;
    $font_size = 20;

    //ulang 4x
    $text1 = md5(mt_rand(1111,9999));
    $text1 = substr($text1, 0 , 1);
    $text1 = strtoupper($text1);

    $text2 = md5(mt_rand(1111,9999));
    $text2 = substr($text2, 0 , 1);
    $text2 = strtoupper($text2);

    $text3 = md5(mt_rand(1111,9999));
    $text3 = substr($text3, 0 , 1);
    $text3 = strtoupper($text3);

    $text4 = md5(mt_rand(1111,9999));
    $text4 = substr($text4, 0 , 1);
    $text4 = strtoupper($text4);
    //

    $image = imagecreate($width, $height);
     
    $r = mt_rand(200,255);
    $b = mt_rand(100,255);
    $g = mt_rand(200,255);

    imagecolorallocate($image, $r, $g, $b);

    //ulang 4x
    $r = mt_rand(1,100);
    $b = mt_rand(0,200);
    $g = mt_rand(0,100);

    $color = imagecolorallocate ($image, $r ,$g ,$b);

    $r2 = mt_rand(1,100);
    $b2 = mt_rand(0,200);
    $g2 = mt_rand(0,100);

    $color2 = imagecolorallocate ($image, $r2 ,$g2 ,$b2);

    $r3 = mt_rand(1,100);
    $b3 = mt_rand(0,200);
    $g3 = mt_rand(0,100);

    $color3 = imagecolorallocate ($image, $r3 ,$g3 ,$b3);

    $r4 = mt_rand(1,100);
    $b4 = mt_rand(0,200);
    $g4 = mt_rand(0,100);

    $color4 = imagecolorallocate ($image, $r4 ,$g4 ,$b4);

    //
    for ($i = 1; $i <= $lines ; $i++) { 
        $x1 = mt_rand(0, 150);
        $y1 = mt_rand(0, 150);
        $x2 = mt_rand(0, 150);
        $y2 = mt_rand(0, 150);

        imageline($image, $x1, $y1, $x2, $y2, $color);
    }

    //ulang
    imagettftext($image, $font_size, 0, 30, 35, $color, 'BRLNSB.TTF' , $text1);
    imagettftext($image, $font_size, 0.5, 55, 35, $color2, 'BRLNSB.TTF' , $text2);
    imagettftext($image, $font_size, 20, 75, 35, $color3, 'BRLNSB.TTF' , $text3);
    imagettftext($image, $font_size, 0, 95, 35, $color4, 'BRLNSB.TTF' , $text4);
    // 
    imagejpeg($image);

?>