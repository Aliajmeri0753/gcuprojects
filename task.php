
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Modern Registration Form</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" />
  <style>
    * {
      box-sizing: border-box;
      margin: 0;
      padding: 0;
    }

    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background: linear-gradient(135deg, #89f7fe, #66a6ff);
      min-height: 100vh;
      padding: 50px 15px;
    }

    .container {
      max-width: 600px;
      margin: 0 auto;
    }

    form {
      background: #ffffff;
      padding: 40px;
      border-radius: 15px;
      box-shadow: 0 10px 30px rgba(0, 0, 0, 0.2);
      transition: transform 0.3s ease;
      margin-bottom: 30px;
    }

    form:hover {
      transform: translateY(-4px);
    }

    h2 {
      text-align: center;
      margin-bottom: 30px;
      color: #333;
    }

    .form-group {
      margin-bottom: 20px;
      position: relative;
    }

    label {
      font-weight: 600;
      color: #444;
      display: block;
      margin-bottom: 8px;
    }

    .form-group i {
      position: absolute;
      top: 40px;
      left: 12px;
      color: #007BFF;
    }

    input[type="text"],
    input[type="email"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 12px 12px 12px 38px;
      border: 1.5px solid #ccc;
      border-radius: 8px;
      font-size: 15px;
      transition: border 0.3s, box-shadow 0.3s;
    }

    input:focus,
    textarea:focus {
      border-color: #007BFF;
      box-shadow: 0 0 8px rgba(0, 123, 255, 0.3);
      outline: none;
    }

    textarea {
      resize: vertical;
      min-height: 100px;
    }

    input[type="submit"] {
      background: linear-gradient(to right, #007bff, #00c6ff);
      color: white;
      border: none;
      padding: 14px;
      width: 100%;
      font-size: 16px;
      font-weight: bold;
      border-radius: 8px;
      cursor: pointer;
      transition: background 0.3s ease, transform 0.2s;
      box-shadow: 0 4px 15px rgba(0, 123, 255, 0.4);
    }

    input[type="submit"]:hover {
      transform: scale(1.03);
      background: linear-gradient(to right, #0056b3, #009fdc);
    }

    .output {
      background-color: #fff;
      border-radius: 12px;
      padding: 25px 30px;
      box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .output h3 {
      margin-bottom: 10px;
      color: #333;
    }

    @media (max-width: 600px) {
      form {
        padding: 25px;
      }

      .form-group i {
        top: 38px;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <form method="post" action="index.php">
      <h2>Registration Form</h2>

      <div class="form-group">
        <label for="name">Full Name</label>
        <i class="fa fa-user"></i>
        <input type="text" name="name" id="name" required>
      </div>

      <div class="form-group">
        <label for="father_name">Father's Name</label>
        <i class="fa fa-user-tie"></i>
        <input type="text" name="fname" id="father_name" required>
      </div>

      <div class="form-group">
        <label for="email">Email Address</label>
        <i class="fa fa-envelope"></i>
        <input type="email" name="email" id="email" required>
      </div>

      <div class="form-group">
        <label for="contact">Contact Number</label>
        <i class="fa fa-phone"></i>
        <input type="tel" name="contact" id="contact" required>
      </div>

      <div class="form-group">
        <label for="address">Address</label>
        <i class="fa fa-map-marker-alt"></i>
        <textarea name="address" id="address" required></textarea>
      </div>

      <input type="submit" name="submit" value="Submit">
    </form>

 
  </div>

</body>
</html>
