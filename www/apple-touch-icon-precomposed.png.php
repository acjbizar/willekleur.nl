<?php

$width = 512;
$height = 512;

$img = imagecreatetruecolor($width, $height);

imagefill($img, 0, 0, mt_rand(0, 16777215));

header('Content-Type: image/png');

imagepng($img);
imagedestroy($img);
