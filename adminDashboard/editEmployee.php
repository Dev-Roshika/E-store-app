<?php
include "Dash_header.php";
?>

<style>
    .pro{
        position: relative;
        left: 40%;
        margin: 40px 0;
    }
    .pro h3{
        display: flex;
        align-items: center;
    }
    .btn{
        color: white;
        border:none;
        border-radius: 10px;
        font-weight: bold;
        padding: 10px 20px;
    }
</style>


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
        $email = $row[2];
        $gender = $row[3];
        $address = $row[4];
        $mobile = $row[5];
    }
}    
?>


<div class="pro">
    <h3>Edit a product</h3>    
    <form action="<?php echo  htmlentities($_SERVER['PHP_SELF']); ?>">
    <label for="name">Name</label>
            <input type="text" name ="name" value = "<?php echo $name ; ?>"/> <br><br>
        <label for="email">Email</label>
            <input type="email" name="email" value = "<?php echo $email ; ?>"/><br><br>
        <label for="gender">Gender</label>
            <select name="gender" style="width:170.4px;height:22px;">
                <option value="male">M</option>
                <option value="female">F</option>
            </select> <br><br>
        <label for="mobileNo">Mobile No:</label>
            <input type="text" name="mobileNo" value = "<?php echo $mobile ; ?>"> <br><br>
        <label for="Address">Details</label>
            <textarea name="details" column="5" row ="1" style="width:170.4px;height:22px;"><?php echo $address ; ?></textarea><br><br>
        <input type="submit" class = "btn" value = "Update" style = "background-color:#2980b9;position:relative;left:5%;">
    </form>
</div>

<?php
include "footer.php";
?>