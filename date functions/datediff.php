<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            CONCAT(first_name, ' ', last_name) AS employee_name,
    hire_date,
    CURDATE() AS today,
    DATEDIFF(CURDATE(), hire_date) AS days_since_hire
FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>DATEDIFF.</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th> Employee Name </th>
            <th> Current Day</th>
            <th> Days since Hired</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employee_name']}</td>
                <td>{$row['today']}</td>
                <td>{$row['days_since_hire']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
