<?php
    $servername="localhost";
    $username="root";
    $password="mysql";
    $dbname="mydb";
    
    //create Connection
$conn =new mysqli($servername, $username, $password, $dbname);
    //check connection
if($conn->connect_error){
    die("Connectio failed:".$conn->connect_error);

// sql to create table
$sql = "CREATE TABLE MyGuests (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY, 
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table MyGuests created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
    
?>