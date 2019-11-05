<?php
class Hero{
    
    public $strength = 2;
    public $bonus = null;
    
    public $id;
    public $name;
    public $surname;
    public $date_birth;
    public $gender;
    public $position;
    public $position_id;
    public $type;
    
    function __construct($id, $name, $surname, $date_birth, $gender, $position, $position_id, $bonus) {
       
        $this->id = $id;
        $this->name = $name;
        $this->surname = $surname;
        $this->date_birth = $date_birth;
        $this->gender = $gender;
        $this->position = $position;
        $this->position_id = $position_id;
        $this->bonus = $bonus;
    }
    
     public function printHeroName(){
        echo $this->name .' '. $this->surname;
    }
    
     public function printHeroInfo(){
        echo 'Имя: ' . $this->name . ' ' . $this->surname
                . '<br> Звание: ' . $this->position
                . '<br> Дата рождения: ' . $this->date_birth
                . '<br> Пол: ' . $this->gender;
    }
}
