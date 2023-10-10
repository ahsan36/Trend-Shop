<?php

    if(isset($_POST['btn-send'])){
        $Username = $_POST['UName'];
        $Email = $_POST['Email'];
        $Subject = $_POST['Subject'];
        $Msg = $_POST['msg'];

        if(empty($Username) || empty($Email) || empty($Subject) || empty($Msg)){
            header('location:contact.php?error');
        }else{
            $to = "mdahsanansari7860@gmail.com";

            if(mail($to,$Subject,$Msg,$Email)){
                header("location:contact.php?success");
            }
        }
    }else{
        header("location:contact.php");
    }
?>