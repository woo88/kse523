<?php
// requires php5
define('UPLOAD_DIR', '/home/woo/dev/kse523/web/html/data/images/');
$file = UPLOAD_DIR . uniqid() . '.png';

$data = substr($_POST['imageData'], strpos($_POST['imageData'], ",") + 1);
$decodedData = base64_decode($data);
$fp = fopen($file, 'wb');
fwrite($fp, $decodedData);
fclose();
echo "/canvas.png";
?>
