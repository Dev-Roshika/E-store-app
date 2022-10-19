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
                <div class="box-content"> 
                    Name:
                    <input type="text" name="name" /> <br><br>
                    Email:
                    <input type="email" name="email" /> <br><br>
                    Gender:
                    <select name="gender" style ="width:180px;">
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select><br><br>
                    Address:
                    <textarea name="addresss"  cols="20" rows="1"></textarea><br><br>
                    Password:
                    <input type="password" name="email"   /><br><br>
                    <input type="submit" value = "Sign Up">
                </div>
            </div>
</body>
</html>