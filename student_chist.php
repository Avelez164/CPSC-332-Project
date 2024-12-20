<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $stu_id = $_POST['stu_id'];

    $query = "
        SELECT c.c_title, e.grade
        FROM Enrollments e
        JOIN Courses c ON e.c_num = c.c_num
        WHERE e.stu_id = ?";

    $stmt = $link->prepare($query);
    $stmt->bind_param("s", $stu_id);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h3>Student Course History:</h3>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Course: {$row['c_title']}, Grade: {$row['grade']}<br>";
        }
    } else {
        echo "No course history found for the given student.";
    }
    $stmt->close();
}
?>
