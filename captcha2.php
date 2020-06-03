<?php
@session_start();

# Generate a random number between 1 and 6
$i = rand(1, 6);

// Store on server the code
$_SESSION['code'] = $i;

// Stream the correct image
header('Content-Type: image/gif');
readfile("img/$i.gif");

