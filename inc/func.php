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

?>
