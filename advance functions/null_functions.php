<?php
include '../../db_connect.php';

$sql = "SELECT first_name,
        IFNULL(department, 'None') AS dept,
        NULLIF(salary, 50000) AS salary_check
        FROM employees";

$result = $conn->query($sql);

echo "<h2>NULL Functions Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . 
         " | Dept: " . $row['dept'] . 
         " | Salary Check: " . ($row['salary_check'] ?? 'NULL') . "<br>";
}
?>
