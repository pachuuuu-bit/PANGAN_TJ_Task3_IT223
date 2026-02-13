<?php
include '../../db_connect.php';

$sql = "SELECT COUNT(*) AS TotalEmployees FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Total Number of Employees Using COUNT()</h2>";
    echo "<p>Total Employees: {$row['TotalEmployees']}</p>";
} else {
    echo "No data found.";
}

$conn->close();
?>
