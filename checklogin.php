<?php
session_start();
if (!isset($_SESSION['userid'])) {
    echo "<script>alert('Please login first to view your expenses.'); window.location.href='signup.php';</script>";
    exit;
}
?>