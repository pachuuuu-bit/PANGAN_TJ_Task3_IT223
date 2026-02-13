<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            STRCMP(first_name, 'John') AS CompareWithJohn
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Compare First Name with 'John' Using STRCMP()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>STRCMP(first_name, 'John')</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['CompareWithJohn']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
