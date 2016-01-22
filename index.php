<!doctype html>

<?php

$page = (isset($_GET['page']))? $_GET['page']: 'home';
?>


<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<form action="index.php" method="get">
    <input name="page">
    <input type="submit">
</form>



<?php
require $page . ".php";
?>


</body>
</html>