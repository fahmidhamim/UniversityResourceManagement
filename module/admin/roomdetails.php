<?php
include_once('../../service/mysqlcon.php');

if(isset($_GET['id'])){
    $room_id = $_GET['id'];
    $sql = "SELECT * FROM room WHERE id='$room_id'";
    $res = mysqli_query($link, $sql);
    $row = mysqli_fetch_array($res);
} else {
    die("Room ID not provided.");
}
?>

<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <h2>Room Details</h2>
        <table border="1">
            <tr><th>Room Number</th><td><?php echo $row['number']; ?></td></tr>
            <tr><th>Room Type</th><td><?php echo $row['type']; ?></td></tr>
            <tr><th>Location</th><td><?php echo $row['location']; ?></td></tr>
        </table>
        <br>
        <a href="deleteroom.php?id=<?php echo $room_id; ?>"><button>Delete</button></a>
        <a href="editroom.php?id=<?php echo $room_id; ?>"><button>Edit Room Details</button></a>
    </center>
</body>
</html>
