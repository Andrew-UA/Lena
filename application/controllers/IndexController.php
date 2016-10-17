<?php
class IndexController implements IController {
  public function indexAction() {
    $fc = FrontController::getInstance();
    //Add
    $template_view = 'template_view.php';
    $content_view = 'index_view.php';

    $view = new View();

    $result = $view->render($template_view, $content_view);

    $fc->setBody($result);
  }
}
