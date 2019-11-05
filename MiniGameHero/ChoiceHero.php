<?php

error_reporting(0);
require_once 'KillersTask.php';
require_once 'Hero.php';
require_once 'Task.php';


$killers = array();
$task = array();

$con = mysqli_connect("localhost", "root", "", "taskworker");

if (mysqli_connect_errno()){
    echo 'Failed to connect to MySQL' . mysqli_connect_error();
}

$workerTab = mysqli_query($con, "SELECT * FROM worker");
$taskTab = mysqli_query($con, "SELECT * FROM task");


    while($row1 = mysqli_fetch_array($workerTab)){
        $killers[$row1['name']] = new Hero($row1['id'],$row1['name'],$row1['surname'],$row1['date_birth']
                ,$row1['gender'],$row1['position'],$row1['position_id'],$row1['bonus'] );
        
    }
    while($row2 = mysqli_fetch_array($taskTab)){   
        $task[$row2['name']] = new Task($row2['id'],$row2['name'],$row2['surname'],$row2['location'], $row2['date_birth']
                ,$row2['gender'], $row2['nationality'], $row2['accusation'], $row2['number_target'], $row2['weakness'] );
    }
    
 
   ?>

<div id="container"> <h3 align = "justify"><font size="3" face="TheTimesNewRoman" color="black">
 Выберите наемника для выполнения заказа: </font></h3>
  
    <form method="post">
        <input type="radio" name="killersFerstLvl" value="Solomon">     <?php echo ($killers["Solomon"]->name .' '. $killers["Solomon"]->surname); ?>
        <input type="radio" name="killersFerstLvl" value="Zod">         <?php echo ($killers["Zod"]->name .' '. $killers["Zod"]->surname); ?>
        <input type="radio" name="killersFerstLvl" value="Rorschach">   <?php echo ($killers["Rorschach"]->name .' '. $killers["Rorschach"]->surname); ?>
        <input type="radio" name="killersFerstLvl" value="Joker">       <?php echo ($killers["Joker"]->name .' '. $killers["Joker"]->surname); ?>
        <input type="radio" name="killersFerstLvl" value="Doomsday">    <?php echo ($killers["Doomsday"]->name .' '. $killers["Doomsday"]->surname); ?>
        
        <h3 align = "justify"><font size="3" face="TheTimesNewRoman" color="black">
        Выберите помошника: </font></h3>   
        <input type="radio" name="killersSecondLvl" value="Harley">     <?php echo ($killers['Harley']->name .' '. $killers['Harley']->surname); ?>
        <input type="radio" name="killersSecondLvl" value="Bird">       <?php echo ($killers['Bird']->name .' '. $killers['Bird']->surname); ?>
        <input type="radio" name="killersSecondLvl" value="Edward">     <?php echo ($killers['Edward']->name .' '. $killers['Edward']->surname); ?>
        <input type="radio" name="killersSecondLvl" value="Penguin">    <?php echo ($killers['Penguin']->name .' '. $killers['Penguin']->surname); ?>
        <input type="radio" name="killersSecondLvl" value="Widow">      <?php echo ($killers['Widow']->name .' '. $killers['Widow']->surname); ?>
        
        <h3 align = "justify"><font size="3" face="TheTimesNewRoman" color="black">
        Выберите цель: </font></h3>    
        <input type="radio" name="task" value="Man">        <?php echo ($task['Man']->name .' '. $task['Man']->surname); ?>
        <input type="radio" name="task" value="Manhattan">  <?php echo ($task['Manhattan']->name .' '. $task['Manhattan']->surname); ?>
        <input type="radio" name="task" value="Bat">        <?php echo ($task['Bat']->name .' '. $task['Bat']->surname); ?>
        <input type="radio" name="task" value="Logan">      <?php echo ($task['Logan']->name .' '. $task['Logan']->surname); ?>
        <input type="radio" name="task" value="Woman">      <?php echo ($task['Woman']->name .' '. $task['Woman']->surname); ?>
        
        <input type="submit" name="submit" value="Подтвердить выбор">
    </form>
</div>

<div id="left">    
        <font size="3" face="TheTimesNewRoman" color="#8b0000">
            <?php if(isset($_POST['submit'])){ 
              $killer1 = $_POST['killersFerstLvl'];
              $killer2 = $_POST['killersSecondLvl'];
              $task1 = $_POST['task'];
            ?>
        
<div style="float: left; width: 100%">
    <div style="float: left; width: 33%">
            Наёмник:    <?php echo $killers[$killer1]->name .' '. $killers[$killer1]->surname; ?>
        <br>Сила:       <?php echo $killers[$killer1]->strength; ?>
        <br>Умение:     <?php echo $killers[$killer1]->bonus; ?>
    </div>
    <div style="float: left; width: 33%">
            Помошник:   <?php echo $killers[$killer2]->name .' '. $killers[$killer2]->surname; ?>    
        <br>Сила:       <?php echo $killers[$killer2]->strength; ?>
        <br>Умение:     <?php echo $killers[$killer2]->bonus; ?>
    </div>
    <div style="float: left; width: 33%">
            Цель:       <?php echo $task[$task1]->name .' '. $task[$task1]->surname; ?>
        <br>Сила:       <?php echo $task[$task1]->strength; ?>
        <br>Слабость:   <?php echo $task[$task1]->weakness; ?>
    </div></font>
</div>
<div style="clear: both"></div>
    <font size="3" face="TheTimesNewRoman" color="black">
        <div>Загрузка боя...</div>
    </font>
    <font size="3" face="TheTimesNewRoman" color="#8b0001">
        <?php
        require 'Battle.php';
        }
        ?>
    </font>
</div>