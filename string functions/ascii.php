<?php
include '../../db_connect.php';

$sql = "SELECT first_name, ASCII(first_name) AS NumCodeOfFirstChar FROM employees";
$result = $conn->query($sql);


if ($result->num_rows > 0) {
    echo "<h2>ASCII Values of First Character of First Names</h2>";
    echo "<table border='1' cellpadding='8'>";
    echo "<tr><th>First Name</th><th>ASCII Value</th></tr>";

  
    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['first_name']}</td>
                <td>{$row['NumCodeOfFirstChar']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No records found.";
}

$conn->close();
?>
