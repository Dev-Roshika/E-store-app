<?php
   include "customerDash_header.php";
   include_once "../connection/authenticate.php";
   $product_name = $_SESSION['product_name'];
   $product_details = $_SESSION['product_details'] ;
   $product_price = $_SESSION['product_price']; 
   $date =  $_SESSION['date'];

    if(isset($_POST['order'])){
        $employee_name = $_POST['emp_name'];
    }

   $sql = "INSERT INTO orders (product_name,product_detail,employee_name,date) VALUES('$product_name','$product_details','$employee_name','$date');";
   $result = mysqli_query($con,$sql);

?>

<div class= "main">
<a href="customerDashboard.php" title="Go to the Customer Dashboard"><h1>You ordered successfully!</h1> </a>
</div>

<?php
 include "../adminDashboard/footer.php";
?>