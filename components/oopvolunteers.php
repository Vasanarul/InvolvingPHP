<?php

  class Volunteer {
    public $name;
    public $work;
    private $hours;

    function __construct($name, $work, $hours) {
      $this->name = $name;
      $this->work = $work;
      $this->setHours($hours);
    }

    function getHours(){
      return $this->hours;
    }

    function setHours($hours){
      if(is_int($hours) == true || is_float($hours) == true) {
        $this->hours = $hours;
      } else {
        $this->hours = "Error: Invalid datatype.";
      }
    }
  }

  $Dennis = new Volunteer("Dennis Schroder", "Youth skills camp", 20);

  echo "$Dennis->name<br>";
  echo "$Dennis->work<br>";
  echo $Dennis->getHours();

?>