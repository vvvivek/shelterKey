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
$property=$_POST['property'];
$area=$_POST['area'];
$location=$_POST['location'];
$address=$_POST['address'];
$built_area=$_POST['built_area'];
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$status=$_POST['status'];
$floor=$_POST['flr'];
$fare=$_POST['fare'];
$details=$_POST['details'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$call=$_POST['calltime'];

$sql = "INSERT INTO holiday_want(identity,property, area, location, address, built_area, bedroom, bathroom, status, floor, fare, details, name, mobile, email, time_call) VALUES ( '$identity' ,'$property', '$area', '$location', '$address', '$built_area', '$bedroom', '$bathroom','$status','$floor','$fare','$details', '$name', '$mobile','$email','$call')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>