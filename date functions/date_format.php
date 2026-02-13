<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            CONCAT(first_name, ' ', last_name) AS employee_name,
    hire_date,
    DATE_FORMAT(hire_date ,'%Y-%m-%d') AS standard_format,
    DATE_FORMAT(hire_date ,'%W, %M %d, %Y') AS long_format,
    DATE_FORMAT(hire_date ,'%b %d, %Y') AS short_format
FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Displaying current date.</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Employee Name</th>
            <th> STANDARD</th>
            <th> LONG </th>
            <th> SHORT </th>
            
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employee_name']}</td>
                <td>{$row['standard_format']}</td>
                <td>{$row['long_format']}</td>
                <td>{$row['short_format']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
