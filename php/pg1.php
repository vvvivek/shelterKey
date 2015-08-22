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
$pg=$_POST['pg'];
$status=$_POST['status'];
$date=$_POST['date'];
$price=$_POST['price'];
$stay=$_POST['stay'];
$smoking=$_POST['smoking'];
$overnight=$_POST['overnight'];
$drinking=$_POST['drinking'];
$food=$_POST['food'];
$details=$_POST['details'];
$description=$_POST['description'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO pg_want ( identity,property,area, location,pg, status, required,price,  details,stay, smoking,overnight,drinking,food,description, name,mobile,email,time)
VALUES('$person','$property','$area','$location','$pg','$status','$date','$price','$details','$stay','$smoking','$overnight','$drinking','$food','$description', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>