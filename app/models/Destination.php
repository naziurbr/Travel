<?php
class Destination {
    private $pdo;
    public function __construct($pdo) { $this->pdo = $pdo; }
    public function list($limit = 8) {
        $stmt = $this->pdo->prepare("SELECT * FROM destinations ORDER BY created_at DESC LIMIT ?");
        $stmt->bindValue(1, (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
