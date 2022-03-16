<?php
//setting header to json
header('Content-Type: application/json');

include 'mydbCon.php';

//query to get data from the table
$query = sprintf("SELECT Student_ID, result FROM marks ORDER BY Student_ID");

//execute query
$result = $mysqli->query($query);

//loop through the returned data
$data = array();
foreach ($result as $row) {
  $data[] = $row;
}

//free memory associated with result
$result->close();

//close connection
$mysqli->close();

//now print the data
print json_encode($data);





/*"SELECT student.Student_ID,student.FName,marks.Result FROM marks 
JOIN student On marks.StudentID = student.StudentID
ORDER BY Student_ID"*/
