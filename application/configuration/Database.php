<?php
Class Datebase {
  protected $_login, $_password, $_dbname, $_host, $_charset;

  $_login = 'root';
  $_password = '';
  $_dbname = 'DB_lena';
  $_host = '127.0.0.1';
  $_charset = 'UTF8';


  public function getLoggin {
    return $this->_login;
  }
  public function getPassword {
    return $this->_password;
  }
  public function getName {
    return $this->_dbname;
  }
  public function getHost {
    return $this->_host;
  }
  public function getCharset {
    return $this->_charset;
  }
}
