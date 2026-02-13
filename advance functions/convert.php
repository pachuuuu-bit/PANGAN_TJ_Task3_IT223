<?php
include '../../db_connect.php';

$sql = "SELECT first_name, CONVERT(salary, CHAR) AS salary_text FROM employees";
$result = $conn->query($sql);

echo "<h2>CONVERT() Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . " - Salary (Text): " . $row['salary_text'] . "<br>";
}
?>
