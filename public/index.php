<?php
session_start();

require_once __DIR__ . '/../app/config/env.php';
require_once __DIR__ . '/../app/config/db.php';
require_once __DIR__ . '/../app/core/helpers.php';
require_once __DIR__ . '/../app/core/csrf.php';
require_once __DIR__ . '/../app/core/auth.php';

// Controllers
require_once __DIR__ . '/../app/controllers/PackageController.php';
require_once __DIR__ . '/../app/controllers/DestinationController.php';
require_once __DIR__ . '/../app/controllers/TestimonialController.php';
require_once __DIR__ . '/../app/controllers/InquiryController.php';

// Router
$page = $_GET['page'] ?? 'home';
$validPages = ['home','packages','package','flights','hotels','visa','about','contact'];
if (!in_array($page, $validPages)) $page = 'home';

// Handle form submissions
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['inquiry_type'])) {
    $controller = new InquiryController($pdo);
    $controller->store($_POST);
    $_SESSION['flash_success'] = 'Thank you! Your request has been received.';
    redirect('?page=' . $page);
}

// Instantiate controllers
$packageController = new PackageController($pdo);
$destinationController = new DestinationController($pdo);
$testimonialController = new TestimonialController($pdo);

// Layout header
include __DIR__ . '/../app/views/layouts/header.php';

// Route to page
switch ($page) {
    case 'home':
        $popularPackages = $packageController->getPopular(6);
        $destinations = $destinationController->list(8);
        $testimonials = $testimonialController->list(3);
        include __DIR__ . '/../app/views/pages/home.php';
        break;
    case 'packages':
        $filter = [
          'category' => $_GET['category'] ?? null,
          'region' => $_GET['region'] ?? null,
          'sort' => $_GET['sort'] ?? 'price'
        ];
        $packages = $packageController->list($filter);
        include __DIR__ . '/../app/views/pages/packages.php';
        break;
    case 'package':
        $slug = $_GET['slug'] ?? '';
        $package = $packageController->findBySlug($slug);
        include __DIR__ . '/../app/views/pages/package_show.php';
        break;
    case 'flights': include __DIR__ . '/../app/views/pages/flights.php'; break;
    case 'hotels': include __DIR__ . '/../app/views/pages/hotels.php'; break;
    case 'visa': include __DIR__ . '/../app/views/pages/visa.php'; break;
    case 'about': include __DIR__ . '/../app/views/pages/about.php'; break;
    case 'contact': include __DIR__ . '/../app/views/pages/contact.php'; break;
}

// Layout footer
include __DIR__ . '/../app/views/layouts/footer.php';
