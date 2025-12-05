<?php
session_start();
require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/core/auth.php';
require_admin();
?>
<!DOCTYPE html>
<html>
<head><title>Admin Dashboard</title><link rel="stylesheet" href="../public/css/main.css"></head>
<body>
<div class="container" style="padding:2rem;">
  <h1>Dashboard</h1>
  <div class="grid grid-3">
    <a class="card" href="packages.php"><h3>Packages</h3></a>
    <a class="card" href="destinations.php"><h3>Destinations</h3></a>
    <a class="card" href="testimonials.php"><h3>Testimonials</h3></a>
    <a class="card" href="inquiries.php"><h3>Inquiries</h3></a>
  </div>
  <p><a class="btn btn-secondary" href="logout.php">Logout</a></p>
</div>
</body>
</html>
