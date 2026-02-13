<?php
include '../../db_connect.php';

$sql = "SELECT 
    id,
    CONCAT(first_name, ' ', last_name) AS employee_name,
    hire_date,
    LAST_DAY(hire_date) AS last_day_hired
FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>LAST_DAY representation.</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>LAST DAY </th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employee_name']}</td>
                <td>{$row['last_day_hired']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
