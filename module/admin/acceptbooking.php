<?php
include_once('../../service/mysqlcon.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $roomNumber = $_POST['roomNumber'];
    $facultyID = $_POST['facultyID'];
    $facultyName = $_POST['facultyName'];
    $date = $_POST['date'];
    $time = $_POST['time'];

    // Insert data into bookings table
    $insert_sql = "INSERT INTO bookings (roomNumber, facultyID, facultyName, date, time) 
                   VALUES ('$roomNumber', '$facultyID', '$facultyName', '$date', '$time')";

    if (mysqli_query($link, $insert_sql)) {
        // Delete data from request table after successful insertion
        $delete_sql = "DELETE FROM request WHERE roomNumber='$roomNumber' AND date='$date' AND time='$time'";
        mysqli_query($link, $delete_sql);
        
        echo "<script>alert('Booking Accepted!'); window.location.href='viewmanageroom.php';</script>";
    } else {
        echo "<script>alert('Error while booking!'); window.location.href='viewmanageroom.php';</script>";
    }
}
?>
