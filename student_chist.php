<?php
require_once 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stu_id = $_POST['stu_id'];
    echo "<h3>SQL Query:</h3>";
    echo "SELECT * FROM course_history WHERE student_id = '$stu_id';<br>";

    // Fake data for testing
    echo "<h3>Fake Data Output:</h3>";
    echo "Course: CS101, Grade: A<br>";
    echo "Course: CS102, Grade: B+<br>";
}
?>
