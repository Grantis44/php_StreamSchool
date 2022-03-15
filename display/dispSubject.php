<?php
include 'mydbCon.php';
$query="select * from subjects"; // Fetch all the data from the table student
$result=mysqli_query($dbCon,$query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Code to Retrieve Data from MySQL Database and Display in html Table</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-2">
    <div class="row">
        <div class="col-md-12">
            <div class="page-header">
                <h2>Fetch Data From Database in PHP and Display in HTML Table</h2>
            </div>
            <table class="table">
              <thead>
                <tr>
                  <th scope="col">Subject_ID</th>
                  <th scope="col">SbjName</th>
                </tr>
              </thead>
              <tbody>
                <?php if ($result->num_rows > 0): ?>
                <?php while($array=mysqli_fetch_row($result)): ?>
                <tr>
                    <th scope="row"><?php echo $array[0];?></th>
                    <td><?php echo $array[1];?></td>
                </tr>
                <?php endwhile; ?>
                <?php else: ?>
                <tr>
                   <td colspan="3" rowspan="1" headers="">No Data Found</td>
                </tr>
                <?php endif; ?>
                <?php mysqli_free_result($result); ?>
              </tbody>
            </table>
        </div>
    </div>        
</div>
</body>
</html>