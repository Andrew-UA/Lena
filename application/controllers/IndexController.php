<?php
class IndexController implements IController {
  public function indexAction() {
    $fc = FrontController::getInstance();
    //Add
    //$params = $fc->getParams;
    $view = new View();
    $view->name = "Guest";

    $result = $view->render(ROOT.'/application/views/index.php');

    $fc->setBody($result);
  }
}
