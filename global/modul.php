<?php 

//connection to database
$connection = mysqli_connect('localhost', 'root', '', 'db_skill_test_spe') or die(mysqli_error($connection));

// for simple get a data
function query($query){
    global $connection;
    
    $result = mysqli_query($connection, $query);

    $temp = [];
    while ($line = mysqli_fetch_assoc($result)){
        $temp[] = $line;
    }

    return $temp;
}