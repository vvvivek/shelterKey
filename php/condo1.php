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
$we_are=$_POST['person'];
$property=$_POST['property'];
$area=$_POST['area'];
$location=$_POST['location'];
$built_area=$_POST['built_area'];
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$parking=$_POST['parking'];
$period=$_POST['period'];
$required=$_POST['required'];
$price=$_POST['price'];
$requirements=$_POST['requirements'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO condo_want ( identity,person, property , area,location ,built_area ,bedroom ,bathroom,parking ,required,period,price,requirements,name,mobile,email,time)
VALUES('$identity','$we_are','$property','$area','$location','$built_area','$bedroom','$bathroom','$parking','$required','$period','$price','$requirements','$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>