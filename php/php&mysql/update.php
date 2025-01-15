<?php
$servername = "***";
$username = "***";
$password = "***";
$dbname = "***";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
//update
$sql = "UPDATE USUARIOS SET apellidos = 'Padial Naranjo' WHERE nombre = 'Samuel'";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 