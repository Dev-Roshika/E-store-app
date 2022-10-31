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
$sql = "SELECT * FROM USERS;";
$result = mysqli_query($con,$sql);
$id = -1;
if(isset($_GET['id'])){
    $id = $_GET['id'];
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
    <form action="<?php echo  htmlentities($_SERVER['PHP_SELF']); ?>" method="post">
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
        <label for="Address">Address</label>
            <textarea name="address" column="5" row ="1" style="width:170.4px;height:22px;"><?php echo $address ; ?></textarea><br><br>
        <input type="hidden" name = "id" value = "<?php echo $_GET['id'];?>">
        <input type="submit" class = "btn" name = "update" value = "Update" style = "background-color:#2980b9;position:relative;left:5%;">
    </form>
</div>

<?php
    if(isset($_POST['update'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $mobile = $_POST['mobileNo'];
        $address = $_POST['address'];
        $id = $_POST['id'];
        echo "<script>";
        echo "alert('Clicked')";
        echo "</script>";
        $sql = "UPDATE USERS SET name = '$name',email='$email',gender='$gender',address='$address',mobile_no='$mobile' WHERE id = '$id'; ";
        $result = mysqli_query($con,$sql);
        header("Location:Avail_Employees.php");
    }
?>

<?php
include "footer.php";
?>