<?php error_reporting(0); ?> 
<?php
include "customerDash_header.php";

if($_GET['Status'] == "visible"){
    echo '<div class= "main">';
        echo "<h2>Customer name : ".$_SESSION['username']."</h2>";
    echo "</div>";
}
?>



<div class= "main">
    <h1>Welcome to Customer Dashboard!</h1>
</div>



<?php
include "../adminDashboard/footer.php";
?>