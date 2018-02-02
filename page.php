<?php
header('X-XSS-Protection:0');
?>
<html>
<head>

</head>
<body>
    <p>Message: <?= $_GET['msg']  ?></p>

    <form>
        <input id="xsrf" type="text" value="543545645wesdf">
        <input type="text" >
        <input type="submit" value="add">
    </form>
</body>
</html>