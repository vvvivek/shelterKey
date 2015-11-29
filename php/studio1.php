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
$built_area=$_POST['built_area'];
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$status=$_POST['status'];
$period=$_POST['period'];
$parking=$_POST['parking'];
$required=$_POST['required'];
$fare=$_POST['price'];
$deposit=$_POST['deposit'];
$tenant=$_POST['tenant'];
$food=$_POST['food'];
$details=$_POST['requirements'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO sd_want ( identity,property,area, location,built_area, bedroom, bathroom, furnished,period,parking,required, fare, deposit,tenant,food, requirements, name,mobile,email,time)
VALUES('$identity','$property','$area','$location','$built_area','$bedroom','$bathroom','$status','$period','$parking','$required','$fare','$deposit','$tenant','$food','$details', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>