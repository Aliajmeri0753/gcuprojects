<?php
include 'connection.php';

// Sanitize & validate ID
$id = isset($_GET['id']) ? intval($_GET['id']) : 0;

// Check if ID is valid
if ($id <= 0) {
    die("Invalid ID");
}

// Fetch existing data
$result = $conn->query("SELECT Name, Email, Contact FROM crud WHERE id=$id");

// Check for SQL error
if (!$result) {
    die("Query Error: " . $conn->error);
}

$row = $result->fetch_assoc();

// If no data found
if (!$row) {
    die("No record found with ID $id");
}

// Update form handling
if (isset($_POST['update'])) {
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $contact = $conn->real_escape_string($_POST['contact']);

    $update = $conn->query("UPDATE crud SET Name='$name', Email='$email', Contact='$contact' WHERE ID=$id");

    if ($update) {
        header("Location: read.php");
        exit;
    } else {
        echo "Update Failed: " . $conn->error;
    }
}
?>

<!-- HTML form -->
<form method="post" action="">
    Name: <input type="text" name="name" value="<?= htmlspecialchars($row['Name']) ?>"><br>
    Email: <input type="email" name="email" value="<?= htmlspecialchars($row['Email']) ?>"><br>
    Contact: <input type="text" name="contact" value="<?= htmlspecialchars($row['Contact']) ?>"><br>
    <input type="submit" name="update" value="Update">
</form>

