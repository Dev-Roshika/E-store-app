<?php
session_start();
include "Dash_header.php";

if(isset($_GET['Status']) && $_GET['Status'] == "visible"){
    $admin_email = $_SESSION['admin_name'];
    echo $admin_email;
     echo '<div class= "main">';
         echo "<h2>Employee name : ".$_SESSION['admin_name']."</h2>";
     echo "</div>";
 }
?>

<div class= "main">
    <h1>Welcome to Admin Dashboard!</h1>
</div>

<?php
include "footer.php";
?>