<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ssn = $_POST["sno"];

    if (empty($ssn)) {
        die("Social Security Number is required.");
    }

    $stmt = $link->prepare("SELECT ssn, fname, lname FROM STUDENT WHERE ssn = ?");
    $stmt->bind_param("s", $ssn);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        if ($row = $result->fetch_assoc()) {
            printf("SSN: %s<br>\n", htmlspecialchars($row["ssn"]));
            printf("First Name: %s<br>\n", htmlspecialchars($row["fname"]));
            printf("Last Name: %s<br>\n", htmlspecialchars($row["lname"]));
        } else {
            echo "No record found for SSN: " . htmlspecialchars($ssn);
        }
        $result->free_result();
    } else {
        echo "Error executing query: " . $stmt->error;
    }
    $stmt->close();
}
$link->close();
