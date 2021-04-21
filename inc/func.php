<?php

//функци для построения дерева каталогов

function showTree($folder, $space){
  $files = scandir($folder);
  foreach($files as $file){
//    $ext = pathinfo($file, PATHINFO_EXTENSION);
    if(($file == '.') || ($file == '..')) continue;
      $f0 = $folder.'/'.$file;
      $ext = pathinfo($file, PATHINFO_EXTENSION);
      if(is_dir($f0) and $file != "lost+found"){
        echo $space.$file."<br />";
        showTree($f0, $space.'==');
      }
      else if($ext == "pdf"){
       echo $space."<a href=result.php?file=".$file."&dir=".$folder.">".$file."</a><br />";
     }
  }
 }
//return  size of selected file
function formatFileSize($file) {
    $size = filesize($file);
    $a = array("B", "KB", "MB", "GB", "TB", "PB");
    $pos = 0;
    while ($size >= 1024) {
        $size /= 1024;
        $pos++;
    }
    return round($size,2)." ".$a[$pos];
}

?>
