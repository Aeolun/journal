<?php

chdir(__DIR__.'/../');

include_once 'auth.php';

if (isset($_GET['date'])) {
    $date = $_GET['date'];
    $content = file_get_contents('data/' . $date);
} else {
    $content = '';
    $date = date('Y-m-d');
}

if (isset($_POST['log'])) {
    file_put_contents('data/'.$date, date('Y-m-d H:i:s')."\n".$_POST['log']."\n\n", FILE_APPEND);
    header('Location: index.php');
    exit;
}

if (isset($_POST['entry'])) {
    file_put_contents('data/'.$date, $_POST['entry']);
    header('Location: index.php');
    exit;
}

?>
<html>
    <head>
        <title>Edit Journal</title>
        <?php include_once 'style.html' ?>
    </head>
    <body>
        <h1>Edit Journal: <?=date('D F jS, Y', strtotime($date))?></h1>
        <form action="edit.php?date=<?=$date?>" method="post">
            <textarea name="entry" cols="80" rows="22"><?= $content ?></textarea>
            <input type="submit" /> or <a href="index.php">Cancel</a>
        </form>
    </body>
</html>
