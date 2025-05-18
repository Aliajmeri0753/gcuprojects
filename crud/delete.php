<?php
include 'connection.php';

// Step 1: Validate and sanitize ID
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = intval($_GET['id']);

    // Step 2: Run delete query
    $sql = "DELETE FROM crud WHERE ID = $id";

    if ($conn->query($sql) === TRUE) {
        // Step 3: Redirect after deletion
        header("Location: read.php");
        exit();
    } else {
        echo "Error deleting record: " . $conn->error;
    }

} else {
    echo "Invalid ID.";
}
?>
