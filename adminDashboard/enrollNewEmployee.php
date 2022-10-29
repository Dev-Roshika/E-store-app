<?php
include "Dash_header.php";
?>

<?php  include_once "../connection/authenticate.php"; 
?>

<div class="pro">
    <h3>Enroll a new Employee</h3>    
    <form action="" method = "post">
        <label for="name">Name</label>
            <input type="text" name ="name"/> <br><br>
        <label for="email">Email</label>
            <input type="email" name="email"/><br><br>
        <label for="gender">Gender</label>
            <select name="gender" style="width:170.4px;height:22px;">
                <option value="male">M</option>
                <option value="female">F</option>
            </select> <br><br>
        <label for="Address">Address</label>
            <textarea name="address" column="5" row ="1" style="width:170.4px;height:22px;"></textarea><br><br>
        <label for="mobileNo">Mobile No:</label>
            <input type="tel" name="mobileNo"> <br><br>
        <label for="password">Password</label>
            <input type="password" name="password"> <br><br>
        <input type="submit" class = "btn"  name = "enroll" value = "Enroll" style = "background-color:#2980b9;position:relative;left:5%;">
    </form>
</div>

<?php
$name = ""; $email = ""; $gender = ""; $address = ""; $mobileNo = ""; $pwd = ""; $role = "";
    if(isset($_POST['enroll'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $mobileNo = $_POST['mobileNo'];
        $pwd = md5($_POST['password']);
        $role = "Employee";
         
         $sql = "INSERT INTO users (name,email,gender,address,mobile_no,password,role) VALUES ('$name','$email','$gender','$address','$mobileNo','$pwd','$role');";
         mysqli_query($con,$sql);
         header("location:Avail_Employees.php");

    //     if($result){
    //         echo "<script>";
    //         echo "alert('Error...')";
    //         echo "</script>";
    //     } else{
    //         echo "<script>";
    //         echo "alert('Data successfully inserted.')";
    //         echo "</script>";
    //     }<?php echo htmlentities($_SERVER['PHP_SELF']);
    }
    ?>

<?php 
include "footer.php";
?>
