<?php
include '../../db_connect.php';

$sql = "SELECT first_name, salary,
        IF(salary >= 60000, 'High Salary', 'Low Salary') AS salary_level
        FROM employees";

$result = $conn->query($sql);

echo "<h2>IF() Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . 
         " | " . $row['salary'] . 
         " | " . $row['salary_level'] . "<br>";
}
?>
