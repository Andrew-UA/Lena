<?php
class PublicationsController implements IController {
    public function listAction()
  {
      $fc = FrontController::getInstance();
      $currentPage = $fc->getParams();
      $template_view = 'template_view.php';
      $content_view = 'index_view.php';
      $model = new ModelIndex();
      $lastArticle = ($currentPage['page'] * 4 - 4);
      $data = $model->getArticles($lastArticle);
      $pages = $model->getCountOfArticles();
      $pages['current_page'] = $currentPage['page'];
      print_r($pages);
      $view = new View();
      $result = $view->render($template_view, $content_view, $data, $pages);
      $fc->setBody($result);
  }
  public function articleAction() {
    $fc = FrontController::getInstance();
    $article = $fc->getParams();
    //print_r($article);
    //Add
    $template_view = 'template_view.php';
    $content_view = 'article_view.php';

    $model = new ModelIndex();
  //  $data = $model->getArticles($article["id"], $article["id"]+1);
    $data = $model->getArticle($article['id']);
    $view = new View();
    $result = $view->render($template_view, $content_view, $data);
    //print_r ($data);

    $fc->setBody($result);
  }
}
