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

$sql = "INSERT INTO teacher (FName, SName, Gender, SubjectT)
VALUES  ('Ben', 'Kenobi', 'Male', 'Maths'),
        ('Bruce', 'Banner',  'Male', 'Science'),
        ('Virat', 'Kohli', 'Male', 'Afrikaans'),
        ('Martha', 'Wayne', 'Female', 'English'),
        ('Caitlin', 'Snow', 'Female' , 'IT')

";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>