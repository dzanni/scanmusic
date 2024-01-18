<!doctype html>
<html lang='en'>
<head>
    <meta charset='utf-8'>

    <?php
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    require_once('app/db.php');
    require_once('app/route.php');
    $db = Db::getInstance();
    $route = new Route;

    echo "<title>$route->title</title>" .
        "<meta name='Description' content='$route->description'>" .
        "<meta name='Keywords' content='$route->keywords'>";
    ?>

    <link rel="icon" type="image/x-icon" href="/favicon.ico">
    <link rel='stylesheet' href='/style.css' type='text/css'>

</head>
<body>

<?php
include('head.php');

if (
    ($fn = array_key_first($_GET))
    && (array_key_first($_GET) !== 'index')
    && (array_key_first($_GET) !== 'index/')
    )
{

    $fn = rtrim($fn, "/");
    $fn = $_SERVER['CONTEXT_DOCUMENT_ROOT'] . "/" . $fn. ".php";

    if (file_exists($fn))
        require($fn);
    else
        include('404.php');
}else{
    include('home.php');
}
include('foot.php');

?>

</body>
</html>