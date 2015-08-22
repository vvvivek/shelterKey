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
$house=$_POST['house'];
$built_area=$_POST['built_area'];
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$status=$_POST['status'];
$possession=$_POST['possession'];
$parking=$_POST['parking'];
$date=$_POST['required'];
$price=$_POST['price'];
$details=$_POST['requirements'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO outright_want ( identity,property,area, location,house_type,Built_area, bedroom, bathroom, status,possession,parking, required, price,requirements, name,mobile,email,call_time)
VALUES('$identity','$property','$area','$location','$house','$built_area','$bedroom','$bathroom','$status','$possession','$parking','$date','$price','$details', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>