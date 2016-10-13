<?php
class FrontController{
  protected $_controller, $_action, $_params, $_body;
  static $_instance;

  public static function getInstance(){
    if(!(self::$_instance instanceof self))
      self::$_instance = new self();
      return self::$_instance;
    }

    private function __construct(){
      $request = $_SERVER['REQUEST_URI'];
      $splits = explode('/', trim($request, '/'));

      //Controller

      $this->_controller = !empty($splits[0]) ? ucfirst($splits[0]).'Controller' : 'IndexController';

      //Action
      $this->_action = !empty($splits[1]) ? $split[1].'Action' : 'indexAction';

      //Parameters chekking
      if(!empty($splits[2])){
        $key = $values = [];
        for ($i=2, $cnt = count($splits); $i<$cnt; $i++) {
          if($i % 2 == 0){
            //even = key (parameters)
            $keys[] = $splits[$i];
          } else {
            //odd = value (parameters)
            $values = $splits[$i];
          }
          $this->_params = array_combine($keys, $values);
        }
      }
    }

    public function route(){
      if(class_exists($this->getController(), false)){
        echo 'It is';
        $rc = new ReflectionClass($this->getController());
        //00:35
        if($rc->implementsInterface('IController')){
          if($rc->hasMethod($this->getAction())){
            $controller = $rc->newInstance();
            $method = $rc->getMethod($this->getAction());
            $method->invoke($controller);
          } else {
            throw new Exception("Action");
          }

        } else {
          throw new Exception("Interface");
        }
      } else {
        echo 'It isnt';
        throw new Exception("Controller");
      }
    }
    public function getParams(){
      return $this->_params;
    }
    public function getController(){
      return $this->_controller;
    }
    public function getAction(){
      return $this->_action;
    }
    public function getBody(){
      return $this->_body;
    }

    public function setBody($body){
      $this->_body = $body;
    }
}
