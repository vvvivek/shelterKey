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
$floor=$_POST['floor'];
$status=$_POST['status'];
$period=$_POST['period'];
$tenant=$_POST['tenant'];
$food=$_POST['food'];
$parking=$_POST['parking'];
$available=$_POST['available'];
$price=$_POST['price'];
$details=$_POST['requirements'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO rental_have ( identity,property,area, location,address,built_area, bedroom, bathroom, floor,status,period,tenants,food,parking,available,rent,requirements, name,mobile,email,time)
VALUES('$identity','$property','$area','$location','$address','$built_area','$bedroom','$bathroom','$floor','$status','$period','$tenant','$food','$parking','$available','$price','$details', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>