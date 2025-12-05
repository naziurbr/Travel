<?php
require_once __DIR__ . '/../models/Destination.php';
class DestinationController {
    private $model;
    public function __construct($pdo) { $this->model = new Destination($pdo); }
    public function list($limit = 8) { return $this->model->list($limit); }
}
