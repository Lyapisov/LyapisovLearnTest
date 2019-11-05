<?php

class Task{
    
    public $strength = 5;
    public $weakness = null;
    
    public $id;
    public $name;
    public $surname;
    public $location;
    public $date_birth;
    public $gender;
    public $nationality;
    public $accusation;
    public $number_target;
    public $type;
    
  function __construct($id, $name, $surname, $location, $date_birth, $gender, $nationality, $accusation, $number_target, $weakness) {
           
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->location = $location;
        $this->date_birth = $date_birth;
        $this->gender = $gender;
        $this->nationality = $nationality;
        $this->accusation = $accusation;
        $this->number_target = $number_target;
        $this->weakness = $weakness;
           
    }
    
    public function printHeroName(){
        echo $this->name .' '. $this->surname;
    }
    
    public function printHeroInfo(){
        echo 'Имя: ' . $this->name . ' ' . $this->surname
                . '<br> Положение: ' . $this->location
                . '<br> Дата рождения: ' . $this->date_birth
                . '<br> Пол: ' . $this->gender
                . '<br> Национальность: ' . $this->nationality
                . '<br> Причина казни: ' . $this->accusation;
    }
}