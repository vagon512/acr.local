<?php

class WeatherEntry {
  private $date;
  private $comment = "";
  private $temperature = 0;
  private $isRainy = false;

  public function __construct($date, string $comment, int $temperature){
    $this->date = $date;
    $this->comment = $comment;
    $this->temperature = $temperature;
  }
  public function isCold(){
    return $this->temperature < 0;
  }
  public function setRainStatus($rain_status){
    $this->isRainy = $rain_status;
  }

  public function getDayDescription(){
   $dt = strtotime($this->date);
   $delta = time() - $dt;
   $days = ceil($delta / 86400);
   $res = "Это было ".$days." назадю В тот день было "; 
   if($this->isCold()){
     $res .= "холодно.";
  }
   else {
     $res .= "тепло.";
   }
   if($this->isRainy){
    $res .= "шел дождь";
   }
   else {
     $res .= "было ясно.";
   }
   return $res;
  }
}


$firstSeptember = new WeatherEntry("2020-09-01", "День знаний", 23);
$firstSeptember->setRainStatus(false);

print($firstSeptember->getDayDescription());
?>
