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
$property=$_POST['property'];
$area=$_POST['area'];
$location=$_POST['location'];
$built_area=$_POST['built_area'];
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$status=$_POST['status'];
$parking=$_POST['parking'];
$date=$_POST['required'];
$price=$_POST['price'];
$details=$_POST['requirements'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO service_want ( identity,property,area, location,built_area, bedroom, bathroom, furnished, parking,required,price , requirements, name,mobile,email,time)
VALUES('$person','$property','$area','$location','$built_area','$bedroom','$bathroom','$status','$parking','$date','$details', '$price', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>