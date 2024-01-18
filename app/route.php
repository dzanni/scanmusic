<?php

require_once("db.php");

class Route
{

    public $title = 'Scanmusic: songs in PDF';
    public $description = 'PDF of songbooks and sheet music - PDF песенников и нот';
    public $keywords = 'songbooks, sheet music, PDF, песенники, ноты';

    public function __construct(){
         $this->getTitles();
    }

    public function getTitles():void{
        $needle = self::get();

        if ($needle[0]){

            switch (count($needle)){
                case 1:
                    $query = "SELECT url, title, title_trans, description, description_trans, keywords 
                FROM categories 
                WHERE url='$needle[0]'";
                    break;
                case 2:
                    $query = "SELECT pages.url, pages.title, pages.title_trans, pages.description, pages.description_trans, pages.keywords 
                FROM pages LEFT JOIN categories ON pages.categories = categories.id WHERE categories.url = '$needle[0]' AND pages.url = '$needle[1]'";
                    break;
            }
            $db = Db::getInstance();
            $result = $db->query($query);
            if ($rows = $result->fetchAll()){
                $row = $rows[0];

                if (count($needle) == 1){
                    $this->title = $row['title'] ." - ". $row['title_trans'];
                }else{
                    $this->title = $row['title_trans'];
                }

                $this->description = $row['description'] ." - ". $row['description_trans'];
                $this->keywords = $row['keywords'];
            };
        }
    }
    public static function get(): array
    {
        $url = trim(explode('?', $_SERVER['REQUEST_URI'])[0], "/");
        return explode("/", $url);
    }



}