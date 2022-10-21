<?php
include "Dash_header.php";
?>

<div class="pro">
    <h3>Enroll a new Employee</h3>    
    <form action="#">
        <label for="name">Name</label>
            <input type="text" name ="name"/> <br><br>
        <label for="email">Email</label>
            <input type="email" name="email"/><br><br>
        <label for="gender">Gender</label>
            <select name="gender" style="width:170.4px;height:22px;">
                <option value="male">Male</option>
                <option value="female">Female</option>
            </select> <br><br>
        <label for="mobileNo">Mobile No:</label>
            <input type="text" name="mobileNo"> <br><br>
        <label for="Address">Details</label>
            <textarea name="details" column="5" row ="1" style="width:170.4px;height:22px;"></textarea><br><br>
        <label for="password">Password</label>
            <input type="password" name="password"> <br><br>
        <input type="submit" class = "btn" value = "Enroll" style = "background-color:#2980b9;position:relative;left:5%;">
    </form>
</div>

<?php
include "footer.php";
?>
