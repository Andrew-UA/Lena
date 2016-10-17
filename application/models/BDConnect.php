<?php
Class DBConnect{
  static $_instance;
  protected $_pdo;
  public static function getInstance() {
    if(!(self::$_instance instanceof self))
      self::$_instance = new self();
      return self::$_instance;
    }

  private function __construct() {
    $db = new Datebase;

    $dsn = "mysql:host=$db->getHost;dbname=$db->getName;charset=$db->getCharset";
    $opt = array(
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

    $_pdo = new PDO($dsn, $db->getLoggin(), $db->getPassword(), $opt);
  }

  public function getPDO(){
    return $_pdo;
  }
}
