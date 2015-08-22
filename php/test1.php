<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "db_vivek";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$fname=$_POST['fname'];
$lname=$_POST['lname'];
$mobile=$_POST['mobile'];
$sql = "INSERT INTO sample (fname, lname, mobile)
VALUES ('$fname', '$lname', '$mobile')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>