<?php include_once "connection/authenticate.php"; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Customer Registration</title>
</head>
<body>
    <div class = "box-head"><h1>Customer Registration</h1></div>
    <div class="box">
        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?>" method = "post"> 
                    Name: <span class ="required-field"></span>
                    <input type="text" name="name" required/> <br><br>
                    Email: <span class ="required-field"></span>
                    <input type="email" name="email" title = "type your correct email address" required/> <br><br>
                    Gender: <span class ="required-field"></span>
                    <select name="gender" style ="width:180px;" required>
                        <option value="">- select -</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br><br>
                    Address: <span class ="required-field"></span>
                    <textarea name="address"  cols="20" rows="1" required></textarea><br><br>
                    Mobile No: <span class ="required-field"></span>
                    <input type="tel" name="mobile_no" placeholder="077123456" pattern="[0-9]{10}" title = "Only 10 digits are allowed" required/> <br><br>
                    Password: <span class ="required-field"></span>
                    <input type="password" name="password" required/><br><br>
                    <input type="submit" value = "Sign Up" name = "SignUp" class = "btn" style = "background-color:green;color:white;">
        </form>
    </div>
</body>
</html>

<?php
    if(isset($_POST['SignUp'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $address = $_POST['address'];
        $mobile_no = $_POST['mobile_no'];
        $password = md5($_POST['password']);

        $role = "Customer";
    
    $sql = "INSERT INTO USERS  (name,email,gender,address,mobile_no,password,role) VALUES('$name','$email','$gender','$address','$mobile_no','$password','$role')";
    $result = mysqli_query($con,$sql);
    if($result){
        echo  "<script>";
        echo "alert('Data inserted successfully.')";
        echo  "</script>";
        header("Location:index.php?role=$role");
    }
    else {
        echo  "<script>";
        echo "alert('Data is not inserted successfully.')";
        echo  "</script>";
        header("Location:index.php");
    }
    }
?>