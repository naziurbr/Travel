<?php
require_once __DIR__ . '/../models/Testimonial.php';
class TestimonialController {
    private $model;
    public function __construct($pdo) { $this->model = new Testimonial($pdo); }
    public function list($limit = 3) { return $this->model->list($limit); }
}
