<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "esms";

    $con = mysqli_connect($servername,$username,$password,$dbname);

    if($con->connect_errno){
        die("Connection failed : " . $con->connect_error);
    }
?>