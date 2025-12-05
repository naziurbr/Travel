<?php
session_start();
require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/auth.php';
require_admin();

$id = (int)($_GET['id'] ?? 0);
require_once __DIR__ . '/../app/models/Package.php';
$model = new Package($pdo);
$model->delete($id);
header('Location: packages.php?deleted=1');
