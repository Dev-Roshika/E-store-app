<?php
include "Dash_header.php";
?>

<?php  include_once "../connection/authenticate.php"; 
$sql = "SELECT * FROM PRODUCTS;";
$result = mysqli_query($con,$sql);

if(isset($_GET['id'])){
    $id = $_GET['id'];
} else{
    $id = 0;
}
echo $id;
while($row=mysqli_fetch_array($result)){ 
    if($row[0]==$id){
        $name = $row[1];
        $detail = $row[2];
        $price = $row[3];
    }
}    
?>



<div class="pro">
    <h3>Edit a product</h3>    
    <form method = "post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
        <label for="name">Name</label>
            <input type="text" name ="name" value = "<?php echo isset($name)?$name:"None" ;?>"/> <br><br>
        <label for="details">Details</label>
            <textarea name="details" column="5" row ="4"><?php echo $detail ;?></textarea><br><br>
        <label for="price">Price</label>
            <input type="text" name="price" value = "<?php echo $price ;?>"/><br><br>
        <input type="submit" name="update" class = "btn" value = "Update" style = "background-color:#2980b9;position:relative;left:5%;color:white;">
    </form>
</div>

<?php
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $detail = $_POST['details'];
        $price = $_POST['price'];
        
    $sql = "UPDATE products SET name='$name',detail='$detail',price='$price' WHERE id = '$id';";
    $result = mysqli_query($con,$sql);

    if(!$result)
  {
    ?>
    <script type="text/javascript">
        alert('Error');
	</script>
    } else{
    <script type="text/javascript">
		alert('Data successfully inserted.');
    </script>
    }
<?php    
    }
    header("Location:Avail_Products.php");
}
?>

<?php
include "footer.php";
?>