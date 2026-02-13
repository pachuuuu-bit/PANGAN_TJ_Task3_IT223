<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            CONCAT(first_name, ' ', last_name) AS employee_name,
            hire_date,
            CURRENT_TIMESTAMP() AS result
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Current timestamp.</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th> Output</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employee_name']}</td>
                <td>{$row['result']}</td>
                
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
