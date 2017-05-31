<?php

chdir(__DIR__.'/../');

include_once 'auth.php';

$entries = array_diff(scandir('data'), ['.','..']);

?>
<html>
    <head>
        <title>Journal</title>
        <?php include_once 'style.html' ?>
    </head>
    <body>
        <h1>Journal</h1>
        <form action="edit.php" method="post">
            <textarea name="log" cols="80" rows="18"></textarea>
            <input type="submit" />
        </form>
        <ul>
        <?php foreach($entries as $entry): ?>
            <li><a href="edit.php?date=<?=$entry?>"><?=date('l F jS, Y', strtotime($entry))?></a></li>
        <?php endforeach; ?>
        </ul>
    </body>
</html>
