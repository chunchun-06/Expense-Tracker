<?php
session_start();
 if (!isset($_SESSION['userid'])) {
    echo "<script>alert('Please login first to add your expense.'); window.location.href='signup.php';</script>";
    exit;
}
 include 'connection.php';
 if(isset($_POST['submit'])){
    $date=$_POST['date'];
    $personname=$_POST['personname'];
    $amount=$_POST['amount'];
    $redate=$_POST['returndate'];
    $userid=$_SESSION['userid'];
    if(empty($redate)){
        $redate = '0000-00-00'; // Default value for return date if not provided
    }
    $sql="INSERT INTO `amounttaken` (date, personname, amount,returndate,user_id) values('$date', '$personname', '$amount','$redate','$userid') ";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location: amtpay.php");
        
    }else{
        die(mysqli_error($con));
    }
 }