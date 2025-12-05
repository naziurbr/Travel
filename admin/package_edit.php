<?php
session_start();
require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/auth.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_admin();

$id = (int)($_GET['id'] ?? 0);
$stmt = $pdo->prepare("SELECT * FROM packages WHERE id=?");
$stmt->execute([$id]);
$pkg = $stmt->fetch(PDO::FETCH_ASSOC);
if (!$pkg) die('Package not found');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  require_once __DIR__ . '/../app/models/Package.php';
  $model = new Package($pdo);
  $model->update($id, $_POST);
  header('Location: packages.php?updated=1');
  exit;
}
?>
<!DOCTYPE html>
<html>
<head><title>Edit Package</title><link rel="stylesheet" href="../public/css/main.css"></head>
<body>
<div class="container" style="padding:2rem;">
  <h1>Edit Package</h1>
  <form method="post">
    <?= csrf_field() ?>
    <input name="title" value="<?= e($pkg['title']) ?>" required>
    <input name="price" type="number" value="<?= e($pkg['price']) ?>" required>
    <input name="currency" value="<?= e($pkg['currency']) ?>" required>
    <input name="duration_days" type="number" value="<?= e($pkg['duration_days']) ?>" required>
    <input name="duration_nights" type="number" value="<?= e($pkg['duration_nights']) ?>" required>
    <input name="hero_image_url" value="<?= e($pkg['hero_image_url']) ?>" required>
    <input name="short_description" value="<?= e($pkg['short_description']) ?>" required>
    <select name="status"><option <?= $pkg['status']=='published'?'selected':'' ?>>published</option><option <?= $pkg['status']=='draft'?'selected':'' ?>>draft</option></select>
    <button class="btn btn-primary" type="submit">Save</button>
  </form>
</div>
</body>
</html>
