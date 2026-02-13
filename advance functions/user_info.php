<?php
include '../../db_connect.php';

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "
SELECT 
    CURRENT_USER() AS currentUser,
    USER() AS mysqlUser,
    SYSTEM_USER() AS systemUser,
    SESSION_USER() AS sessionUser
";

$result = $conn->query($sql);
$row = $result->fetch_assoc();

echo "<h2>User Information Functions</h2>";
echo "CURRENT_USER(): " . $row['currentUser'] . "<br>";
echo "USER(): " . $row['mysqlUser'] . "<br>";
echo "SYSTEM_USER(): " . $row['systemUser'] . "<br>";
echo "SESSION_USER(): " . $row['sessionUser'] . "<br>";
?>
