<?php
Class ModelIndex {
  public $pdo;

 function __construct(){
   $db = DBConnect::getInstance();
   $this->pdo = $db->getPDO();
  }

  public function getArticles($limit_from = 1, $limit_to = 4) {
    $stmp = $this->pdo->prepare('SELECT * FROM articles ORDER BY id DESC LIMIT ?, ?');
    $stmp->bindValue(1,$limit_from, PDO::PARAM_INT);
    $stmp->bindValue(2,$limit_to, PDO::PARAM_INT);
    $stmp->execute();
    $data = $stmp->fetchAll();

    return $data;
  }

  public function getArticle($id) {
    $stmp = $this->pdo->prepare("SELECT * FROM articles WHERE id=?");
    $stmp->bindValue(1, $id, PDO::PARAM_INT);
    $stmp->execute();
    $data = $stmp->fetch(PDO::FETCH_ASSOC);
    return $data;
  }

  public function getCountOfArticles() {
    $data['count'] = $this->pdo->query("SELECT COUNT(*) FROM articles")->fetch(PDO::FETCH_NUM)[0];
    $data['max_pages'] = ($data['count'] % 4) ? ((($data['count'] - $data['count'] % 4) / 4) + 1) : ($data['count'] / 4);
    return $data;
  }
}
