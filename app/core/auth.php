<?php
function is_admin() {
    return isset($_SESSION['admin']) && $_SESSION['admin'] === true;
}
function require_admin() {
    if (!is_admin()) redirect(APP_URL . '/admin/login.php');
}
