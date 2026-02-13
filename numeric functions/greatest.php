<?php
include '../../db_connect.php';

$sql = "SELECT 
            id,
            first_name,
            salary,
            GREATEST(salary, id * 1000, 10000) AS GreatestValue
        FROM employees";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<h2>Find the Greatest Value Using GREATEST()</h2>";

    echo "<table border='1' cellpadding='8' cellspacing='0'>";
    echo "<tr>
            <th>ID</th>
            <th>First Name</th>
            <th>Salary</th>
            <th>Greatest(salary, id*1000, 10000)</th>
          </tr>";

    while ($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['first_name']}</td>
                <td>{$row['salary']}</td>
                <td>{$row['GreatestValue']}</td>
              </tr>";
    }

    echo "</table>";
} else {
    echo "No data found.";
}

$conn->close();
?>
