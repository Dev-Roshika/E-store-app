<?php
include "Dash_header.php";
?>

<?php  include_once "../connection/authenticate.php"; 

if(isset($_GET['id']))
    $id = $_GET['id'];

$sql = "DELETE FROM PRODUCTS WHERE id = '$id';";
$result = mysqli_query($con,$sql);

if(!$result){
?>
    <script type = "text/javascript">
        alert("Data is not deleted. Check again...");
    </script>

<?php
} else{
?>
    <script type = "text/javascript">
        alert("Data successfully deleted.");
    </script>

<?php
} header("location:Avail_Products.php");
include "footer.php";
?>