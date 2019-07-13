<?php

$width = 640;
$height = 480;

$img = imagecreatetruecolor($width, $height);

imagefill($img, 0, 0, mt_rand(0, 16777215));

header('Content-Type: image/jpeg');

imagejpeg($img);
imagedestroy($img);
