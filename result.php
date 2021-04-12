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
//echo "<p>".$num."</p>";
  $text = substr($text, $num);
  //echo strlen($text);
  $text_result=explode(" ", $text);
  $new_text=array();
//  echo "<br>".sizeof($text_result);
//  echo "<br>".$text_result[0]." ".$text_result[50];
for($i=0; $i<=sizeof($text_result); $i++){
  if(strlen($text_result[$i]) != 0 and $text_result[$i] != "\n" and $text_result[$i] != "\t" 
            and $text_result[$i] != "\r" and $text_result[$i] != " "){
     array_push($new_text, $text_result[$i]);
  }
}

echo "=== ".sizeof($new_text)." ===";
$j=0;
echo "<p>";
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


for($i=0; $i<sizeof($new_text); $i++){
  echo $i." ===> ".$new_text[$i]."<br>";
}
//echo bin2hex(" ");

$textW = str_split($new_text[80]);
echo "<br>++++".sizeof($textW);
for($i=0; $i<sizeof($textW); $i++){
  echo $textW[$i].">>>>".bin2hex($textW[$i])."<br>";
}
echo bin2hex($new_text[142])."####<br>";

echo strpos($new_text[80], "\t")."!!!!<br>";
$new_text[135] =  str_replace("\t", "", $new_text[135]);
echo ".... ".$new_text[135]."....";
showFoot();
?>


