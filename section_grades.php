<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c_num = $_POST['c_num'];
    $sec_num = $_POST['sec_num'];
    echo "<h3>SQL Query:</h3>";
    echo "SELECT COUNT(*) FROM grades WHERE course_number = '$c_num' AND section_number = '$sec_num';<br>";

    // Fake data for testing
    echo "<h3>Fake Data Output:</h3>";
    echo "Total Grades Count: 35<br>";
}
?>
