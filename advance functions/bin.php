<?php
include '../../db_connect.php';


$sql = "SELECT first_name, salary, BIN(salary) AS salary_binary FROM employees";
$result = $conn->query($sql);

echo "<h2>BIN() Function Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] .
        " | Salary: " . $row['salary'] .
        " | Binary: " . $row['salary_binary'] . "<br>";
}
