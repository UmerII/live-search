<?php
$db_host = "localhost";
$db_user = "root";
$db_pass = "";
$db_name = "umer";

// Establishing
$con = mysqli_connect($db_host, $db_user, $db_pass, $db_name) or die(mysql_error());
;
$name = $_GET['name'];
$age = mysqli_real_escape_string($con, $name);
// Constructing
$sql = "SELECT * FROM emp WHERE Name LIKE '$name%'";
// Retreiving
$result = mysqli_query($con, $sql);
// Displaying
if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_array($result)) {
        echo "<p>" . $row["Emp_No"] . "&nbsp" . "&nbsp" . $row["Name"] . "</p>";
    }
} else {
    echo "<p>No matches found</p>";
}
mysqli_close($con);
?>