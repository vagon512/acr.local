<?php
include 'vendor/autoload.php';

include 'inc/func.php';
include 'inc/page_struct.php';
$pageName = "Documents";
$pageCon = "Documents of ACR";
$dirName = "/mnt/npa";
showHead($pageName, $pageCon);

showTree($dirName, " ");


showFoot();
?>


