<?php
include 'inc/func.php';
include 'inc/page_struct.php';
$pageName = "Documents";
$pageCon = "Documents of ACR";
$myfiles = "myfiles";
showHead($pageName, $pageCon);

showTree($myfiles, " ");

showFoot();
?>


