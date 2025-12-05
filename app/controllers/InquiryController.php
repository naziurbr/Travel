<?php
require_once __DIR__ . '/../models/Inquiry.php';
class InquiryController {
    private $model;
    public function __construct($pdo) { $this->model = new Inquiry($pdo); }
    public function store($data) { return $this->model->store($data); }
}
