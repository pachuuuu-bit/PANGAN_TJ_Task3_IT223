<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            CONCAT(first_name, ' ', last_name) AS employee_name,
    '09:00:00' AS start_time,
    ADDTIME('09:00:00', '01:00:00') AS plus_1_hour,
    ADDTIME('09:00:00', '02:00:00') AS plus_2_hours,
    ADDTIME('09:00:00', '03:00:00') AS plus_3_hours,
    ADDTIME('09:00:00', '08:00:00') AS plus_8_hours
FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Adding time.</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th> Fullname </th>
            <th>PLUS 1 Hours</th>
            <th>PLUS 2 Hours</th>
            <th>PLUS 3 Hours</th>
            <th>PLUS 8 Hours</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['employee_name']}</td>
                <td>{$row['plus_1_hour']}</td>
                <td>{$row['plus_2_hours']}</td>
                <td>{$row['plus_3_hours']}</td>
                <td>{$row['plus_8_hours']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
