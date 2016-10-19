<?php
class View
{
    public function render($template, $content, $data = NULL)
    {
        ob_start();
        $db = DBConnect::getInstance();
        $pdo = $db->getPDO();

        $stmt = $pdo->query('SELECT name FROM test');
        while ($row = $stmt->fetch())
        {
            echo $row['name'] . "\n";
        }

        include ROOT . '/application/views/' . $template;
        return ob_get_clean();
    }
}
