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
      //echo $this->_controller;

      //Action
      $this->_action = !empty($splits[1]) ? $splits[1].'Action' : 'indexAction';

      //Parameters chekking
      if(!empty($splits[2])){
        $key = $values = [];
        for ($i = 2, $cnt = count($splits); $i < $cnt; $i++) {
          //echo $splits[$i];
          if( $i % 2 == 0){
            //even = key (parameters)
            $keys[] = $splits[$i];
          } else {
            //odd = value (parameters)
            $values[]= $splits[$i];
          }
        }
        //print_r ($keys);
        //print_r ($values);
        $this->_params = array_combine($keys, $values);
      }
    }

    public function route(){
      //echo ROOT.'/application/controllers/'.$this->getController().'.php'.'<br>';
      //echo __DIR__.'/'.$this->getController().'.php';
      if(file_exists(ROOT.'/application/controllers/'.$this->getController().'.php')){
        $rc = new ReflectionClass($this->getController());
        //00:35
        if($rc->implementsInterface('IController')){
          if($rc->hasMethod($this->getAction())){
            $controller = $rc->newInstance();
            $method = $rc->getMethod($this->getAction());
            $method->invoke($controller);
            /*$controllerName = $this->getController();
            $controller = new $controllerName;
            $method = $this->getAction();
            $controller->$method();*/
          } else {
            throw new Exception("Action");
          }
        } else {
          throw new Exception("Interface");
        }
      } else {
        //echo $this->getController();
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
