<?php
    session_start();
    error_reporting(0);
    $customer_name = $_SESSION['customer_name'];
?>
<table cellpadding=5 style= "border:1px solid white;text-align:center;width:100%;font-weight:bold;background-color:#80c1ec;padding:0;margin:0;border-collapse: collapse;">
        <tr>

            <td style= "border:1px solid white;"><a href="customerDashboard.php?Status=visible">Customer Name</a></td>
            <td style= "border:1px solid white;"><a href="placeOrder.php">Place Orders</a></td>
            <td style= "border:1px solid white;"><a href="../logout.php">Logout</a></td>
        </tr>
</table>


