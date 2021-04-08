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
  echo $text;

showFoot();
?>


