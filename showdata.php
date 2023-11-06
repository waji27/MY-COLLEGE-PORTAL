<?php

$connection = mysqli_connect("localhost", "root", "", "portal");

if (!$connection) {
    die("Database connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM users WHERE username = '1st'";
$result = mysqli_query($connection, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($connection));
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Filtered Attendance Data</title>
</head>
<body>
    <h1>Filtered Attendance Data</h1>

    <?php
    echo "<table>";
    echo "<tr><th>Student Name</th><th>Attendance Status</th></tr>";

    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr><td>{$row['username']}</td></tr>";
    }

    echo "</table>";
    ?>

</body>
</html>
