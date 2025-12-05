<?php
session_start();
require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/auth.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_admin();

// Handle create
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO destinations (name, region, price_from, image_url, description) VALUES (?,?,?,?,?)");
  $stmt->execute([
    $_POST['name'],
    $_POST['region'],
    $_POST['price_from'],
    $_POST['image_url'],
    $_POST['description']
  ]);
  header('Location: destinations.php?created=1');
  exit;
}

// Fetch all destinations
$rows = $pdo->query("SELECT * FROM destinations ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Manage Destinations</title><link rel="stylesheet" href="../public/css/main.css"></head>
<body>
<div class="container" style="padding:2rem;">
  <h1>Destinations</h1>

  <!-- Create form -->
  <form method="post" class="card" style="padding:1rem; margin-bottom:2rem;">
    <?= csrf_field() ?>
    <input name="name" placeholder="Destination Name" required>
    <select name="region">
      <option>asia</option><option>europe</option><option>domestic</option>
    </select>
    <input name="price_from" type="number" step="0.01" placeholder="Starting Price" required>
    <input name="image_url" placeholder="Image URL" required>
    <textarea name="description" placeholder="Description"></textarea>
    <button class="btn btn-primary" type="submit">Add Destination</button>
  </form>

  <!-- List -->
  <div class="grid grid-3">
    <?php foreach ($rows as $d): ?>
      <div class="card" style="padding:1rem;">
        <h3><?= e($d['name']) ?></h3>
        <p><?= e($d['description']) ?></p>
        <p><strong>From $<?= e($d['price_from']) ?></strong></p>
        <p>Region: <?= e($d['region']) ?></p>
        <!-- You can add edit/delete links similar to packages -->
      </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>
