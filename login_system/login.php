<?php
include("db.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $username = $_POST["username"];
  $password = $_POST["password"];

  $stmt = $conn->prepare("SELECT password FROM users WHERE username = ?");
  $stmt->bind_param("s", $username);
  $stmt->execute();
  $stmt->bind_result($hashed_password);
  
  if ($stmt->fetch() && password_verify($password, $hashed_password)) {
    echo "Login successful!";
  } else {
    echo "Invalid username or password.";
  }
}
?>

<form method="post">
  Username: <input type="text" name="username" required><br>
  Password: <input type="password" name="password" required><br>
  <button type="submit">Login</button>
</form>
