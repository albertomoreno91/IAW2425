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

$sql = "SELECT * FROM USUARIOS";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  // output data of each row
  while($row = mysqli_fetch_assoc($result)) {
    echo "Nombre: " . $row["nombre"]. " - Apellidos: " . $row["apellidos"]. " - Email: " . $row["email"]. "<br>";
  }
} else {
  echo "0 results";
}

mysqli_close($conn);
?> 