<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $c_num = $_POST['c_num'];

    $query = "
        SELECT s.sec_num, s.room, s.meet_days, s.meet_begin, s.meet_end, COUNT(e.stu_id) AS enrolled_count
        FROM Sections s
        LEFT JOIN Enrollments e ON s.c_num = e.c_num AND s.sec_num = e.sec_num
        WHERE s.c_num = ?
        GROUP BY s.sec_num, s.room, s.meet_days, s.meet_begin, s.meet_end;";

    $stmt = $link->prepare($query);
    $stmt->bind_param("i", $c_num);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h3>Course Sections:</h3>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Section: {$row['sec_num']}, Room: {$row['room']}, Days: {$row['meet_days']}, Time: {$row['meet_begin']} - {$row['meet_end']}, Enrolled: {$row['enrolled_count']}<br>";
        }
    } else {
        echo "No sections found for the given course.";
    }
    $stmt->close();
}
?>
