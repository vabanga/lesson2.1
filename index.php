<?php

$tabJson = '[
  {
  "firstName": "Иван",
  "lastName": "Иванов",
  "address": "г.Москва, ул. Алиева,2",
  "phoneNumber": "812 123-1234"
  },
  {
      "firstName": "Сергей",
    "lastName": "Сергеевич",
    "address": "г.Москва, ул. Алиева,15",
    "phoneNumber": "812 123-1264"
  },
  {
      "firstName": "Артём",
    "lastName": "Артёмович",
    "address": "г.Москва, ул. Алиева,20",
    "phoneNumber": "812 123-1273"
  }
]';

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
