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

//Creates new .txt file if one doesn't already exist, writes to it.
    if (!file_exists("testfile.txt")) {
    $fh = fopen("testfile.txt", "w") or die("Failed to create file");
    $text = "testing. FAIL";

    fwrite($fh, $text) or die("Could not write to file");
    fclose($fh);
    echo "File testfile.txt written successfully";
    }
    $fh = fopen("testfile.txt", 'r') or die("File does not exist or you lack permission to open it");
    $line = fgets($fh);
    fclose($fh);
    echo ("<br><br>");
    echo $line;
   // echo file_get_contents("http://oreilly.com");


//Executes 'dir' command on windows command line
    $cmd = "dir";
    exec(escapeshellcmd($cmd), $output, $status);
    
    if ($status) echo "Exec command failed";
    else 
    {
        echo "<pre>";
        foreach($output as $line) echo htmlspecialchars("$line\n");
        echo "</pre>";
    }
?>