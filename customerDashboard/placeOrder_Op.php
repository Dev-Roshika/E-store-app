<?php
    include "customerDash_header.php";
?>


<div class="show_details">   
<table align="center" cellpadding="5">
        <tr>
            <td>Product Name:</td>
            <td></td>
        </tr>
        <tr>
            <td>Employee Name: </td>
            <td>
                <select name="emp_name" >
                    <option value=""></option>
                </select>
            </td>
        </tr>
        <tr>
            <td>Price:</td>
            <td></td>
        </tr>
        <tr>
            <td>
                <button type="button" class ="btn" style="background-color:rgb(19, 201, 19)">Order</button>
            </td>
        </tr>
    </table>
</div>

<?php
 include "../adminDashboard/footer.php";
?>