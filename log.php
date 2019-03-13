<?php
$fn = $_POST['folder_name'];
$content = $_POST['content'];

if($fn && !$content){
$trimmed = substr($fn,0,5);

  $mk= 'posts/'.$trimmed.time();
  mkdir($mk,0777,true);
  $path = $mk.'/'.$trimmed.'.txt';
  if(file_exists($path)){
    echo "exists";
  }
  else{
    $write = fopen($path,"w");
    fwrite($write,"ravi");
    fclose($write);
    echo "create";
  }
  
}

?>