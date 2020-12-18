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

    public function getHours(){
      return $this->hours;
    }

    public function setHours($hours){
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
  echo "<br><br>";

  class VolunteerDriver extends Volunteer {
    public $carBrand;

    public function __construct($name, $work, $hours, $carBrand) {
      parent::__construct($name, $work, $hours);
      $this->carBrand = $carBrand;
    }

  }

  $AD = new VolunteerDriver("Anthony Davis", "Habitat for Humanity", 24, "Shelby GT Mustang");

  echo "$AD->name<br>";
  echo "$AD->work<br>";
  echo $AD->getHours();
  echo"<br>$AD->carBrand";

?>