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
        <form action="connection/authenticate.php" method = "post"> 
                    Name: <span class ="required-field"></span>
                    <input type="text" name="name" required/> <br><br>
                    Email: <span class ="required-field"></span>
                    <input type="email" name="email" required/> <br><br>
                    Gender: <span class ="required-field"></span>
                    <select name="gender" style ="width:180px;" required>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br><br>
                    Address: <span class ="required-field"></span>
                    <textarea name="addresss"  cols="20" rows="1" required></textarea><br><br>
                    Password: <span class ="required-field"></span>
                    <input type="password" name="password" required/><br><br>
                    <input type="submit" value = "Sign Up" class = "btn" style = "background-color:green;color:white;">
        </form>
    </div>
</body>
</html>