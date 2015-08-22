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

$person=$_POST['identity'];
$tenant=$_POST['tenant'];
$flat=$_POST['flat'];
$room=$_POST['room'];
$stay=$_POST['stay'];
$furnish=$_POST['furnish'];
$price=$_POST['price'];
$deposit=$_POST['deposit'];
$date=$_POST['date'];
$smoking=$_POST['smoking'];
$overnight=$_POST['overnight'];
$drinking=$_POST['drinking'];
$food=$_POST['food'];
$landmark=$_POST['landmark'];
$description=$_POST['description'];
$address=$_POST['address'];
$name=$_POST['name'];
$mobile=$_POST['mobile'];
$email=$_POST['email'];
$time=$_POST['time'];
$sql = "INSERT INTO flatmate_have ( identity,should,room, flat ,furnishing, price, deposit, available,stay, address,landmark,smoking,overnight,drinking,food,description,name,mobile,email,time)
VALUES('$person','$tenant','$room','$flat','$furnish','$price','$deposit','$date','$stay','$address','$landmark', '$smoking','$overnight','$drinking','$food','$description','$name', '$mobile','$email','$time')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>