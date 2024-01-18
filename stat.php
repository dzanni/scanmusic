<?php
//$title='Statistic - Статистика';
//$description='Scanmusic statistic - Статистика scanmusic';
//$keywords='Russian songs, русские песни';
?>

<h1>STATISTIC  ●  СТАТИСТИКА</h1>


В настоящее время подключены только базы граммофонных пластинок
<a href='libretto/zonofon1912.php'>Зонофон 1912</a> (zon1912) и
<a href='libretto/zonofon1911.php'>Зонофон 1911</a> (zon1911).
Доступна индексация в алфавитном порядке по основным полям и (по умолчанию) по поэтическому размеру.
Индексация по размеру показывает, сколько песен и какие именно сложены
конкретным поэтическим размером, что позволяет предположить влияние ранних из них на поздние.
<br><br>
Использованы общеупотребительные обозначения метров
(Х - хорей, Я - ямб, Д - дактиль, Ам - амфибрахий, Ан - анапест, Л - логаэд, Дк - дольник,
Тк - тактовик, Ак - акцентный стих)
и два дополнительных (Дв - двусложник с переменной анакрузой, Тр -
трехсложник с переменной анакрузой). Цифра после метра - число стоп.
Окончания: м - мужское, ж - женское, д - дактилическое,
не упорядоченные окончания не обозначаются.
Рифма: / - смежная (м/ж), | - охватная (м|ж), без знака - перекрестная (мж).
цн - цезурное наращение, цу - цензурное усечение. Номер после цу и цн - число усеченных
или нарощенных слогов. Комбинации смежной и и перекрестной рифмовки (типа AAbCCb) засчитаны
как перекрестные.<br>
<br>
Например: Д4цу1жм - 4-стопный дактиль с цезурным усечением одного слога, с перекрестной
женской-мужской рифмой <br>
<br>
-UU-U -UU-U<br>
-UU-U -UU-<br>
<br>
<br>

<?php
// вывод формы
include "stat-form.php";

$book='zon1912';
$index='subsize';

if (isset($_POST['book'])) $book=$_POST['book'];
if (isset($_POST['index'])) $index=$_POST['index'];

echo "Base: <span class='red'>$book</span><br>";

$index_tmp = ($index == 'subsize') ? 'METER' : $index;

echo "Indexed by: <span class='red'>$index_tmp</span><br><br>";

// вывод статистики, кроме статистики по размеру
if ($index!='subsize') {

    echo "<span class='blue'>[№] №_пластинки Исполнитель<br>
Название<br>
Первая строка<br>
♪ Композитор<br>
Раздел_сборника Имя_оперы_или_оперетты_(если_есть) ● База </span>  <br>
  <br>";

    $query = "SELECT n, n1, song, line, source, singer, author, chapter, book 
FROM libretto WHERE book ='$book' ORDER BY $index";

    $result = $db->query($query);
    while ($row = $result->fetch()) {

        echo "[" . $row['n'] . "] №" . $row['n1'] . " " . $row['singer'] . "<br>" .
            "<span class='bold'>" . $row['song'] . "</span><br>" . "<span class='i'>" . $row['line'] .
            "</span><br>" . "♪ " . $row['author'] . "<br>" . $row['chapter'] . " " . $row['source'] .
            " ● " . $row['book'] . "<br><br>";
    };

}else{


echo "<span class='blue'>Размер<br>
[№] Название  <br>
<br>
Индексация по размеру дается только для песенных текстов.<br>
Если размер припева и куплета одинаков, песня под размером указывается дважды.  <br>
  <br></span>";

$query ="SELECT * FROM metrica WHERE book = '$book'";
$result = $db->query($query);

$total = $result->rowCount();

 echo "Monometric fragments: " . $total . "<br><br>";


// вывод метров
echo "<table><tr><th width='5%' valign='top'>";

$query ="SELECT metr, count(metr) FROM metrica WHERE book = '$book'
GROUP BY metr ORDER BY count(metr) DESC";
$result = $db->query($query);

    while ($row = $result->fetch()) {
        $j = (int) ($row[1] / $total * 100);
        echo "$row[0] " . " - " . " $row[1]" . " ($j%)<br>";
    }


echo "</th><th width='5%' valign='top'>";


// вывод тоника vs силлабо-тоника
$query ="SELECT type, count(metr) FROM metrica WHERE book = '$book'
GROUP BY type ORDER BY count(metr) DESC";
$result = $db->query($query);

    while ($row = $result->fetch()) {
        $j = (int) ($row[1] / $total * 100);
        echo "$row[0] - $row[1] ($j%)<br>";
        $diagram_lenght365[] = $j;
        $diagram_sign365[] = $row[0];
      }

echo "</th></tr></table>";

    // Выводим диаграмму
    echo "<br>Diagram (screen width = 100%)<br><br>";
    for ($i = 0 ; $i < count($diagram_lenght365) ; ++$i)
  {
    $color = ($i+1)*30;
    echo "<div style='background:hsl($color, 100%, 50%); width:$diagram_lenght365[$i]%'>$diagram_sign365[$i]</div>";
  }
    echo "<br>";


    // выводим перечень песен с индексацией по размеру
  $query ="SELECT subsize, metrica.n, song FROM metrica JOIN
  libretto ON metrica.n=libretto.n WHERE metrica.book = '$book' AND
libretto.book = '$book'
  ORDER BY subsize, metrica.n";
  $result = $db->query($query);

  if ($rows = $result->fetchAll()){
      $j = array('');
      foreach ($rows as $row) {
          if ($row[0] != $j[0]) {
              echo "<br><span class='bold'>$row[0]</span><br>[$row[1]] $row[2]<br>";
          }else{
              echo "[$row[1]] $row[2]<br>";
          }
          $j = $row;
      }
  }
}
