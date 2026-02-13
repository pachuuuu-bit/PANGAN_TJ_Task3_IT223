<?php
include '../../db_connect.php';

$sql = "SELECT 
    id,
    CONCAT(first_name, ' ', last_name) AS employee_name,
    hire_date,
    EXTRACT(DAY FROM hire_date) AS days,
    EXTRACT(WEEK FROM hire_date) AS weeks,
    EXTRACT(MONTH FROM hire_date) AS months,
    EXTRACT(YEAR FROM hire_date) AS years
FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>EXTRACT</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>EXTRACTED per DAY</th>
            <th>EXTRACTED per WEEK</th>
            <th>EXTRACTED per MONTH</th>
            <th>EXTRACTED per YEAR</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employee_name']}</td>
                <td>{$row['days']}</td>
                <td>{$row['weeks']}</td>
                <td>{$row['months']}</td>
                <td>{$row['years']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
