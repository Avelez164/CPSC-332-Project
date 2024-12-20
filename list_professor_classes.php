<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prof_ssn = $_POST['prof_ssn'];
    echo "<h3>SQL Query:</h3>";
    echo "SELECT * FROM classes WHERE prof_ssn = '$prof_ssn';<br>";

    // Fake data for testing
    echo "<h3>Fake Data Output:</h3>";
    echo "Course: CS101, Section: 1<br>";
    echo "Course: CS102, Section: 2<br>";
}
?>
