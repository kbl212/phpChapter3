<?php
    $username = "Kyle Lauritzen";
    echo $username;
    echo "<br><br>";
    $current_user = $username;
    echo $current_user;
    echo "<br><br>";
    $team = array('Kyle', 'Fletcher', 'Dylan', 'David');
    $name_paragraph = '<p style="background-color:red;">' . $current_user . '</p>';
    echo $name_paragraph;
    for ($i = 0; $i < count($team); $i++) 
    {
        echo $team[$i];
        echo "<br><br>";
    }
?>