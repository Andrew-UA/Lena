<?php
class SearchController implements IController {
  public function indexAction() {
    $fc = FrontController::getInstance();
    //Add
    $template_view = 'template_view.php';
    $content_view = 'search_view.php';
    if (isset($_POST['q'])) {
      $search = $_POST['q'];
    }
    $model = new ModelSearch();
    $identifiers = $model->getIdArticles($search);
    $model = new ModelIndex();

    foreach ($identifiers as $id) {
      $data[] = $model->getArticle($id['id']);
    }


    $view = new View();
    $result = $view->render($template_view, $content_view, $data);
    //print_r ($data);
    $fc->setBody($result);
  }
}
