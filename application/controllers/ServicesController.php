<?php
class ServicesController implements IController {
  public function indexAction() {
    $fc = FrontController::getInstance();
    //Add
    $template_view = 'template_view.php';
    $content_view = 'services_view.php';

    $view = new View();

    $result = $view->render($template_view, $content_view);

    $fc->setBody($result);
  }
}
