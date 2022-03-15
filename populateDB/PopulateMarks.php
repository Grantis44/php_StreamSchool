<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "streamschool_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO marks (Student_ID, Teacher_ID, Subject_ID, Result)
VALUES  ('34', '3', '3' , RAND()*(95-30)+30),
        ('37', '2', '2' , RAND()*(95-30)+30),
        ('37', '1', '1' , RAND()*(95-30)+30),
        ('40', '3', '3' , RAND()*(95-30)+30),
        ('39', '4', '4' , RAND()*(95-30)+30),
        ('39', '5', '5' , RAND()*(95-30)+30),
        ('39', '3', '3' , RAND()*(95-30)+30),
        ('44', '3', '3' , RAND()*(95-30)+30),
        ('44', '1', '1' , RAND()*(95-30)+30),
        ('35', '2', '2' , RAND()*(95-30)+30),
        ('41', '3', '3' , RAND()*(95-30)+30),
        ('43', '1', '1' , RAND()*(95-30)+30),
        ('43', '5', '5' , RAND()*(95-30)+30),
        ('38', '2', '2' , RAND()*(95-30)+30)

";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>