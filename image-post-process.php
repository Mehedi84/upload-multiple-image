<?php

function imageFunction($imageName, $imageSize, $imageTmp)
{
  $ext = pathinfo($imageName, PATHINFO_EXTENSION);
  $allwoed_extention = array('pdf', 'png', 'jpg','JPEG','PNG','GIF','jpeg','JPG','PDF','docx');
  if(in_array($ext, $allwoed_extention)){
    if ($imageSize < 10485760) {
      echo $newfilename = round(microtime(true)) . $imageName;
      move_uploaded_file($imageTmp, "image/".$newfilename);
      return $newfilename;
    }else{
      echo "File Size Onek Boro";
    }
  }else{
    echo "Extension Not Match";
  }
}
$count = count($_FILES['image']['name']);
for ($i=0; $i < $count; $i++) { 
$imageName = $_FILES['image']['name'][$i];
$imageSize = $_FILES['image']['size'][$i];
$imageTmp = $_FILES['image']['tmp_name'][$i];

imageFunction($imageName, $imageSize, $imageTmp);
}

?>