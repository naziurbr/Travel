<?php
require_once __DIR__ . '/../models/Package.php';
class PackageController {
    private $model;
    public function __construct($pdo) { $this->model = new Package($pdo); }
    public function list($filter = []) { return $this->model->list($filter); }
    public function getPopular($limit = 6) { return $this->model->getPopular($limit); }
    public function findBySlug($slug) { return $this->model->findBySlug($slug); }
}
