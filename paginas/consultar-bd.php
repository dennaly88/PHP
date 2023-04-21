

<?php

$servername = "localhost";
$username = "danny";
$password = "Danny16029567*";


$conn = new mysqli($servername, $username, $password);


if ($conn->connect_error) {
    die("Fallo de Conexión: " . $conn->connect_error);
} 

$result = $dbo->query("SHOW DATABASES");
while ($row = $result->fetch(PDO::FETCH_NUM)) {
echo $row[0]."<br>";
}





$conn->close();

?>




