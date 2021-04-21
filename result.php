<?php

//show resutl
include 'vendor/autoload.php';

require_once( 'inc/func.php' );
require_once( 'inc/page_struct.php' );
$pageCon = "Documents of ACR";
$fname = $_GET["file"];
$dirname = $_GET["dir"];

$page = new PageStruct($fname, $pageCon);

$page->head();

$filename=$dirname."/".$fname;
$size = formatFileSize($filename);
//showTree('myfiles', " ");
echo "<div>";
echo $filename;
echo " -- "."<a href = $filename target = blank>Скачать документ</a>";
echo "</div>";
//pdf parse
  $parser = new \Smalot\PdfParser\Parser();

  $pdf = $parser->parseFile($filename);
  $text = $pdf->getText();
  $num = strpos($text, "А");
  $text = substr($text, $num);
  $text_result=explode(" ", $text);
  $new_text=array();


//print($text);
preg_match('/«([^"]+)»/', $text, $p);
echo "<br>";
$docName = explode("»",$p[1]);

echo "<table>
        <tr>
          <td>краткое содержание</td>
          <td>$docName[0]</td>
        <tr>
          <td>Размер файла</td>
          <td>$size</td>
        </tr>
      </table>";
//print_r($docName);
//echo $docName;
// $docName = explode("»", $docName);

$pattern = '#^[\s]*[0-9]*[.]+$#';

for($i=0; $i<=sizeof($text_result); $i++){
  if(strlen($text_result[$i]) != 0 and $text_result[$i] != "\n" and $text_result[$i] != "\t" 
            and $text_result[$i] != "\r" and $text_result[$i] != " "){
     array_push($new_text, $text_result[$i]);
  }
}

$j=0;
echo "<p class=my_p>";
for($i=0; $i<=sizeof($new_text);$i++){
  if(strpos($new_text[$i], "\t") !== false || 
       strpos($new_text[$i], " ") !== false){
    $newText = str_replace("\t", "", $new_text[$i]); 
    //echo $newText."!@!@!@<br>";
    $new_text[$i] = $newText;
  }
  //развивка на пункты
  if (preg_match($pattern, $new_text[$i])) {
    echo "<br>";
  }
  echo $new_text[$i]." ";
}
  echo "</p>";

$page->foot();
?>


