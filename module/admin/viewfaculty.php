<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
?>
<!DOCTYPE html>
<html>
<head>
    <title>Faculty List</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
  
</head>
<body>
    <center>
        <h1>Faculty List</h1>
        <input type="text" id="searchBar" placeholder="Search by ID or Name...">
        <br><br>
        <table id="studentList">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Password</th>
                <th>Phone</th>
                <th>Email</th>
                <th>DOB</th>
                <th>Hire Date</th>
                <th>Gender</th>
            </tr>
            <tbody id="facultyBody">
                <?php
                $sql = "SELECT * FROM faculty;";
                $res = mysqli_query($link, $sql);
                while ($row = mysqli_fetch_array($res)) {
                    echo '<tr onclick="showDetails(this)">';
                    echo '<td class="searchable">'.$row['id'].'</td>';
                    echo '<td class="searchable">'.$row['name'].'</td>';
                    echo '<td>'.$row['password'].'</td>';
                    echo '<td>'.$row['phone'].'</td>';
                    echo '<td>'.$row['email'].'</td>';
                    echo '<td>'.$row['dob'].'</td>';
                    echo '<td>'.$row['doj'].'</td>';
                    echo '<td>'.$row['gender'].'</td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
        </table>
    </center>

    <script>
        $(document).ready(function(){
            $("#searchBar").on("keyup", function(){
                var searchText = $(this).val().toLowerCase();
                $("#facultyBody tr").filter(function(){
                    $(this).toggle($(this).find(".searchable").text().toLowerCase().indexOf(searchText) > -1);
                });
            });
        });

        function showDetails(row) {
            var cells = row.getElementsByTagName("td");
            var details = "Faculty ID: " + cells[0].innerText + "\n"
                        + "Name: " + cells[1].innerText + "\n"
                        + "Phone: " + cells[3].innerText + "\n"
                        + "Email: " + cells[4].innerText + "\n"
                        + "DOB: " + cells[5].innerText + "\n"
                        + "Hire Date: " + cells[6].innerText + "\n"
                        + "Gender: " + cells[7].innerText;
            alert(details);
        }
    </script>
</body>
</html>






















<?php
include_once('main.php');
include_once('../../service/mysqlcon.php');
$searchQuery = "";
if (isset($_POST['search'])) {
    $searchQuery = mysqli_real_escape_string($link, $_POST['search']);
    $sql = "SELECT * FROM faculty WHERE id LIKE '%$searchQuery%' OR name LIKE '%$searchQuery%';";
} else {
    $sql = "SELECT * FROM faculty;";
}

$res = mysqli_query($link, $sql);
$string = "";

while ($row = mysqli_fetch_array($res)) {
    $string .= '<tr onclick="selectRow(this)"><td>' . $row['id'] . '</td><td>' . $row['name'] . '</td><td>' . $row['password'] . '</td><td>' . $row['phone'] .
        '</td><td>' . $row['email'] . '</td><td>' . $row['dob'] .
        '</td><td>' . $row['doj'] . '</td><td>' . $row['gender'] . '</td></tr>';
}
?>
<html>
    <head>
     <link rel="stylesheet" href="style.css">
     <style>
div {
    border-radius: 5px;
    background-color: #4DD0E1;
    padding: 20px;
}
input[type=text] {
            width: 20%;
            padding: 10px;
            margin: auto;
            border: 1px solid #ccc;
            border-radius: 5px;
            
        }
        button {
            padding: 10px 15px;
            background-color: #1231aa;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        button:hover {
            background-color: mediumslateblue;
        }
        tr:hover {
            background-color: #f2f2f2;
            cursor: pointer;
        }
</style>
		    
		</head>
    <body>
        <br/>
        <center><h1>Faculty List</h1></center>
        <form method="POST" action="">
            <input type="text" name="search" placeholder="Search by ID or Name" value="<?php echo $searchQuery; ?>" required>
            <button type="submit">Search</button>
        </form>
        <br>
        <center>
            <table border="1" id='studentList'>
                <tr>
                   <th>ID</th>
                    <th>Name</th>
                    <th>Password</th>
                    <th>Phone</th>
                    <th>Email</th>
                    <th>DOB</th>
                    <th>Hire Date</th>
                    <th>Gender</th>                
                </tr>
                <?php echo $string;?>
            </table>
        </center>
		</body>
</html>
