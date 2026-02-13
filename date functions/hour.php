<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            hire_date,
            HOUR(hire_date) AS hire_hour
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Hour representation.</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th>Hours</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['hire_date']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
