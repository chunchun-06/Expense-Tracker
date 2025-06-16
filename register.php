<?php
session_start();
if (isset($_SESSION['userid'])) {
    header("Location: index.php");
    exit;
}
 include 'connection.php';
 if(isset($_POST['signUp'])){
    $fname=$_POST['fname'];
    $lname=$_POST['lname']; 
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password); // Hashing the password for security
    $checkEmailQuery = "SELECT * FROM `users` WHERE email='$email'";
    $checkEmailResult = mysqli_query($con, $checkEmailQuery);
    if(mysqli_num_rows($checkEmailResult) > 0){
        echo "<script>alert('Email already registered. Please use a different email.'); window.location.href='signup.php';</script>";
        exit;
    }
    else{
    $sql="INSERT INTO `users` (fname, lname, email, password) values('$fname', '$lname', '$email', '$password') ";
    $result=mysqli_query($con,$sql);
    if($result){
        header("Location: signup.php");
        
    }else{
        die(mysqli_error($con));
    }
}
 }


 if(isset($_POST['signIn'])){
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password); 
    $sql="SELECT * FROM `users` WHERE email='$email' AND password='$password'";
    $result=mysqli_query($con,$sql);
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);  //one user row as an associative array
        $_SESSION['userid'] = $row['id'];     
        header("Location: index.php");
    }else{
        echo "<script>alert('Invalid email or password. Please try again.'); window.location.href='signup.php';</script>";
    }
 }
 
 ?>