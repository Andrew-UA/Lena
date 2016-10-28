<?php
class View
{
    public function render($template, $content, $data = NULL, $pages = NULL)
    {
        ob_start();
        //$db = DBConnect::getInstance();
        //$pdo = $db->getPDO();

        include ROOT . '/application/views/' . $template;
        return ob_get_clean();
    }
}
