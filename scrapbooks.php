<?php
//$title='Scrapbooks - Песенники из вырезок';
//$description='Clippings with songs - Вырезки с песнями';
//$keywords='songbook, scrapbook, вырезки, песни';
?>

<h1>SCRAPBOOKS ● ПЕСЕННИКИ ИЗ ВЫРЕЗОК</h1>

<?php
if(!isset($menu)){
    require_once('app/menu.php');
    $menu = new Menu;
}
$menu->renderList();
?>

<!---->
<!--<br>-->
<!--Александров Ю.И. Снег седины. Каменск-Уральск, 1969?-->
<!--<a class='button' href='../scrapbooks/aleksandrov1969'>Open</a><br>-->
<!--<br>-->
<!--Аноним. Вдоль деревни. Ленинград, 1950-80-е.-->
<!--<a class='button' href='../scrapbooks/leningrad1950'>Open</a><br>-->
<!--<br>-->
<!--● ● ●<br>-->
<!--<br>-->
<!--Разрозненные вырезки. СССР.-->
<!--<a class='button' href='../scrapbooks/junkscrap'>Open</a><br>-->