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
$tenant=$_POST['tenant'];
$location=$_POST['location'];
$room=$_POST['room'];
$stay=$_POST['stay'];
$furnish=$_POST['furnish'];
$rent=$_POST['rent'];
$deposit=$_POST['deposit'];
$moving=$_POST['moving'];
$smoking=$_POST['smoking'];
$overnight=$_POST['overnight'];
$drinking=$_POST['drinking'];
$food=$_POST['food'];
$other=$_POST['other'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO flatmate_want ( identity,tenant,location, room,stay,furnishing,rent,deposit,moving_date,smoking,overnight,drinking,food_habit,other_details,name,mobile,email,time)
VALUES('$person','$tenant','$location','$room','$stay','$furnish','$rent','$deposit','$moving','$smoking','$overnight','$drinking','$food','$other','$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>