<?php
include '../../db_connect.php';

$sql = "SELECT MAX(salary) AS MaxSalary FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    echo "<h2>Maximum Salary Using MAX()</h2>";
    echo "<p>Maximum Salary: {$row['MaxSalary']}</p>";
} else {
    echo "No data found.";
}

$conn->close();
?>
