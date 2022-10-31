<?php
   include "customerDash_header.php";
   include_once "../connection/authenticate.php";
   $product_name = $_SESSION['product_name'];
   $product_details = $_SESSION['product_details'] ;
   $product_price = $_SESSION['product_price']; 
   $date =  $_SESSION['date'];
   $customer_name = $_SESSION['username'];
   $customer_id = -1;

   $sql1 = "SELECT id from USERS where name = '$customer_name';";
   $result1 = mysqli_query($con,$sql1);
   $row1=mysqli_fetch_array($result1);
   $customer_id = $row1['id'];

    if(isset($_POST['order'])){
        $employee_name = $_POST['emp_name'];
    }

   $sql = "INSERT INTO orders (product_name,product_detail,product_price,employee_name,customer_id,date) VALUES('$product_name','$product_details','$product_price','$employee_name','$customer_id','$date');";
   $result = mysqli_query($con,$sql);
?>

<div class= "main">
    <a href="customerDashboard.php" title="Go to the Customer Dashboard"><h1>You ordered successfully!</h1> </a>
</div>

<?php
    include "../adminDashboard/footer.php";
?>