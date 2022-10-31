<?php
include "customerDash_header.php";
?>

<style>
    table,td,th{
        border-collapse:collapse;
        border:1px solid black;
    }
    .btn{
        color: black;
        border:none;
        border-radius: 15px;
        font-weight: bold;
        padding: 10px 20px;
    }
</style>

<div class="tableContent"> 
<table cellpadding=5  style="width:90%;margin-top:20px;position:relative;left:5%;text-align: center;">
    <th>No</th><th>Name</th><th>Detail</th><th>Price</th><th>Actions</th>
    <?php 
    include_once "../connection/authenticate.php"; 
    $sql = "SELECT * FROM PRODUCTS;";
    $result = mysqli_query($con,$sql);
    
    $No_Count =0; 
    while($row=mysqli_fetch_array($result)){
        $No_Count++;    
        $id = $row[0];
    ?>
    <tr>
        <td><?php echo $No_Count;?></td>
        <td><?php echo $row['name'];?></td>
        <td><?php echo $row['detail'];?></td>
        <td><?php echo $row['price'];?></td>
        <td colspan="2">
            <button type="button" class = "btn" style="background-color: rgb(19, 201, 19)" onclick="window.location.href='placeOrder_Op.php?id=<?php echo $id;?>'" >Place order</button>
        </td>
    </tr>
    <?php }
    ?>
</table>
</div>
<?php
include "../adminDashboard/footer.php";
?>