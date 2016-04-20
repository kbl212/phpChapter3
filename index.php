<html>
    <head>
        <title>
            Cool Title
        </title>
    </head>
    <body>
        
    </body>
</html>


<?php

    class Example 
    {
        public $age = "Michael";
    }

    $username = "Kyle Lauritzen";
    echo $username;
    echo "<br><br>";
    $current_user = $username;
    echo $current_user;
    echo "<br><br>";
    $team = array('Kyle', 'Fletcherini', 'Dylan', 'David', 'Suzaon');
    $name_paragraph = '<p style="background-color:red;">' . $current_user . '</p>';
    echo $name_paragraph;
    for ($i = 0; $i < count($team); $i++) 
    {
        echo $team[$i];
        
        echo "<br><br>";
    }
    $lowercaseString = strtolower("HAHAHA");
    echo $lowercaseString;
    echo ucfirst("<br><br>" . "testing");


    
    $fh = fopen("testfile.txt", "w") or die("Failed to create file");
    $text = "testing. HAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHAHA";

    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
    echo "File testfile.txt written successfully";
?>