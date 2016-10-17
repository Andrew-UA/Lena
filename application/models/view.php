<?php
class View
{
    public function render($template, $content, $data = NULL)
    {
        ob_start();
        include ROOT . '/application/views/' . $template;
        return ob_get_clean();
    }
}
