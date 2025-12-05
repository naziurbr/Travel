<?php
session_start();
require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/auth.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_admin();

// Handle create
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $stmt = $pdo->prepare("INSERT INTO testimonials (author_name, role, text, image_url, is_featured) VALUES (?,?,?,?,?)");
  $stmt->execute([
    $_POST['author_name'],
    $_POST['role'],
    $_POST['text'],
    $_POST['image_url'],
    isset($_POST['is_featured']) ? 1 : 0
  ]);
  header('Location: testimonials.php?created=1');
  exit;
}

// Fetch all testimonials
$rows = $pdo->query("SELECT * FROM testimonials ORDER BY created_at DESC")->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head><title>Manage Testimonials</title><link rel="stylesheet" href="../public/css/main.css"></head>
<body>
<div class="container" style="padding:2rem;">
  <h1>Testimonials</h1>

  <!-- Create form -->
  <form method="post" class="card" style="padding:1rem; margin-bottom:2rem;">
    <?= csrf_field() ?>
    <input name="author_name" placeholder="Author Name" required>
    <input name="role" placeholder="Role (e.g. Maldives Honeymoon)" required>
    <textarea name="text" placeholder="Testimonial text" required></textarea>
    <input name="image_url" placeholder="Image URL">
    <label><input type="checkbox" name="is_featured" value="1"> Featured</label>
    <button class="btn btn-primary" type="submit">Add Testimonial</button>
  </form>

  <!-- List -->
  <div class="grid grid-3">
    <?php foreach ($rows as $t): ?>
      <div class="card" style="padding:1rem;">
        <p>"<?= e($t['text']) ?>"</p>
        <strong><?= e($t['author_name']) ?></strong>
        <div style="color:#777;"><?= e($t['role']) ?></div>
        <p>Featured: <?= $t['is_featured'] ? 'Yes' : 'No' ?></p>
        <!-- Add edit/delete links if needed -->
      </div>
    <?php endforeach; ?>
  </div>
</div>
</body>
</html>
