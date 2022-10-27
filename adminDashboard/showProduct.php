<?php
include "Dash_header.php";
?>

<?php
    include_once "../connection/authenticate.php"; 

    if(isset($_GET['id']))
        $id = $_GET['id'];
    
    $sql = "SELECT * FROM PRODUCTS WHERE id = '$id';";
    $result = mysqli_query($con,$sql);
    while($row=mysqli_fetch_array($result)){
        if($row[0]==$id){
            $name = $row[1];
            $detail = $row[2];
            $price = $row[3];
        }
    }
?>

<div class="show_details">   
    <table align="center" cellpadding="5">
        <th colspan="2">
            <td><h3>Product Details</h3></td>
        </th>
        <tr>
            <td>Name:</td>
            <td><?php echo $name;?></td>
        </tr>
        <tr>
            <td>Detail:</td>
            <td><?php echo $detail;?></td>
        </tr>
        <tr>
            <td>Price:</td>
            <td><?php echo $price;?></td>
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
