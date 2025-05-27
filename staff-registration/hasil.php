<?php
function sanitize($data) {
  return htmlspecialchars(stripslashes(trim($data)));
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nama = sanitize($_POST["nama"]);
  $email = sanitize($_POST["email"]);
  $password = sanitize($_POST["password"]);
  $gender = sanitize($_POST["gender"]);
  $posisi = sanitize($_POST["posisi"]);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Registration Result</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="box">
    <h2>Registration Result</h2>
    <p><strong>Name:</strong> <?= $nama ?></p>
    <p><strong>Email:</strong> <?= $email ?></p>
    <p><strong>Gender:</strong> <?= $gender ?></p>
    <p><strong>Position:</strong> <?= $posisi ?></p>
    <p><strong>Password:</strong> <?= str_repeat('*', strlen($password)) ?></p>

    <a href="index.php">← Back to Form</a>
  </div>
</body>
</html>
