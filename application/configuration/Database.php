<?php
class Database {
  protected $_login, $_password, $_dbname, $_host, $_charset;

  function __construct(){
    $this->_login = 'root';
    $this->_password = '';
    $this->_dbname = 'DB_lena';
    $this->_host = '127.0.0.1';
    $this->_charset = 'UTF8';
  }


  public function getLogin() {
    return $this->_login;
  }
  public function getPassword() {
    return $this->_password;
  }
  public function getName() {
    return $this->_dbname;
  }
  public function getHost() {
    return $this->_host;
  }
  public function getCharset() {
    return $this->_charset;
  }

}
