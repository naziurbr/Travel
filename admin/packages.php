<?php
session_start();
require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/auth.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_admin();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once __DIR__ . '/../app/models/Package.php';
  $model = new Package($pdo);
  $model->create($_POST);
  header('Location: packages.php?created=1');
  exit;
}

$rows = $pdo->query("SELECT * FROM packages ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Manage Packages</title><link rel="stylesheet" href="../public/css/main.css"></head>
<body>
<div class="container" style="padding:2rem;">
  <h1>Packages</h1>
  <form method="post" class="card" style="padding:1rem;">
    <?= csrf_field() ?>
    <input name="title" placeholder="Title" required>
    <input name="price" type="number" step="0.01" placeholder="Price" required>
    <input name="currency" value="USD" required>
    <input name="duration_days" type="number" placeholder="Days" required>
    <input name="duration_nights" type="number" placeholder="Nights" required>
    <input name="hero_image_url" placeholder="Image URL" required>
    <input name="short_description" placeholder="Short Description" required>
    <select name="category"><option>luxury</option><option>family</option><option>adventure</option></select>
    <select name="region"><option>asia</option><option>europe</option><option>domestic</option></select>
    <select name="status"><option>published</option><option>draft</option></select>
    <button class="btn btn-primary" type="submit">Create</button>
  </form>

  <div class="grid grid-3" style="margin-top:2rem;">
    <?php foreach ($rows as $p): ?>
      <div class="card" style="padding:1rem;">
        <h3><?= e($p['title']) ?></h3>
        <p><?= e($p['short_description']) ?></p>
        <a class="btn btn-secondary" href="package_edit.php?id=<?= e($p['id']) ?>">Edit</a>
        <a class="btn btn-primary" href="package_delete.php?id=<?= e($p['id']) ?>" onclick="return confirm('Delete?')">Delete</a>
      </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>
