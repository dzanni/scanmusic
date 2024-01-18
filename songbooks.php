<?php
//$title='Handwritten songbooks - Рукописные песенники';
//$description='PDF Handwritten songbooks 20th century - рукописные песенники XX в.';
//$keywords='handwritten songbooks, рукописные песенники, handmade, самиздат';
?>

<h1>HANDWRITTEN SONGBOOKS ● РУКОПИСНЫЕ ПЕСЕННИКИ</h1>

<?php
if(!isset($menu)){
    require_once('app/menu.php');
    $menu = new Menu;
}
$menu->renderList();
?>

<!--
<br>
<span class='bold'>Russian (37, расшифрованы 31)</span><br>
<br>
Неизвестная. Песенник. Иваново, 2007?
<a class='button' href='../songbooks/ivanovo2007'>
Open</a><br>
<br>
Неизвестная. Русские народные песни. Песенник. Иваново, 1996-1997
<a class='button' href='../songbooks/ivanovo1996'>Open</a><br>
<br>
Колчинский. Песенник с аккордами. Иваново, 1990?
<a class='button' href='../songbooks/kolchinskiy1990'>Open</a><br>
<br>
Неизвестная. Песенник. Иваново, 1989?
<a class='button' href='../songbooks/ivanovo1989'>Open</a><br>
<br>
Света. Песенник. Иваново, 1985-1986
<a class='button' href='../songbooks/sveta1985'>Open</a><br>
<br>
Неизвестная. Счастливый день. Песенник. Иваново, 1981
<a class='button' href='../songbooks/ivanovo1981'>Open</a><br>
<br>
Коровина Л. Песенник. Горький, 1980-1985.
<a class='button' href='../songbooks/korovina1980'>Open</a><br>
<br>
Люба. Песенник. Горький или Ковров (Владимирская область), 1979-80.
<a class='button' href='../songbooks/luba1979'>Open</a><br>
<br>
Проппер Н.В. Разрозненные листы. Москва, ?-1979.
<a class='button' href='../songbooks/propper1979'>Open</a><br>
<br>
Логинова Наталья. Песенник. Иваново, 1977-1980.
<a class='button' href='../songbooks/loginova1977'>Open</a><br>
<br>
Неизвестная. Песенник. Иваново, 1975-1977.
<a class='button' href='../songbooks/ivanovo1975'>Open</a><br>
<br>
Куприянова Валентина. Песенник. Долговерясы (Краснослободский район, Мордовия), 1974-1975.
<a class='button' href='../songbooks/kupr1974-75'>Open</a><br>
<br>
Мыльникова Елена. Песенник. Иваново, 1974.
<a class='button' href='../songbooks/mylnikova1974'>Open</a><br>
<br>
Ольга. Альбом. Волгоград, 1974.
<a class='button' href='../songbooks/olga1974'>Open</a><br>
<br>
Гусарова Оля. Песенник. Иваново, 1972.
<a class='button' href='../songbooks/gusarova1972'>Open</a><br>
<br>
Неизвестная. Песенник. Москва, 1971.
<a class='button' href='../songbooks/moskva1971'>Open</a><br>
<br>
Паутов Л.К. Песенник. ГДР - Мирный, 1968-1970.
<a class='button' href='../songbooks/pautov1968'>Open</a><br>
<br>
Шумков В.М. Разрозненные листы. Балтийский флот?, 1969.
<a class='button' href='../songbooks/shumkov1969sh'>Open</a> - не расшифрован<br>
<br>
Шестаков Михаил. Стихи и песни. Прутской (Алтайский край), 1967?
<a class='button' href='../songbooks/shestakov1967'>Open</a><br>
<br>
Шумков В.М. Сборник песен. Балтийский флот, 1967.
<a class='button' href='../songbooks/shumkov1967h'>Open</a> - не расшифрован<br>
<br>
Неизвестная. Песенник. Иваново, 1967.
<a class='button' href='../songbooks/ivanovo1967'>Open</a><br>
<br>
Неизвестный. Песенник. Петрозаводск, 1961.
<a class='button' href='../songbooks/petr1961'>Open</a><br>
<br>
Галя. Песенник. Ленинград, 1958-59.
<a class='button' href='../songbooks/galya1958'>Open</a><br>
<br>
Галина Г. Альбом. Гудермес, 1957-58.
<a class='button' href='../songbooks/galina1957-58'>Open</a> - не расшифрован<br>
<br>
Юля. Альбом. Ленинградская обл., 1955?
<a class='button' href='../songbooks/yulya1955'>Open</a><br>
<br>
Неизвестный. Песенник. Ленинград, 1950?
<a class='button' href='../songbooks/leningrad1950'>Open</a><br>
<br>
Неизвестная. Песенник. Кропоткин, 1949-53.
<a class='button' href='../songbooks/kropotkin1949-51'>Open</a><br>
<br>
Соколов В.И. Солдатский альбом. Монголия, 1946.
<a class='button' href='../songbooks/sokolov1946'>Open</a><br>
<br>
Опаренко Е.В. Песенник. Ленинград, 1946.
<a class='button' href='../songbooks/opar1946'>Open</a><br>
<br>
Феоктистов П.И. Солдатский песенник, 1945-88.
<a class='button' href='../songbooks/feoktistov1945-88'>Open</a> - не расшифрован<br>
<br>
Попова Галина. Тетрадь для песен. Балтийский флот, 1945-47.
<a class='button' href='../songbooks/popova1945-47'>Open</a> - не расшифрован<br>
<br>
Рогушин А.О. Солдатский песенник. Восточная Пруссия, 1945.
<a class='button' href='../songbooks/rogush1945'>Open</a><br>
<br>
Лёля. Альбом. Заречье (Пустошкинский район, Калининская обл.), 1943.
<a class='button' href='../songbooks/lela1943'>Open</a><br>
<br>
Лебедева Шура. Альбом. Осташков, 1942-45.
<a class='button' href='../songbooks/lebedeva1942'>Open</a><br>
<br>
Валя. Песенник. Ленинград, 1930-31.
<a class='button' href='../songbooks/valya1931'>Open</a><br>
<br>
Кириллов Ф.С. Тетрадь. Санкт-Петербург, 1903.
<a class='button' href='../songbooks/kirillov1903'>Open</a> - не расшифрован<br>
<br>
А.К.С. Памятная книжка. Санкт-Петербург, 1900-07.
<a class='button' href='../songbooks/aks1907'>Open</a><br>
<br>
<span class='bold'>Estonian (4)</span><br>
<br>
Riina Sooaru. Laulik. Tartu, 1976. (Eesti ja inglise keeles).
<a class='button' class='button' href='../songbooks/tartu2'>Open</a><br>
<br>
Maria Pärjamäe. Laulik. Tartu, 1970-1971. (Eesti keeles).
<a class='button' href='../songbooks/tartu1'>Open</a><br>
<br>
Anonüümne tüdruk. Laulik. Tartu, 1961? (Eesti ja vene keeles).
<a class='button' href='../songbooks/tartu3'>Open</a><br>
<br>
Tüule Paas. Laulik. Tartu, 1957-1958. (Eesti keeles).
<a class='button' href='../songbooks/tartu4'>Open</a><br>
-->
