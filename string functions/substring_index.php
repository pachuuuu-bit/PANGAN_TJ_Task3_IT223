<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            SUBSTRING_INDEX(first_name, 'a', 1) AS SubstringBeforeA
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Substring Before First 'a' Using SUBSTRING_INDEX()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Substring Before 'a' (SUBSTRING_INDEX)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['SubstringBeforeA']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
