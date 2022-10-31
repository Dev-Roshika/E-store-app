<?php
   include "customerDash_header.php";
?>

<?php  include_once "../connection/authenticate.php"; 
    
    if(isset($_GET['id'])){
        $id = $_GET['id'];   
    }
     
?>

<div class="show_details">   
<table align="center" cellpadding="5">
    <?php
        $sql = "SELECT * FROM PRODUCTS WHERE id = '$id';";
        $result = mysqli_query($con,$sql);
        while($row=mysqli_fetch_array($result)){
    ?>
        <form action="OrderSuccess.php?customerID=<?php $_SESSION['CustomerId'];?>" method = "post">
        <tr>
            <td>Product Name:</td>
            <td><?php echo $row['name']; 
                $_SESSION['product_name'] = $row['name'];
                $_SESSION['product_details'] = $row['detail'];
            ?></td>
        </tr>
        <tr>
            <td>Employee Name: </td>
            <td>
                    <select name="emp_name" >
                    <?php
                        $sql1 = "SELECT id,name FROM USERS WHERE role = 'Employee';";
                        $result1 = mysqli_query($con,$sql1);
                        while($row1=mysqli_fetch_array($result1)){
                    ?>
                        <option value="<?php echo $row1['name'];?>"><?php echo $row1['name'];?></option>
                    <?php 
                    $id = $row1['id'];
                    }?>
                    </select>
                
            </td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><?php echo $row['price']; 
                $_SESSION['product_price'] = $row['price'];
                $_SESSION['date'] = date("d.m.Y");
            ?></td>
        </tr>
        <tr>
            <td>
                <input type="submit" class = "btn" style="background-color:rgb(19, 201, 19)" value = "Order" name= "order">
            </td>

        </tr>
        </form>
        <?php }?>
    </table>
</div>

<?php
 include "../adminDashboard/footer.php";
?>