<?php

//функци для построения дерева каталогов

function showTree($folder, $space){
  $files = scandir($folder);
  foreach($files as $file){
    if(($file == '.') || ($file == '..')) continue;
      $f0 = $folder.'/'.$file;
      if(is_dir($f0)){
        echo $space.$file."<br />";
        showTree($f0, $space.'&nbsp;&nbsp;');
      }
      else echo $space.$file."<br />";
  }
 }


?>
