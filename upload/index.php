<?php
/*
  curl -F file=@/tmp/caprouter.pcap http://www.arnaudmorin.fr/upload/
*/

//$allowedExtensions = array("jpg","png","pcap","cap","gz","wav","id_rsa");

$uploaddir = '/home/arnaud/arnaudmorin.fr/upload/';
$uploadfile = $uploaddir . basename($_FILES['file']['name']);

// Check file extension
$ext = end(explode(".",strtolower(basename($_FILES['file']['name']))));
//if(!in_array($ext,$allowedExtensions)){
if ( $ext == 'php' ) {
    die();
}
if ($_SERVER['REQUEST_METHOD'] == 'GET'){
    echo "<!-- \ncurl -F file=@/tmp/caprouter.pcap http://www.arnaudmorin.fr/upload/\n -->";
    die();
}

//print_r($_FILES);
//echo $uploadfile;

if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
    echo "File: http://www.arnaudmorin.fr/upload/{$_FILES['file']['name']}\n";
} else {
    //echo "Upload failed\n";
    die();
}


?> 
