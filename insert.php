<?php
session_start();
if (!isset($_SESSION['userid'])) {
    echo "<script>alert('Please login first to add your expense.'); window.location.href='signup.php';</script>";
    exit;
}

include 'connection.php';

if(isset($_POST['submit'])){
    $date = $_POST['date'];
    $name = $_POST['name'];
    $amount = $_POST['amount'];
    $userid = $_SESSION['userid'];

    $sql = "INSERT INTO `data` (date, name, amount, user_id) VALUES ('$date', '$name', '$amount', '$userid')";
    $result = mysqli_query($con, $sql);

    if($result){
        header("Location: index.php");
        exit;
    } else {
        die("Insert failed: " . mysqli_error($con));
    }
}

?>
