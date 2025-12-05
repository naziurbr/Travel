<?php
class Package {
    private $pdo;
    public function __construct($pdo) { $this->pdo = $pdo; }

    public function list($filter = []) {
        $sql = "SELECT * FROM packages WHERE status='published'";
        $params = [];
        if (!empty($filter['category'])) { $sql .= " AND category=?"; $params[] = $filter['category']; }
        if (!empty($filter['region'])) { $sql .= " AND region=?"; $params[] = $filter['region']; }
        $sql .= " ORDER BY price ASC";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute($params);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getPopular($limit = 6) {
        $stmt = $this->pdo->prepare("SELECT * FROM packages ORDER BY popularity DESC LIMIT ?");
        $stmt->bindValue(1, (int)$limit, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function findBySlug($slug) {
        $stmt = $this->pdo->prepare("SELECT * FROM packages WHERE slug=? LIMIT 1");
        $stmt->execute([$slug]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }
}
