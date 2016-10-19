<?php
Class ModelIndex {
  public $pdo;

 function __construct(){
   $db = DBConnect::getInstance();
   $this->pdo = $db->getPDO();
  }

  function getArticles($limit_from = 0, $limit_to = 4) {
    $stmp = $this->pdo->prepare('SELECT * FROM articles LIMIT ?, ?');
    $stmp->bindValue(1,$limit_from, PDO::PARAM_INT);
    $stmp->bindValue(2,$limit_to, PDO::PARAM_INT);
    $stmp->execute();
    $data = $stmp->fetchAll();

    return $data;
  }
  }
