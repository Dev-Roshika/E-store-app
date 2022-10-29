<?php
include "Dash_header.php";
?>

<?php include_once "../connection/authenticate.php"; 

$sql = "SELECT * FROM PRODUCTS;";
$result = mysqli_query($con,$sql);
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

<button type="button" class = "btn" style = "margin-left:5%;margin-top:20px;background-color: rgb(19, 201, 19);" onclick = "window.location.href='addNewProducts.php'">Create New Product</button>

<table cellpadding=5 style="width:90%;margin-top:20px;position:relative;left:5%;text-align: center;">
    <th>No</th><th>Name</th><th>Detail</th><th>Price</th><th>Actions</th>
    <?php 
    $No_Count = 1;
    while($row=mysqli_fetch_array($result)){
    ?>
    
    <tr>
        <td><?php echo $No_Count;   $No_Count++;?></td>
        <td><?php echo $row[1];?></td>
        <td><?php echo $row[2];?></td>
        <td><?php echo $row[3];?></td>
        <td>
            <button type="button" class = "btn" style="background-color:rgb(105, 143, 247)" onclick="window.location.href = 'showProduct.php?id=<?php echo $row[0];?>'">Show</button>
            <button type="button" class = "btn" style="background-color:rgb(102, 81, 243)"  onclick="window.location.href = 'editProduct.php?id=<?php echo $row[0];?>'">Edit</button>
            <button type="button" class = "btn" style="background-color:rgb(243, 81, 81)" onclick="window.location.href = 'deleteProduct.php?id=<?php echo $row[0];?>'">Delete</button>
        </td>
    </tr>
    <?php 
    }
    ?>
</table>

<?php
if(!$result){
    echo "<span style='display:flex;justify-content:center;padding-top:30px;font-size:20px;'>There is no product yet<span>";
}
include "footer.php";
?>