<?php

header('Content-Type: image/png');

$img = imagecreate(300, 300);
$col = imagecolorallocate($img,245, 245, 220);
imagefilledrectangle($img, $col);
$maroon = imagecolorallocate($img, 139, 0, 0);
$font_file = 'stocky/ArmyStamp.ttf';
imagefttext($img, 40, 0, 40, 160, $maroon, $font_file, 'Out of Stock');

imagepng($img);
imagedestroy($img);
?>
