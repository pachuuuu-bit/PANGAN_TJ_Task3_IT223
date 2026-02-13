<?php
include '../../db_connect.php';

$sql = "SELECT first_name, COALESCE(department, 'Not Assigned') AS dept FROM employees";
$result = $conn->query($sql);

echo "<h2>COALESCE() Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . " - " . $row['dept'] . "<br>";
}
?>
