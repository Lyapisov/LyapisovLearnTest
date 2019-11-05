<?php

// Функция для передачи значений чекбокса с Пост метода к массиву ансвер.
function inicialisation(){
global $answer;   
$answer[0] = $_POST['chek1_1'];
$answer[1] = $_POST['chek1_2'];
$answer[2] = $_POST['chek2_1'];
$answer[3] = $_POST['chek2_2'];
$answer[4] = $_POST['chek3_1'];
$answer[5] = $_POST['chek3_2'];   
}

//Функция для передачи значений 1 и 0 массиву в зависимости от того что выбрано в чекбоксе.
function logicArrayCalculate(){

    global $answer;
    
for ($i=0; $i<6; $i++){
    
if ((isset($answer[$i])) && (strlen($answer[$i]))>0){
    $answer[$i] = 1;
}else{
    $answer[$i] = 0;}
}
}

//Функция для проверки правильности выбора. Необходимо только 1 вариант из двух.

function verification(){
   
    global $answer;
    global $result;
    
    if ((($answer[0]==1) && ($answer[1]==1)) || (($answer[2]==1) && ($answer[3]==1)) 
            || (($answer[4]==1) && ($answer[5]==1)) ){
        $result = "Пожалуйста, выберите по одному варианту из 2-х.";
            }
            
    else if ((($answer[0]==0) && ($answer[1]==0)) || (($answer[2]==0) && ($answer[3]==0)) 
            || (($answer[4]==0) && ($answer[5]==0))){
            $result = "Пожалуйста, выберите по одному варианту из 2-х.";    
            }else{
            return true; }
    }
   
//Функция для присврения буквенного знака для 8 вариантов выбора чекбокса.
function choiceLetterTest1 (){
    
    global $answer;
    
    if (($answer[0] == 1) && ($answer[2] == 1) && ($answer[4] == 1)){
    return a;
}
if (($answer[1] == 1) && ($answer[3] == 1) && ($answer[5] == 1)){
    return b;
}
if (($answer[0] == 1) && ($answer[2] == 1) && ($answer[5] == 1)){
    return c;
}
if (($answer[0] == 1) && ($answer[3] == 1) && ($answer[5] == 1)){
    return d;
}
if (($answer[1] == 1) && ($answer[2] == 1) && ($answer[4] == 1)){
    return e;
}
if (($answer[0] == 1) && ($answer[3] == 1) && ($answer[4] == 1)){
    return f;
}
if (($answer[1] == 1) && ($answer[2] == 1) && ($answer[5] == 1)){
    return g;
}
if (($answer[1] == 1) && ($answer[3] == 1) && ($answer[4] == 1)){
    return h;
} 
}

//Функция для присваивания необходимого ответа, выводимой переменной ресульт.
function enterResult ($indicator){
    
    global $result;
    
  
    switch ($indicator){
        case "a":
            $result = "Поздравляю, Ты псих со стремлением к прекрасному!";
        break;
        case "b":
            $result = "Похоже, что ты человек с необычными предпочтениями.";
        break;
        case "c":
            $result = "Ты так прост?. Какой-то нормальный что ли.";
        break;
        case "d":
            $result = "Похоже ты на распутье между нормой и сумашедствием.";
        break;
        case "e":
            $result = "Любишь преукрасить простые вещи? Выкинь демонов из головы!";
        break;
        case "f":
            $result = "Ну ты полный псих, да еще и на зелёные волосы подсел!";
        break;
        case "g":
            $result = "Любишь погрустить, наслаждаясь прекрасным?";
        break;
        case "h":
            $result = "Ты умеешь сломать логику. Наверняка не нормальный!";
        break;
        
    }
    return $result;
}







