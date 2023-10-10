<!-- Include Database File -->

<?php
    include("database.php");
?>

<?php

    // Form Checking email and password
    $Email = $_POST['email'];
    $Password = $_POST['password'];

    $result = mysqli_query($conn, "SELECT * FROM `user` WHERE Email = '$Email' AND Password = '$Password' ");

    session_start();

    // Check email and password in database

    if(mysqli_num_rows($result)){

        $_SESSION['userSession'] = $Email;
        echo"
        <script>
        alert('Login Successfully');
        window.location.href= '../index.php';
        </script>
        ";
    }else{
        echo"
        <script>
        alert('Incorrect Email');
        window.location.href= 'login.php';
        </script>
        ";
    }
?>