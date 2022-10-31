<?php
include "Dash_header.php";
?>

<?php
    include_once "../connection/authenticate.php"; 
    $id = -1;
    if(isset($_GET['id']))
        $id = $_GET['id'];
    
    $sql = "SELECT * FROM USERS WHERE id = '$id';";
    $result = mysqli_query($con,$sql);
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

<div class="product_details">   
<table align="center" cellpadding="5">
        <th colspan="2">
            <td><h3>Details of Employee</h3></td>
        </th>
        <tr>
            <td>Name:</td>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <td>Email:</td>
            <td><?php echo $email;?></td>
        </tr>
        <tr>
            <td>Gender:</td>
            <td><?php echo $gender;?></td>
        </tr>
        <tr>
            <td>Address:</td>
            <td><?php echo $address;?></td>
        </tr>
        <tr>
            <td>Mobile No:</td>
            <td><?php echo $mobile;?></td>
        </tr>
    </table>
</div>


<?php  
if(!$result){
?>
    <script type = "text/javascript">
        alert("Error. Check again...");
    </script>

<?php
} else{
?>
    <script type = "text/javascript">
        alert("Loading...");
    </script>

<?php
} 
include "footer.php";
?>
