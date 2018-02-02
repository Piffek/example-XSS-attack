<?php
header('X-XSS-Protection:0');
header("Content-Security-Policy: default-src 'none'; style-src 'self'; img-src data:http:")
?>
<html>
<head>

</head>
<body>
    <p>Message: <?= $_GET['msg']  ?></p>

    <form>
        <input id="xsrf" type="text" value="4353453jhjgsdf">
        <input type="text" >
        <input type="submit" value="add">
    </form>
</body>
</html>