<?php
$connection = mysqli_connect('localhost', 'root', '', 'zerogila');
if ($connection) {
    echo "✓ Database connection successful";
    mysqli_close($connection);
} else {
    echo "✗ Connection failed: " . mysqli_connect_error();
}
?>
