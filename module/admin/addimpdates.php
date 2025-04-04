<?php
    include_once('main.php');
?>
<!DOCTYPE html>
<html>
<head><title>Add Dates</title>
 <link rel="stylesheet" href="style.css">
 <style>
 div {
            width: 50%;
            border-radius: 5px;
            background-color:darkseagreen;
            padding: 20px;
            margin: auto;
        }

        input[type=submit] {
            width: 20%;
            background-color:darkblue;
            color:azure;
            padding: 14px 20px;
            margin: auto;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: block;
            text-align: center;
        }

        input[type=submit]:hover {
            background-color:darkslateblue;
            transition: background-color 0.8s;
        }

</style>
</head>
<body>
   <center> <h1>Add Important Dates</h1> </center>
    </div>
    </div>
<form action="#" method="post" enctype="multipart/form-data" onsubmit="return(validate());">
    <div>
    Enter Faculty ID:
    <input type="text" placeholder="Enter Faculty ID" name="fid" required>
    Enter Date: 
    <input type="date" name="date" required>
   	Enter Subject:
    <input type="text" placeholder="Write Something" name="subject" required>

    <br><br>
    <input id="submit" type="submit"  name="submit" value="Submit">
</div>
</form>
</body>
</html>
<?php
include_once ('../../service/mysqlcon.php');
if(!empty($_POST['submit'])){
    $FacID = $_POST['fid'];
	$Date = $_POST['date'];
	$Subject = $_POST['subject'];
    $sql = "INSERT INTO importantdates VALUES('$FacID','$Date','$Subject');";
    $success = mysqli_query($link,$sql);
    if(!$success) {
        die('Could not enter data: ');
    }
    $message= "Data Entered Successfully";
    echo '<script type="text/javascript">alert("'.$message.'");</script>';
    echo "\n";
}
?>
