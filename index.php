<?php
// index.php

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'] ?? '';
    $fname = $_POST['fname'] ?? '';
    $email = $_POST['email'] ?? '';
    $contact = $_POST['contact'] ?? '';
    $address = $_POST['address'] ?? '';
} else {
    header("Location: form.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Form Submission</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: #f4f7fa;
      padding: 40px;
      margin: 0;
    }

    .container {
      max-width: 700px;
      margin: auto;
      background: #ffffff;
      border-radius: 10px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
      overflow: hidden;
    }

    .header {
      background-color: #1e90ff;
      color: white;
      padding: 20px;
      text-align: center;
      font-size: 24px;
      letter-spacing: 1px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
    }

    th, td {
      padding: 16px 20px;
      text-align: left;
      font-size: 17px;
    }

    th {
      background-color: #f0f4f8;
      color: #333;
      width: 30%;
    }

    tr:nth-child(even) {
      background-color: #f9fbfd;
    }

    tr:hover {
      background-color: #eef6ff;
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="header">📋 Submitted Form Data</div>
    <table>
      <tr>
        <th>Full Name</th>
        <td><?= htmlspecialchars($name) ?></td>
      </tr>
      <tr>
        <th>Father's Name</th>
        <td><?= htmlspecialchars($fname) ?></td>
      </tr>
      <tr>
        <th>Email</th>
        <td><?= htmlspecialchars($email) ?></td>
      </tr>
      <tr>
        <th>Contact</th>
        <td><?= htmlspecialchars($contact) ?></td>
      </tr>
      <tr>
        <th>Address</th>
        <td><?= nl2br(htmlspecialchars($address)) ?></td>
      </tr>
    </table>
  </div>

</body>
</html>
