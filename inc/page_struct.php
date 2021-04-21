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
      <div class=main>
        <h2>{$this->con}</h2>
        <ul class = my_ul>
         <li>
           <a href=index.php>Главная</a>
         </li>
         <li>
           <a href=npa.php?d=post&con=Постановления>Постановления</a>
         </li>
         <li>
           <a href=npa.php?d=resh&con=Решения>Решения</a>
         </li>
        </ul>
        <hr noshade>
      </div>";
  }

  public function foot(){
    echo "</body></html>";
  }
}

?>
