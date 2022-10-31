<?php
include "Dash_header.php";
?>

<?php
    include_once "../connection/authenticate.php"; 

    $id = -1;
    if(isset($_GET['id']))
        $id = $_GET['id'];

    $sql = "DELETE FROM USERS WHERE id = '$id';";
    $result = mysqli_query($con,$sql);
    header("Location:Avail_Employees.php");
?>


<?php
include "footer.php";
?>
