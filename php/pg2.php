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
$bedroom=$_POST['bedroom'];
$bathroom=$_POST['bathroom'];
$forr=$_POST['available'];
$prof=$_POST['profession'];
$status=$_POST['status'];
$floor=$_POST['floor'];    
$date=$_POST['date'];
$rent=$_POST['rent'];
$stay=$_POST['stay'];
$details=$_POST['details'];
$smoking=$_POST['smoking'];
$overnight=$_POST['overnight'];
$drinking=$_POST['drinking'];
$description=$_POST['description'];
$food=$_POST['food'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO pg_have ( identity,property,area, location, bedroom, bathroom,forrm,profession, status,floor, available, rent,details,stay,smoking,overnight,drinking,food,description, name,mobile,email,time)
VALUES('$person','$property','$area','$location','$bedroom','$bathroom','$forr','$prof','$status','$floor','$date','$rent','$details','$stay','$smoking','$overnight','$drinking','$food','$description', '$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>