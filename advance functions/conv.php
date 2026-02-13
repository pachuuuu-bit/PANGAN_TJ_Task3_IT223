<?php
include '../../db_connect.php';

$sql = "SELECT first_name, salary, CONV(salary, 10, 2) AS binary_salary FROM employees";
$result = $conn->query($sql);

echo "<h2>CONV() Output (Decimal to Binary)</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . 
         " | Salary: " . $row['salary'] . 
         " | Binary: " . $row['binary_salary'] . "<br>";
}
?>
