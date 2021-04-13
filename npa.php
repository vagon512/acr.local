<?php
include 'vendor/autoload.php';

include 'inc/func.php';
include 'inc/page_struct.php';
$pageName = "Documents";
$pageCon = "Documents of ACR";
$dirName = "/mnt/npa";
showHead($pageName, $pageCon);
//$dir = "/mnt/npa";
if (!$_GET["dir"]){
// echo "<div class=\"my_p\">hasdfsadfsadfsadfdsafsadfello</div>";
  $myDir = scandir($dirName);
  echo "<ul class=\"my_ul\">";
  foreach($myDir as $Dir){
    if ($Dir == "." || $Dir == ".." || $Dir == "lost+found") continue;
   $r = $dirName."/".$Dir;
    if(is_dir($r)){
      echo "<li><a href = npa.php?dir=$Dir>".$Dir."</a></li>";
    }
  }
  echo "</ul>";
}

else{
  $dir = $dirName."/".$_GET["dir"];
 // echo "<style> div{color:red; border-color: green;}</style>";
  echo "<p class=my_p><a href = \"npa.php\">go back</a></p>";
  showTree($dir, "==");
}

showFoot();
?>


