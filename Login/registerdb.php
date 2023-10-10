
<!-- Include Database File -->

<?php
    include("database.php");
?>


<?php

// Request from if Post

if($_SERVER["REQUEST_METHOD"] == "POST"){

    // Sanitize : To Remove any illegal characters from the input data.

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    // Insert data into database
    
    $sql = "INSERT INTO user (Username, Email, Password) VALUES ('$username', '$email','$password')";

    try {
        mysqli_query($conn, $sql);
        // echo "You are now registered";
        echo"
        <script>
        alert('Register Successfully');
        window.location.href= 'login.php';
        </script>
        ";
    } catch (mysqli_sql_exception) {
        // echo "That username is taken";

        echo"
        <script>
        alert('This Username is already taken');
        window.location.href= 'register.php';
        </script>
        ";
    }
}

mysqli_close($conn);

?>