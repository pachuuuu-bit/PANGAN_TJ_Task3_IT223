<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            last_name,
            department,
            CONCAT_WS(' - ', CONCAT(first_name, ' ', last_name), department) AS FullNameWithDept
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Full Name Connected to Department Using CONCAT_WS()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Department</th>
            <th>Full Name + Department (CONCAT_WS)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['department']}</td>
                <td>{$row['FullNameWithDept']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
