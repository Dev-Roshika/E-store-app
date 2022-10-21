<?php
include "Dash_header.php";
?>

<style>
    table,td,th{
        border-collapse:collapse;
        border:1px solid black;
    }
    .btn{
        color: black;
        border:none;
        border-radius: 15px;
        font-weight: bold;
        padding: 10px 20px;
    }
</style>

<button type="button" class = "btn" style = "margin-left:5%;margin-top:20px;background-color: rgb(19, 201, 19);">Enroll New Employee</button>
<div class="tableContent"> 
<table cellpadding=5 style="width:90%;margin-top:20px;position:relative;left:5%;text-align: center;">
    <th>No</th><th>Name</th><th>Detail</th><th>Price</th><th>Actions</th>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>
            <button type="button" class = "btn" style="background-color:rgb(105, 143, 247)">Show</button>
            <button type="button" class = "btn" style="background-color:rgb(102, 81, 243)">Edit</button>
            <button type="button" class = "btn" style="background-color:rgb(243, 81, 81)">Delete</button>
        </td>
    </tr>
</table>
</div>
<?php
include "footer.php";
?>