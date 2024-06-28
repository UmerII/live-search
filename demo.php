<?php
$con = mysqli_connect("localhost","root","","umer") or die(mysqli_error());;
$name = $_GET['name'];
$age = mysqli_real_escape_string($con,$name);

$sql = "SELECT * FROM emp WHERE  Name LIKE '$name%'";

$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0) {
     
    while($row = mysqli_fetch_array($result)){
        echo "<P>" . $row["Emp_No"] ."&nbsp" . "&nbsp" . $row["Name"] . "</p>" ;

}

   }   else{
        echo "<p> No matches found</p>";

    }
    mysqli_close($con)

?>