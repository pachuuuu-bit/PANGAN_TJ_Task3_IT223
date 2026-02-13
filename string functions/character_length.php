<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            last_name,
            CHAR_LENGTH(last_name) AS NameLength
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Character Length of Each Employee's Last Name</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>Last Name</th>
            <th>CHAR_LENGTH(Last Name)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['last_name']}</td>
                <td>{$row['NameLength']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
