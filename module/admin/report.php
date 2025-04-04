<?php
include_once('main.php');
?>
<!DOCTYPE html>
<html>

<head>
    <title>Report</title>
    <link rel="stylesheet" href="style.css">
    <style>
        div {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }
    </style>
</head>

<body>
    <center>
        <h1>Report</h1>
    </center>
    </div>
    </div>
    <form action="#" method="post" enctype="multipart/form-data">
        <div>
            Date:
            <input type="date" name="date" placeholder="YYYY-MM-DD" required>
            Enter Faculty ID:
            <input type="text" name="fid" required>
            Enter Room Number:
            <input type="text" name="rnum" required>
            Report:
            <input type="text" name="report" required>
            <input id="submit" type="submit" name="submit" value="Submit">
        </div>
    </form>
</body>

</html>
<?php
include_once('../../service/mysqlcon.php');
if (!empty($_POST['submit'])) {
    $Date = $_POST['date'];
    $facID = $_POST['fid'];
    $roomNumber = $_POST['rnum'];
    $Report = $_POST['report'];
    $sql = "INSERT INTO report VALUES('$Date','$facID','$roomNumber','$Report');";
    $success = mysqli_query($link, $sql);
    if (!$success) {
        die('Could not enter data: ');
    }
    $message = "Data Entered Successfully";
    echo '<script type="text/javascript">alert("' . $message . '");</script>';
    echo "\n";
}
?>