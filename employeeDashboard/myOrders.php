<?php
session_start();
error_reporting(0);
include "employeeDash_header.php";
include_once "../connection/authenticate.php";

?>
<style>
    table,th,td{
        border-collapse:collapse;
        border: 1px solid black;
    }
</style>
<h1 style = "padding: 20px 5%;">Order Details</h1>
<div class="tableContent"> 
<table cellpadding=5  style="width:90%;margin-top:20px;position:relative;left:5%;text-align: center;">
    <th>No</th><th>Product Name</th><th>Detail</th><th>Price</th><th>Customer Name</th><th>Customer Address</th><th>Customer mobile no</th><th>Date</th>
    <?php
        $employee_name = $_SESSION['username']; 
        echo $customer_name;
       $sql = "SELECT * FROM ORDERS WHERE employee_name = '$employee_name';";
       $result = mysqli_query($con,$sql);
       $No_count=0;
       while($row=mysqli_fetch_array($result)){
        $No_count++;
    ?>
    <tr>
        <td><?php echo $No_count;?></td>
        <td><?php echo $row['product_name'];?></td>
        <td><?php echo $row['product_detail'];?></td>
        <td><?php echo $row['product_price'];?></td>
        <?php 
        $id = $row['customer_id'];
        echo $id;
        $sql2 = "SELECT * FROM USERS WHERE id = '$id';";
        $result2 = mysqli_query($con,$sql2);
        $row2 = mysqli_fetch_array($result2);
        echo $row2['name'];
        ?>
        <td><?php echo $row2['name'];?></td>
        <td><?php echo $row2['address'];?></td>
        <td><?php echo $row2['mobile_no'];?></td>
        <td><?php echo $row['date'];?></td>
    </tr>
    <?php }?>
</table>
</div>

<?php
    include "../adminDashboard/footer.php";
?>