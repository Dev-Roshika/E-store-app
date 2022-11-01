<?php
session_start();
//admin details
$_SESSION['admin_name'] = "This";
$_SESSION['admin_email'] = "admin@gmail.com";
$_SESSION['admin_password'] = md5("Admin1@%");
?>

<?php 
    include_once "connection/authenticate.php";
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Login</title>
</head>
<body>
    <form method="post" action="<?php echo htmlentities($_SERVER['PHP_SELF']);?>">
    <div class = "box-head"><h1>Dashboard</h1></div>
            <div class="box">
                <div class="box-content"> 
                    Email
                    <input type="email" name="email"/> <br><br>
                    Password
                    <input type="password" name="password"  
                    pattern="^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[!@#$%^&*_=+-]).{8,16}$"
 title = "The password should be of minimum length of eight alpha-numeric characters having at least one lowercase letter, an uppercase letter, special character, and a digit."
                    /><br><br>
                    <input type="hidden" name = "role" value = "<?php $_GET['role']; ?>">
                    <input type="submit" name = "login" value = "login" class = "btn" style = "background-color:green;color:white;">
                </div>
            </div> <!-- End Box -->
            <br>
    </form>
    <div class="box">
                <a href="customer_reg.php">
                    <input type="submit" value = "Register Now!" class = "btn" style = "background-color:green;color:white;">
                </a>
    </div> <!-- End Box -->
</body>
</html>


<?php
$pass = "";$email = "";$role = "";
    if(isset($_POST["login"])){
        $email = $_POST['email'];
        $pass = md5($_POST['password']);
        
        $sql = "SELECT * from USERS WHERE email = '$email' and password = '$pass';";
        $result = mysqli_query($con,$sql);        
        $row=mysqli_fetch_array($result);

        if(!empty($row)){
            $_SESSION['username'] = $row['name'];
            $_SESSION['userid'] = $row['id'];
            if(isset($row['role'])){
                $role = $row['role'];
            }
            if($role == "Customer"){
                header("location:customerDashboard/customerDashboard.php");
            }
            if($role == "Employee"){
                header("location:employeeDashboard/employeeDashboard.php");
            }
        }
    if(($pass == $_SESSION['admin_password']) && ($email == $_SESSION['admin_email'])){
    header("location:adminDashboard/adminDashboard.php");
    }
}
?>