<?php
  // requires php5
  define('UPLOAD_DIR', '/home/woo/dev/kse523/web/html/data/images/fashionbooks/');
  $img = $_POST['imgBase64'];
  $img = str_replace('data:image/png;base64,', '', $img);
  $img = str_replace(' ', '+', $img);
  $data = base64_decode($img);
  $file = UPLOAD_DIR . uniqid() . '.png';
  $success = file_put_contents($file, $data);
  print $success ? $file : 'Unable to save the file.';
  return $success ? $file : 'Unable to save the file.';
?>
