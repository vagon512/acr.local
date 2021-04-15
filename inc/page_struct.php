<?php
//function for header and footer in each page

class PageStruct{

  private $pageName;
  private $pageCon;

  public function __construct($pageName, $pageCon){
    $this->name = $pageName;
    $this->con = $pageCon;
  }
  public function head(){
    echo "
      <html>
      <head>
        <title>{$this->name}</title>
        <link rel=\"stylesheet\" href=\"style/style.css\"
      </head>
      <body>
      <h2>{$this->con}</h2>";
  }

  public function foot(){
    echo "</body></html>";
  }
}

?>
