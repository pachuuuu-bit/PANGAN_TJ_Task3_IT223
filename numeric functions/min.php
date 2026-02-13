<?php
include '../../db_connect.php';

$sql = "SELECT MIN(salary) AS MinSalary FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Minimum Salary Using MIN()</h2>";
    echo "<p>Minimum Salary: {$row['MinSalary']}</p>";
} else {
    echo "No data found.";
}

$conn->close();
?>
