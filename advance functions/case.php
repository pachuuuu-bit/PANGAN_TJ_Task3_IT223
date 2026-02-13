<?php
include '../../db_connect.php';

$sql = "
SELECT first_name, salary,
CASE
    WHEN salary >= 60000 THEN 'High Salary'
    WHEN salary >= 50000 THEN 'Medium Salary'
    ELSE 'Low Salary'
END AS salary_level
FROM employees
";

$result = $conn->query($sql);

echo "<h2>CASE Function Output</h2>";

while ($row = $result->fetch_assoc()) {
    echo $row['first_name'] . 
         " | Salary: " . $row['salary'] . 
         " | Level: " . $row['salary_level'] . "<br>";
}
?>
