<?php

// read the .ini file and create an associative array
# phpinfo();


$db = parse_ini_file("./connection.ini");
# echo "User is: ".$db['user']."<br/>".$db['host'];

try {
    $connection=new PDO($db['type'].":host=".$db['host'].";dbname=".$db['database']."",$db['user'],$db['pass']);
    #$connection=new PDO("mysql:host=localhost;dbname:vinit_kaustubh","root","actscdac");

    $connection->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
    
   # echo "<br/>Connected to database";
} catch (PDOException $message) {
    echo $message->getMessage();
}
?>