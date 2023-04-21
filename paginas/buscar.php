


<?php

$servername = "localhost";
$database = "curso-php";
$username = "danny";
$password = "Danny16029567*";

$conn = mysqli_connect($servername, $username, $password, $database);


$query = "DELETE FROM nombreTabla ";

if ($result = $mysqli->query($query)) {

    
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["col1"];
        $field2name = $row["col2"];
        $field3name = $row["col3"];
        $field4name = $row["col4"];
        $field5name = $row["col5"];
    }

    $result->free();
}



?>










