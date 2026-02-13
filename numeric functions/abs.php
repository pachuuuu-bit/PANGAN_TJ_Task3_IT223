<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            salary,
            ABS(salary) AS AbsoluteSalary
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Absolute Value of Salary Using ABS()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Salary</th>
            <th>Absolute Salary (ABS)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['AbsoluteSalary']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
