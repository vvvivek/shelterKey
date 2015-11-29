<?php
$servername = "localhost";
$username = "root";
$password = "mysql";
$dbname = "shelter_key";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$identity=$_POST['identity'];
$person=$_POST['person'];
$property=$_POST['property'];
$area=$_POST['area'];
$location=$_POST['location'];
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$status=$_POST['status'];
$rqr=$_POST['required'];
$details=$_POST['details'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO holiday_have ( identity,we_are,property,area, location, bedroom, bathroom, status, required,  details, name,mobile,email,time)
VALUES('$identity','$person','$property','$area','$location','$bedroom','$bathroom','$status','$rqr','$details', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>