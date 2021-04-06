<?php
include 'inc/func.php'
include 'inc/page_struct.php'
$pageName = "Documents";
$pageCon = "Documents of ACR";

showHead($pageName, $pageCon);

showTree(myfiles, " ");

showFoot();
?>


