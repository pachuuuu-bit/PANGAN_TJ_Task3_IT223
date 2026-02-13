<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            CONCAT(first_name, ' ', last_name) AS employee_name,
            hire_date,
            TIMEDIFF(NOW(), hire_date) AS timediff_example
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Timediff.</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th> Employee Name </th>
            <th> Output </th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employee_name']}</td>
                <td>{$row['timediff_example']}</td>
                
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
