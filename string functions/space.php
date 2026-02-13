<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            CONCAT(SPACE(5), first_name) AS SpacedName
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Add Spaces Before First Name Using SPACE()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Spaced Name (SPACE)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>'{$row['first_name']}'</td>
                <td>'{$row['SpacedName']}'</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
