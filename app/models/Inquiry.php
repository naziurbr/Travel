<?php
class Inquiry {
    private $pdo;
    public function __construct($pdo) { $this->pdo = $pdo; }
    public function store($data) {
        $stmt = $this->pdo->prepare("INSERT INTO inquiries (type, name, phone, email, payload, status) VALUES (?,?,?,?,?,?)");
        $payload = json_encode($data, JSON_UNESCAPED_UNICODE);
        return $stmt->execute([
            $data['inquiry_type'] ?? 'general',
            $data['name'] ?? '',
            $data['phone'] ?? '',
            $data['email'] ?? '',
            $payload,
            'new'
        ]);
    }
}
