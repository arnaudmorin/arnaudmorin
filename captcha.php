<?php
@session_start();

// Antispam image dimension
$height = 20;
$width = 120;

// Generate code
$code_p1 = '';
$code_p2 = '';
for($i=0; $i<4; $i++) {
  $code_p1 .= substr('0123456789', mt_rand(0, 9), 1);
  $code_p2 .= substr('0123456789', mt_rand(0, 9), 1);
}

$code = $code_p1 . '+' .$code_p2;

// Generate image
$image = @imagecreate($width, $height);

// Colors
$background_color = @imagecolorallocate($image, 255, 255, 255);
$noise_color = @imagecolorallocate($image, 20, 40, 100);
$text_color = @imagecolorallocate($image, 20, 40, 100);

// Add noise to image
for($i=0; $i < ($width * $height) / 4; $i++) {
  @imageellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
}

// Add text to image
@imagettftext($image, $height * 0.8, 0, 7, 17, $text_color, './fonts/arial.ttf' , $code)
  or die('Cannot render text in image.');

// Give image
header('Content-Type: image/png');
@imagepng($image)
  or die('Cannot render image');

@imagedestroy($image);

// Store on server the code
$_SESSION['code'] = $code_p1 + $code_p2;

exit();


