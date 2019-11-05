<?php

require_once 'Hero.php';
require_once 'Task.php';
require_once 'ChoiceHero.php';

$inError = true;
$choice = ImportChoice();

if ($inError){
    StrengthHero($choice);
    echo $winner = (Battle($choice));
}

function ImportChoice(){
    
    $choice = array();
    global $inError;
    $error = 'Пожалуйста выберите одного Наемника, одного Помошника и одну Цель';
    $killer1 = $_POST['killersFerstLvl'];
    $killer2 = $_POST['killersSecondLvl'];
    $task1 = $_POST['task'];
    $choice['killer1'] = $killer1;
    $choice['killer2'] = $killer2;
    $choice['task'] = $task1;

    if(($killer1 == null) | ($killer2 == null) | ($task1 == null)){
        $inError = false;
        echo $error;
    }
    return $choice;
}

function StrengthHero($choice){
    
   global $killers;
   global $task;
   $killer1 = $choice['killer1'];
   $killer2 = $choice['killer2'];
   $task1 = $choice['task'];

   if (($killers[$killer1]->bonus) == ($task[$task1]->weakness)) {
       $killers[$killer1]->strength += 1; 
   }
   if (($killers[$killer2]->bonus) == ($task[$task1]->weakness)){
       $killers[$killer2]->strength += 1; 
   } 
}

function Battle($choice){
    
   global $killers;
   global $task;
   $killer1 = $choice['killer1'];
   $killer2 = $choice['killer2'];
   $task1 = $choice['task'];
   
   $summStrengthKillers = ($killers[$killer1]->strength) + ($killers[$killer2]->strength);
   $summStrengthTask = $task[$task1]->strength;
   
   if ($summStrengthKillers < $summStrengthTask){
       $winner = 'Вас убили...';
   }else if ($summStrengthKillers == $summStrengthTask){
       $winner = 'В равном бою победителя не сыщешь...';
   }else if ($summStrengthKillers > $summStrengthTask){
       $winner = 'Заказ выполнен!';
   }
   return $winner; 
}