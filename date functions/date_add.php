<?php
include '../../db_connect.php';

$sql = "SELECT 
    id,
    CONCAT(first_name, ' ', last_name) AS employee_name,
    hire_date,
    DATE_ADD(hire_date, INTERVAL 7 DAY) AS days,
    DATE_ADD(hire_date, INTERVAL 5 WEEK) AS weeks,
    DATE_ADD(hire_date, INTERVAL 3 MONTH) AS months,
    DATE_ADD(hire_date, INTERVAL 5 YEAR) AS years
FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>ADDED DATE of HIRING DAY using DATE_ADD()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>ADD DATE per DAY</th>
            <th>ADD DATE per WEEK</th>
            <th>ADD DATE per MONTH</th>
            <th>ADD DATE per YEAR</th>
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
