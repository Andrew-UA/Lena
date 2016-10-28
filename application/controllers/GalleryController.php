<?php
class GalleryController implements IController {
  public function indexAction() {
    $fc = FrontController::getInstance();
    //Add
    $template_view = 'template_gallery_view.php';
    $content_view = 'gallery_view.php';

    $view = new View();

    $result = $view->render($template_view, $content_view);

    $fc->setBody($result);
  }
}
