<?php
include 'connection.php';

// Corrected query with ID
$result = $conn->query("SELECT ID, Name, Email, Contact FROM crud");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Users</title>
    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #89f7fe, #66a6ff);
            padding: 40px;
            animation: fadeIn 1s ease;
        }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-10px); }
            to { opacity: 1; transform: translateY(0); }
        }

        h2 {
    text-align: center;
    font-size: 2.8rem;
    font-weight: 700;
    margin-bottom: 25px;
    letter-spacing: 1.2px;
    line-height: 1.2;
    text-transform: uppercase;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

    background: linear-gradient(90deg,rgb(40, 83, 121) 0%,rgb(89, 176, 248) 100%);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
}


        .table-container {
            max-width: 900px;
            margin: auto;
            background: white;
            padding: 20px 30px;
            border-radius: 20px;
            box-shadow: 0 15px 30px rgba(0,0,0,0.1);
            overflow-x: auto;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 10px;
        }

        th, td {
            padding: 12px 16px;
            text-align: center;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #5e9eff;
            color: white;
        }

        tr:hover {
            background-color: #f1f9ff;
        }

        a {
            text-decoration: none;
            color: #417de0;
            font-weight: 500;
            transition: color 0.3s ease;
        }

        a:hover {
            color: #1e56c3;
        }

        .add-btn {
            display: inline-block;
            margin-bottom: 15px;
            background-color: #5e9eff;
            color: white;
            padding: 10px 20px;
            border-radius: 8px;
            text-decoration: none;
            font-weight: bold;
            transition: background 0.3s;
        }

        .add-btn:hover {
            background-color: #417de0;
        }
    </style>
</head>
<body>
    <div class="table-container">
        <h2>User List</h2>
        <a class="add-btn" href="create.php">+ Add New User</a>
        <table>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Contact</th>
                <th>Actions</th>
            </tr>

            <?php
            include 'connection.php';
            $result = $conn->query("SELECT ID, Name, Email, Contact FROM crud");

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['ID'] . "</td>";
                echo "<td>" . $row['Name'] . "</td>";
                echo "<td>" . $row['Email'] . "</td>";
                echo "<td>" . $row['Contact'] . "</td>";
                echo "<td>
                        <a href='update.php?id=" . $row['ID'] . "'>Edit</a> | 
                        <a href='delete.php?id=" . $row['ID'] . "' onclick=\"return confirm('Are you sure?')\">Delete</a>
                      </td>";
                echo "</tr>";
            }
            ?>
        </table>
    </div>
</body>
</html>


