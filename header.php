<?php

echo "<!doctype html>\n<html lang='en'><head><meta charset='utf-8'>";
require_once 'login.php'; // подключаем скрипт

//remote
$db_host = $host;
$db_user = $user;
$db_password = $password;
$db_db = $database;
$db_port = null;

//local
//$db_host = '127.0.0.1';
//$db_user = 'root';
//$db_password = 'root';
//$db_db = 'test';
//$db_port = 8889;


try {
    $db = new PDO("mysql:host=$db_host;dbname=$db_db", "$db_user", "$db_password");

} catch (Exception $error) {
    die("Connection failed: " . $error->getMessage());
}

//mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
//$mysqli = new mysqli(
//    $db_host,
//    $db_user,
//    $db_password,
//    $db_db,
//	$db_port
//  );
//
//  if ($mysqli->connect_error) {
//    echo 'Errno: '.$mysqli->connect_errno;
//    echo '<br>';
//    echo 'Error: '.$mysqli->connect_error;
//    exit();
//  }

  //echo 'Success: A proper connection to MySQL was made.';
 // echo '<br>';
 //echo 'Host information: '.$mysqli->host_info;
 // echo '<br>';
 // echo 'Protocol version: '.$mysqli->protocol_version;

  //$mysqli->close();

echo "<title>$title</title>" .
"<meta name='Description' content=$description>" .
"<meta name='Keywords' content='$keywords'>" .
"<link rel='stylesheet' href='/style.css' type='text/css'>";

?>

</head><body>

<br>
<img src='/sm-logo1.png' width='50%' alt='logo'><br>
<br>
<a class='button' href='/'>Home</a>
<a class='button' href='/printsongbooks.php'>Printed&nbsp;Songbooks</a>
<a class='button' href='/songbooks.php'>Handwritten&nbsp;Songbooks</a>
<a class='button' href='/scrapbooks.php'>Scrapbooks</a>
<a class='button' href='/notes.php'>Sheet&nbsp;Music</a>
<a class='button' href='/handnotes.php'>Handwritten&nbsp;Sheet&nbsp;Music</a>
<a class='button' href='/notebooks.php'>School&nbsp;Notebooks</a>
<a class='button' href='/manuals.php'>Manuals</a>
<a class='button' href='/libretto.php'>Phonograph&nbsp;libretto</a>
<a class='button black' href='/stat.php'>Statistic</a>
<br>
<br>

<form action='http://www.google.com/search' method='get' name='f' target='_blank'>
    <input name='as_q' value='' size='20' onchange='javascript:submit();'/>
    <input name='submit' type='submit' value='Search'/>
    <input name='as_sitesearch' value='scanmusic.net' type='hidden'/>
    <input name='hl' value='ru' type='hidden'/></form>

<br><hr>