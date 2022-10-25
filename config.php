<?php
    if(isset($_POST["login"])){
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
    }
    if(($pass == $_SESSION['admin_password)']) && ($email == $_SESSION['admin_email'])){
        header("location:adminDashboard.php");
    }
?>