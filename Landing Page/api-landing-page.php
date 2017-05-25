<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "graduate_recruit_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * from degree_details";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["graduate_id"]. " - Name: " . $row["degree_type"] . "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>