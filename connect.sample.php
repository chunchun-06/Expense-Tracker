<?php
    $con=new mysqli('localhost','your_db_username','your_db_password','your_db_name');
    if(!$con){
        die(mysqli_error($con));
    }
    ?>
