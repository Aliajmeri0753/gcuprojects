<?php
// index.php

// Check if form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $fname = $_POST['fname'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $address = $_POST['address'] ?? '';
} else {
    header("Location: form.php"); // If accessed directly, redirect back
    exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Submitted Data</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #eef2f3;
      padding: 40px;
    }
    .data-container {
      max-width: 600px;
      margin: auto;
      background: white;
      border-radius: 10px;
      box-shadow: 0 8px 20px rgba(0,0,0,0.1);
      padding: 30px;
    }
    h2 {
      text-align: center;
      margin-bottom: 30px;
    }
    .data-field {
      margin-bottom: 15px;
      font-size: 18px;
    }
    .data-label {
      font-weight: bold;
    }
  </style>
</head>
<body>

  <div class="data-container">
    <h2>Submitted Data</h2>

    <div class="data-field"><span class="data-label">Full Name:</span> <?= htmlspecialchars($name) ?></div>
    <div class="data-field"><span class="data-label">Father's Name:</span> <?= htmlspecialchars($fname) ?></div>
    <div class="data-field"><span class="data-label">Email:</span> <?= htmlspecialchars($email) ?></div>
    <div class="data-field"><span class="data-label">Contact:</span> <?= htmlspecialchars($contact) ?></div>
    <div class="data-field"><span class="data-label">Address:</span> <?= nl2br(htmlspecialchars($address)) ?></div>
  </div>

</body>
</html>
