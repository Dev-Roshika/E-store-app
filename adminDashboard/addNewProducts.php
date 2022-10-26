<?php
include "Dash_header.php";
?>

<?php  include_once "../connection/authenticate.php"; 
?>

<div class="pro">
    <h3>Add a new product</h3>    
    <form action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>" method="POST">
        <label for="name">Name</label>
            <input type="text" name ="name"/> <br><br>
        <label for="details">Details</label>
            <textarea name="details" column="5" row ="4"></textarea><br><br>
        <label for="price">Price</label>
            <input type="text" name="price"/><br><br>
        <input type="submit" name = "add" class = "btn" value = "Add" style = "background-color:#2980b9;position:relative;left:5%;">
    </form>
</div>


<?php
    if(isset($_POST['add'])){
        $name = $_POST['name'];
        $detail = $_POST['details'];
        $price = $_POST['price'];
    
    $sql = "INSERT INTO PRODUCTS (name,detail,price) values('$name','$detail','$price');";
    $result = mysqli_query($con,$sql);
    if($result)
?>  {
    <script>
        alert("Data is inserted successfully.");
    </script>
    <?php header("location:Avail_Products.php"); ?>
    } else{
        <?php echo "Error, try again..."; ?>
    }


<?php
    }
include "footer.php";
?>
