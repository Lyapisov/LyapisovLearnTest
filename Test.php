<style type="text/css">
#container {
    width: 700px;
    margin: auto;
    }
    #left{
    width: 235px;
    margin: auto;    
    }
</style>

<div id="container">
    <h3 align = "center"> Задачка не для слабаков! </h3>
    <h3 align = "center"> Вам необходимо пройти тест, который покажет ваш уровень безумия! </h3>
    <h3 align="center"><font size="4" color="red"face="TheTimesNewRoman">

    Итак, первое задание. Выберите варианты, которые считаете нужными и нажмите продолжить.</font> </h3>




    <form  method="post">
        <img src="Image\btrGreen.gif" alt="Alternative" hspace="5" vspace="5" width="180" height="180">
        <input type="checkbox" name ="chek1_1" align="top" id="1"
           style="width:30Px; height:30Px;"> 
        <font size="5" color="red" face="TheTimesNewRoman"> <<< Ваш выбор >>> </font>
        <input type="checkbox" name ="chek1_2" align="top" id="2"
           style="width:30Px; height:30Px;">
        <img src="Image\btrWhite.gif" alt="Alternative" align="top" hspace="5" vspace="5" width="180" height="180">
        <img src="Image\bust.jpg" alt="Alternative" hspace="5" vspace="5" width="180" height="180">
        <input type="checkbox" name ="chek2_1" align="top" id="3"
           style="width:30Px; height:30Px;"> 
        <font size="5" color="red" face="TheTimesNewRoman"> <<< Ваш выбор >>> </font>
        <input type="checkbox" name ="chek2_2" align="top" id="4"
           style="width:30Px; height:30Px;">
        <img src="Image\bustGreen.jpg" alt="Alternative" hspace="5" vspace="5" width="180" height="180">
        <img src="Image\jokerHero.jpg" alt="Alternative" hspace="5" vspace="5" width="180" height="180">
        <input type="checkbox" name ="chek3_1" align="top" id="5"
           style="width:30Px; height:30Px;"> 
        <font size="5" color="red" face="TheTimesNewRoman"> <<< Ваш выбор >>> </font>
        <input type="checkbox" name ="chek3_2" align="top" id="6"
           style="width:30Px; height:30Px;">
        <img src="Image\jokerMan.jpg" alt="Alternative" hspace="5" vspace="5" width="180" height="180"><br>
    <div id="left">
        <img crs="">

        <input type="submit" name="EndTest1" value="Продолжить" align="middle"
           style="width:205Px; height:30Px; font-size: 110%" align="middle">
    </div>
</div>
    </form>

<?php 
    if( isset( $_POST['EndTest1'] )){
       
       require 'pageResult1.php';
    }       
       
       
       
  

