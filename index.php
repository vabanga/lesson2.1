<?php
$tabJson = file_get_contents('file.json');

$tab = json_decode($tabJson,true);

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1">
    <tr>
        <th>Имя и фамилия</th>
        <th>Адрес</th>
        <th>Телефон</th>
    </tr>
    <?php
    foreach ($tab as $v) {
        ?>
        <tr>
            <td><?=$v['firstName'];?> <?=$v['lastName']?></td>
            <td><?=$v['address']?></td>
            <td><?=$v['phoneNumber']?></td>
        </tr>
        <?php
    }
    ?>
</table>
</body>
</html>
