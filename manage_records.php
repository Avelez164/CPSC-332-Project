<?php
include 'db_connect.php'; // database connection

// checks for an action to perform
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['action'])) {
    $action = $_POST['action'];

    switch ($action) {
        case 'create':
            // creates a new record
            $name = $_POST['name'];
            $email = $_POST['email'];

            $query = "INSERT INTO students (name, email) VALUES ('$name', '$email')";
            if ($link->query($query)) {
                echo "Record added successfully.";
            } else {
                echo "Error: " . $link->error;
            }
            break;

        case 'update':
            // updates existing record
            $id = $_POST['id'];
            $name = $_POST['name'];
            $email = $_POST['email'];

            $query = "UPDATE students SET name='$name', email='$email' WHERE id='$id'";
            if ($link->query($query)) {
                echo "Record updated successfully.";
            } else {
                echo "Error: " . $link->error;
            }
            break;

        case 'delete':
            // deletes record
            $id = $_POST['id'];

            $query = "DELETE FROM students WHERE id='$id'";
            if ($link->query($query)) {
                echo "Record deleted successfully.";
            } else {
                echo "Error: " . $link->error;
            }
            break;

        default:
            echo "Invalid action.";
            break;
    }
} elseif ($_SERVER['REQUEST_METHOD'] == 'GET') {
    // views all records
    $query = "SELECT id, name, email FROM students";
    $result = $link->query($query);

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "ID: {$row['id']}<br>";
            echo "Name: {$row['name']}<br>";
            echo "Email: {$row['email']}<br><hr>";
        }
    } else {
        echo "No records found.";
    }
}

$link->close();
