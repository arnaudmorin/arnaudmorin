<?php
@session_start();

// Stream the correct image
header('Content-Type: image/gif');
readfile("img/".$_SESSION['anti'.$_GET['i']].".gif");

