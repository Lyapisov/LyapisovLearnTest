<?php

error_reporting(0);
include_once 'Functions.php';

$answer = array();
$inicialArray = inicialisation();
$logicArray = logicArrayCalculate();
$letterChoice = choiceLetterTest1($logicArray);
verification();

if ((verification() == true)){
    
$result = enterResult($letterChoice);

    
    }
















    

    





