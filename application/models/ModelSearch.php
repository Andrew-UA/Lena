<?php
class ModelSearch
{
    public $pdo;

    public function __construct()
    {
        $db = DBConnect::getInstance();
        $this->pdo = $db->getPDO();
    }

    public function getIdArticles($search = '')
    {
        //echo $search.'|';
    $search = substr($search, 0, 64); //cut string 64 symbols
    //echo $search.'|';
    $search = preg_replace("/[^\w\x7F-\xFF\s]/", " ", $search); //cut bad symbols
    //echo $search.'|';
    $good = trim(preg_replace("/\s(\S{1,2})\s/", " ", preg_replace("( +)", "  ", " $search "))); //replace short words to space
    //echo $good.'|';
    $good = preg_replace("( +)", " ", $good); //replece double cpace (double spaces was added special for correct  seraching short words)
    $data = $this->pdo->query(" SELECT id
                                FROM articles
                                WHERE text
                                LIKE '%". str_replace(" ", "%' OR text LIKE '%", $good). "%'"
                              )->fetchAll(PDO::FETCH_ASSOC);

    return $data;
    }
}
