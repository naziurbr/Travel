<?php
session_start();
require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/helpers.php';
require_once __DIR__ . '/../app/core/csrf.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';
  $stmt = $pdo->prepare("SELECT * FROM users WHERE email=? LIMIT 1");
  $stmt->execute([$email]);
  $user = $stmt->fetch(PDO::FETCH_ASSOC);
  if ($user && password_verify($password, $user['password_hash'])) {
    $_SESSION['admin'] = true;
    redirect('index.php');
  } else {
    $error = 'Invalid credentials';
  }
}
?>
<!DOCTYPE html>
<html>
<head><title>Admin Login</title><link rel="stylesheet" href="../public/css/main.css"></head>
<body>
<div class="container" style="padding:2rem;">
  <h1>Admin Login</h1>
  <?php if (!empty($error)) echo '<p style="color:red">'.$error.'</p>'; ?>
  <form method="post">
    <?= csrf_field() ?>
    <input type="email" name="email" placeholder="Email" required>
    <input type="password" name="password" placeholder="Password" required>
    <button class="btn btn-primary" type="submit">Login</button>
  </form>
</div>
</body>
</html>
