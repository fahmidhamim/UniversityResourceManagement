<?php
include_once('../../service/mysqlcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomNumber = $_POST['roomNumber'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    
    // Delete request entry
    $delete_sql = "DELETE FROM request WHERE roomNumber='$roomNumber' AND date='$date' AND time='$time'";
    if (mysqli_query($link, $delete_sql)) {
        echo "<script>alert('Booking request canceled.'); window.location.href='msgforfac.php';</script>";
    } else {
        echo "<script>alert('Error while canceling!'); window.location.href='viewmanageroom.php';</script>";
    }
}
?>
