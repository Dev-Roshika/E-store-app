<?php
include "Dash_header.php";
?>

<style>
    .pro{
        position: relative;
        left: 40%;
        margin: 40px 0;
    }
    .pro h3{
        display: flex;
        align-items: center;
    }
    .btn{
        color: white;
        border:none;
        border-radius: 10px;
        font-weight: bold;
        padding: 10px 20px;
    }
</style>

<div class="pro">
    <h3>Edit a product</h3>    
    <form action="#">
        <label for="name">Name</label>
            <input type="text" name ="name"/> <br><br>
        <label for="details">Details</label>
            <textarea name="details" column="5" row ="4"></textarea><br><br>
        <label for="price">Price</label>
            <input type="text" name="price"/><br><br>
        <input type="submit" class = "btn" value = "Update" style = "background-color:#2980b9;position:relative;left:5%;">
    </form>
</div>

<?php
include "footer.php";
?>