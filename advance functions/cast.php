<?php
include '../../db_connect.php';

$sql = "SELECT first_name, CAST(salary AS SIGNED) AS salary_int FROM employees";
$result = $conn->query($sql);

echo "<h2>CAST() Function Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . 
         " | Salary (Integer): " . $row['salary_int'] . "<br>";
}
?>
