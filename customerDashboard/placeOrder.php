<?php
include "customerDash_header.php";
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

<div class="tableContent"> 
<table cellpadding=5  style="width:90%;margin-top:20px;position:relative;left:5%;text-align: center;">
    <th>No</th><th>Name</th><th>Detail</th><th>Price</th><th>Actions</th>
    <tr>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td>1</td>
        <td colspan="2">
            <button type="button" class = "btn" style="background-color: rgb(19, 201, 19)">Place order</button>
        </td>
    </tr>
</table>
</div>
<?php
include "../adminDashboard/footer.php";
?>