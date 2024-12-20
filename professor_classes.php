<?php
include 'db_connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prof_ssn = $_POST['prof_ssn'];

    $query = "
        SELECT c.c_title, s.room, s.meet_days, s.meet_begin, s.meet_end
        FROM Sections s
        JOIN Courses c ON s.c_num = c.c_num
        WHERE s.teacher_ssn = ?";
    
    $stmt = $link->prepare($query);
    $stmt->bind_param("s", $prof_ssn);
    $stmt->execute();
    $result = $stmt->get_result();

    echo "<h3>Professor's Classes:</h3>";
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "Course: {$row['c_title']}, Room: {$row['room']}, Days: {$row['meet_days']}, Time: {$row['meet_begin']} - {$row['meet_end']}<br>";
        }
    } else {
        echo "No classes found for the given SSN.";
    }
    $stmt->close();
}
?>
