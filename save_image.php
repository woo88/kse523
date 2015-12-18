<?php
  // requires php5
  define('UPLOAD_DIR', 'data/images/fashionbooks/');
  $img = $_POST['imgBase64'];
  $items = $_POST['canvasItems'];
  $img = str_replace('data:image/png;base64,', '', $img);
  $img = str_replace(' ', '+', $img);
  $data = base64_decode($img);
  $file = UPLOAD_DIR . uniqid() . '.png';
  $success = file_put_contents($file, $data);
  // echo $file;
  // print $success ? $file : 'Unable to save the file.';

  $result = array('fashionId'=>uniqid(),'image'=>$file,'items'=>$items,'likes'=>0,'userId'=>'000001');
  $inp = file_get_contents('data/fashionbooks.json');
  $tempArr = json_decode($inp);
  // echo $tempArr;
  array_push($tempArr, $result);
  // echo json_encode($result);
  $jsonData = json_encode($tempArr);
  // echo $jsonData;
  file_put_contents('data/fashionbooks.json', $jsonData);

  // echo $tempArr;
  // echo 'php done';
?>
