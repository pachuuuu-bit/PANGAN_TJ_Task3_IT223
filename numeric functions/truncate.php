<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            salary,
            TRUNCATE(salary, 0) AS TruncatedSalary,
            TRUNCATE(salary, 2) AS TruncatedTwoDecimals
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Truncate Salary Using TRUNCATE()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Salary</th>
            <th>TRUNCATE(salary,0)</th>
            <th>TRUNCATE(salary,2)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['TruncatedSalary']}</td>
                <td>{$row['TruncatedTwoDecimals']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
