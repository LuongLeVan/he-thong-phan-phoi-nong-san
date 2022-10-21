<?php
if(isset($_REQUEST["file"])){
    // Get parameters
    $file = urldecode($_REQUEST["file"]); // Decode URL-encoded string
    //echo $file;
    $filepath = "C:/wamp/www/he-thong-phan-phoi-nong-san/Model/nhacungcapnongsan/qr_assets/" . $file;
    echo $filepath;
    if(file_exists($filepath)){
        echo 'hhh';
    }else{
        echo "Khóc thét";
    }
    // Process download
    if(file_exists($filepath)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="'.basename($filepath).'"');
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize($filepath));
        flush(); // Flush system output buffer
        readfile($filepath);
        exit;
    }
}
?>  