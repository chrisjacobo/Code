<?php

class Time {
    private $newDate;
    private $people;
    private $cities;

    public function setDate($newDate){
 
        $this->newDate = $newDate;
       
       }

    public function getDate(){
        return $this->newDate;
    }

    public function setPeople($people){
        $this->people = $people;
    }

    public function getPeople(){
        
        return $this->people;

    }

    public function setCities($cities){
        $this->cities = $cities;
    }

    public function getCities(){
        return $this->cities;
    }
       
    
   
}

$time = new Time();
$time->setDate(date("m/d/Y"." - "."h:i:sa"));
$time->setPeople(array("Jimmy", "George", "Latavius"));
$time->setCities('Chicago');

print_r($time);


?>