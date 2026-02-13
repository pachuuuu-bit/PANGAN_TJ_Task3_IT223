<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            last_name,
            LOWER(last_name) AS LowerLastName
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Last Name in Lowercase Using LOWER()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>Lowercase Last Name (LOWER)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['LowerLastName']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
