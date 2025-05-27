<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Staff Registration Form</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <h2>Staff Registration Form</h2>
  <form action="hasil.php" method="post">
    <label for="nama">Name</label>
    <input type="text" name="nama" id="nama" required>

    <label for="email">Email</label>
    <input type="email" name="email" id="email" required>

    <label for="password">Password</label>
    <input type="password" name="password" id="password" required>

    <label for="gender">Gender</label>
    <select name="gender" id="gender" required>
      <option value="">--Select Gender--</option>
      <option value="Pria">Pria</option>
      <option value="Wanita">Wanita</option>
    </select>

    <label for="posisi">Position</label>
    <select name="posisi" id="posisi" required>
      <option value="">--Select Position--</option>
      <option value="Senior">Senior</option>
      <option value="Junior">Junior</option>
    </select>

    <button type="submit">Register</button>
  </form>
</body>
</html>
