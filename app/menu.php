<?php

require_once("db.php");
require_once("route.php");

class Menu
{
    public $target_arr;
    public $rows;

    public function __construct()
    {
        $this->target_arr = Route::get();
        $this->get();
    }

    public function get(): void
    {
        $db = Db::getInstance();
        $query = "SELECT url, title FROM categories WHERE active=1 ORDER BY priority DESC, id";
        $result = $db->query($query);
        $this->rows = $result->fetchAll();
    }

    public function render(): void
    {
        foreach ($this->rows as $row) {
            $url = "/" . $row['url'];
            $targeted = $this->target_arr[0] == $row['url'];

            if ($targeted) {
                echo "<a class='button targeted' href=$url>" . $row['title'] . "</a> ";
            } else {
                echo "<a class='button' href=$url>" . $row['title'] . "</a> ";
            }
        }
    }

    public function renderBack(): void
    {
        if (count($this->target_arr) == 2) {
            $found_key = array_search($this->target_arr[0], array_column($this->rows, 'url'));
            echo "<a class='button' href='/" . $this->target_arr[0] . "'>◄ " . $this->rows[$found_key]['title'] . "</a><br><br>";
        }
    }

    public function renderList(): void
    {
        if (count($this->target_arr) == 1 && $this->target_arr[0]) {
            $db = Db::getInstance();
            $query = "SELECT pages.url, pages.title_trans, pages.culture, pages.fulltext FROM pages
                        LEFT JOIN categories ON pages.categories=categories.id
                        WHERE categories.url='" . $this->target_arr[0] . "' AND pages.active=1 
                        ORDER BY pages.culture, pages.year_from DESC";
            $result = $db->query($query);

            if ($rows = $result->fetchAll()) {

                echo "<h3>Total: " . count($rows) . "</h3>";
                $culture = "";
                foreach ($rows as $row) {

                    $fulltext = $row['fulltext'] ? "" : " - no fulltext";
                    if ($row['culture'] !== $culture) {
                        echo "<br><span class='bold'>" . $row['culture'] . "</span><br>";
                    }
                    echo "<br>" . $row['title_trans'] . " <a class='button' href='../" . $this->target_arr[0] . "/" . $row['url'] . "'>Open</a> " . $fulltext . "<br>";
                    $culture = $row['culture'];
                }
            }

        }
    }
}