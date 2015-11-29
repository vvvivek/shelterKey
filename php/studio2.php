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

$person=$_POST['person'];
$area=$_POST['area'];
$location=$_POST['location'];
$built_area=$_POST['built_area'];
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$period=$_POST['period'];
$parking=$_POST['parking'];
$required=$_POST['required'];
$price=$_POST['price'];
$details=$_POST['requirements'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO sd_have ( identity,area, location,built_area, bedroom, bathroom,period,parking,required, price, requirements, name,mobile,email,time)
VALUES('$person','$area','$location','$built_area','$bedroom','$bathroom','$period','$parking','$required','$price','$details', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>