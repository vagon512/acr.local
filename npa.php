<?php
include 'vendor/autoload.php';

include 'inc/func.php';
include 'inc/page_struct.php';
$pageName = "Documents";
$pageCon = "Documents of ACR";
$filename = "myfiles/Seminar.pdf";
showHead($pageName, $pageCon);

showTree('myfiles', " ");

//pdf parse
  $parser = new \Smalot\PdfParser\Parser();

  $pdf = $parser->parseFile($filename);
  $text = $pdf->getText();
  echo strlen($text);
  $text_result=explode(" ", $text);
//  echo "<br>".sizeof($text_result);
//  echo "<br>".$text_result[0]." ".$text_result[50];
$j=0;
echo "<p>";
for($i=0; $i<=sizeof($text_result);$i++){
  if($j==60){
    echo "<br>";
    $j=0;
  }
  $j++;
  echo $text_result[$i]." ";
}
  echo "</p>";
showFoot();
?>


