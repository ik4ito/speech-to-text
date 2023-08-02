<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "speech2text";


// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


echo "<br>";
$speech = $_POST["speech"];
    $sql = "insert into speechtable (speech)
    values('$speech')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>