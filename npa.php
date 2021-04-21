<?php
include 'vendor/autoload.php';

require_once( 'inc/func.php' );
require_once( 'inc/page_struct.php' );
$page = new PageStruct("Постановления", $_GET["con"]);
$d = $_GET["d"];
$dirName = "mynpa"."/".$d;
$page->head();
//$dir = "/mnt/npa";
if (!$_GET["dir"]){

  $myDir = scandir($dirName);
  echo "<div class = workspace>
        <p>Выберете год принятия ". $_GET["con"]. "</p>";
  echo "<ul class=\"my_ul\">";
  foreach($myDir as $Dir){
    if ($Dir == "." || $Dir == ".." || $Dir == "lost+found") continue;
   $r = $dirName."/".$Dir;
    if(is_dir($r)){
      echo "<li><a href = npa.php?dir=$r>".$Dir."</a></li>";
    }
  }
  echo "</ul>";
}

else{
  $dir = $_GET["dir"];
  echo "<div class=workspace>".$dir."<br>";
 // echo "<style> div{color:red; border-color: green;}</style>";

  showTree($dir, "==");

  echo "</div>";
}

$page->foot();
?>


