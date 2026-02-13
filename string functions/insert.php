<?php
include '../../db_connect.php';


if (isset($_POST['submit'])) {
    $first_name = $_POST['first_name'];
    $last_name  = $_POST['last_name'];
    $department = $_POST['department'];
    $salary     = $_POST['salary'];
    $hire_date  = $_POST['hire_date'];

    
    $sql = "INSERT INTO employees (first_name, last_name, department, salary, hire_date)
            VALUES ('$first_name', '$last_name', '$department', '$salary', '$hire_date')";

    if ($conn->query($sql) === TRUE) {
        echo "<p style='color:green;'>New employee added successfully!</p>";
    } else {
        echo "<p style='color:red;'>Error: " . $conn->error . "</p>";
    }
}
?>

<h2>Insert New Employee</h2>
<form method="POST" action="">
    <label>First Name:</label><br>
    <input type="text" name="first_name" required><br><br>

    <label>Last Name:</label><br>
    <input type="text" name="last_name" required><br><br>

    <label>Department:</label><br>
    <input type="text" name="department" required><br><br>

    <label>Salary:</label><br>
    <input type="number" step="0.01" name="salary" required><br><br>

    <label>Hire Date:</label><br>
    <input type="date" name="hire_date" required><br><br>

    <input type="submit" name="submit" value="Add Employee">
</form>
