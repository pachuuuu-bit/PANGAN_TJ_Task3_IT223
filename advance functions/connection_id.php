<?php
include '../../db_connect.php';

$result = $conn->query("SELECT CONNECTION_ID() AS conn_id");
$row = $result->fetch_assoc();

echo "<h2>CONNECTION_ID()</h2>";
echo "Connection ID: " . $row['conn_id'];
?>
