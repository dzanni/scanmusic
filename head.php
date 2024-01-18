<h2><a href="/" class="no_decoration">
        <img src="/favicon.ico"> Scanmusic</a>
</h2>

<?php
require_once('app/menu.php');
$menu = new Menu();
$menu->render();
?>

<br>
<br>
<form action='http://www.google.com/search' method='get' name='f' target='_blank'>
    <input name='as_q' value='' size='20' onchange='javascript:submit();'/>
    <input name='submit' type='submit' value='Search'/>
    <input name='as_sitesearch' value='scanmusic.net' type='hidden'/>
    <input name='hl' value='ru' type='hidden'/></form>

<br>
<hr>
<br>

<?php
$menu->renderBack();
?>


