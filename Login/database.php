<?php

    $db_server = "localhost";

    $db_user = "root";

    $db_pass = "";

    $db_name = "trendshop";

    $conn = "";

    // $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    // if($conn){
    //     echo "You are connected!";
    // }else{
    //     echo "Could not connect!";
    // }

    try {

        $conn = mysqli_connect($db_server, $db_user, $db_pass, $db_name);

    }catch(mysqli_sql_exception){
        echo "Could not connect!";
    }

    // if($conn){
    //     echo "You are connected! <br>";
    // }

?>