<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c_num = $_POST['c_num'];
    $sec_num = $_POST['sec_num'];

    $query = "
        SELECT grade, COUNT(*) AS grade_count
        FROM Enrollments
        WHERE c_num = ? AND sec_num = ?
        GROUP BY grade";

    $stmt = $link->prepare($query);
    $stmt->bind_param("ii", $c_num, $sec_num);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h3>Section Grades Count:</h3>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Grade: {$row['grade']}, Count: {$row['grade_count']}<br>";
        }
    } else {
        echo "No grades found for the given course and section.";
    }
    $stmt->close();
}
?>
