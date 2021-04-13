<?php

//show resutl
include 'vendor/autoload.php';

include 'inc/func.php';
include 'inc/page_struct.php';
$pageName = "Documents";
$pageCon = "Documents of ACR";
$fname = $_GET["file"];
$dirname = $_GET["dir"];
showHead($pageName, $pageCon);
$filename=$dirname."/".$fname;
//showTree('myfiles', " ");
echo $filename;
//pdf parse
  $parser = new \Smalot\PdfParser\Parser();

  $pdf = $parser->parseFile($filename);
  $text = $pdf->getText();
  $num = strpos($text, "А");
  $text = substr($text, $num);
  $text_result=explode(" ", $text);
  $new_text=array();

for($i=0; $i<=sizeof($text_result); $i++){
  if(strlen($text_result[$i]) != 0 and $text_result[$i] != "\n" and $text_result[$i] != "\t" 
            and $text_result[$i] != "\r" and $text_result[$i] != " "){
     array_push($new_text, $text_result[$i]);
  }
}

$j=0;
echo "<p class=my_p>";
for($i=0; $i<=sizeof($new_text);$i++){
  if($j==30){
    echo "<br>";
    $j=0;
  }
  $j++;
  if(strpos($new_text[$i], "\t")>0){
    $newText = str_replace("\t", "", $new_text[$i]); 
    //echo $newText."!@!@!@<br>";
    $new_text[$i] = $newText;
  }
  echo $new_text[$i]." ";
}
  echo "</p>";

//echo bin2hex(" ");


showFoot();
?>


