<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c_num = $_POST['c_num'];
    echo "<h3>SQL Query:</h3>";
    echo "SELECT * FROM sections WHERE course_number = '$c_num';<br>";

    // Fake data for testing
    echo "<h3>Fake Data Output:</h3>";
    echo "Section: 1, Instructor: Dr. Smith<br>";
    echo "Section: 2, Instructor: Dr. Johnson<br>";
}
?>
