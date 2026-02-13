<?php
include '../../db_connect.php';

$sql = "SELECT first_name, department FROM employees WHERE BINARY department = 'IT'";
$result = $conn->query($sql);

echo "<h2>BINARY (Case-Sensitive) Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . " - " . $row['department'] . "<br>";
}
?>
