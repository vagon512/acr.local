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
 echo "<div class=\"help\">hasdfsadfsadfsadfdsafsadfello</div>";
  $myDir = scandir($dirName);
  foreach($myDir as $Dir){
    if ($Dir == "." || $Dir == ".." || $Dir == "lost+found") continue;
   $r = $dirName."/".$Dir;
    if(is_dir($r)){
      echo "<a href = npa.php?dir=$Dir>".$Dir."</a><br>";
    }
  }
}

else{
  $dir = $dirName."/".$_GET["dir"];
 // echo "<style> div{color:red; border-color: green;}</style>";
  echo "<div><a href = \"npa.php\">go back</a></div>";
  showTree($dir, "==");
}

showFoot();
?>


