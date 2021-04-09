<?php
//function for header and footer in each page

function showHead($pageName, $pageCon){
echo "
<html>
<head>
<title>".$pageName."</title>
<link rel=\"stylesheet\" href=\"style/style.css\"
</head>
<body>
<h2>".$pageCon."</h2>";
}

function showFoot(){
echo "</body></html>";
}

?>
