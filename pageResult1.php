<?php 
include_once 'resultTest1.php';
include_once 'functions.php';
?>
    <h2 align = "center"><font size="4" color="red"face="TheTimesNewRoman">
<?php 
       global $result;
       print_r($result);
    if (verification() == false){
?>       
    <form action="Test.php" method="post" text-align:center>
        <div id="container"> 
            <input type="submit" name="No" value="Вернуться" align="middle"
            style="width:200Px; height:45Px; font-size: 120%" align="middle">
        </div>
    </form>
<?php }else { ?>
    <h4 align = "center"><font size="4" color="black" face="TheTimesNewRoman">
         Пройди мини-игру и узнай о себе еще больше! </font></h4>
    <form action="MiniGameHero/KillersTask.php" method="post" text-align:center>
        <div id="container"> 
            <input type="submit" name="Ok" value="Пройти Мини-игру" align="middle"
             style="width:250Px; height:25Px; font-size: 100%" align="middle">
        </div>
    </form></font></h2>
<?php }
    
    

    