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

$sql = "INSERT INTO student (FName, SName, Grade, EnrollDate, Attendance, Gender )
VALUES  ('John', 'Doe', '10', '2019-01-31', 'Online', 'Male'),
        ('Kyle', 'Katarn', '10', '2020-01-31', 'F2F', 'Male'),
        ('Barbara', 'Gordon', '11', '2020-01-31', 'Online','Female'),
        ('Adam', 'Warlock', '12', '2021-01-31','F2F','Male'),
        ('Clark', 'Kent', '10', '2021-01-31', 'Online','Male'),
        ('Thor', 'Odinson', '11','2018-01-31', 'Online','Male'),
        ('Gal', 'Gadot', '12', '2019-01-31', 'Online','Female'),
        ('Natasha', 'Romanov', '12', '2019-01-31', 'Online','Female'),
        ('Leonard', 'Nimoy', '11', '2021-01-31', 'F2F', 'Male'),
        ('Makazoloe', 'Mapimpi', '10','2021-01-31', 'F2F', 'Male'),
        ('Austin', 'Smith', '11', '2020-01-31', 'F2F','Male') 
";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>