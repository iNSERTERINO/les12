<?php
require_once 'config.php';
$sql = "select * from books";
$res = mysqli_query($db,$sql);
?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

<h2>Библиотека</h2>
<form method="GET">
    <input type="text" name="isbn" placeholder="ISBN">
    <input type="text" name="name" placeholder="Название книги">
    <input type="text" name="author" placeholder="Автор книги">
</form>



<table>
    <thead>
    <tr>
        <th>Название</th>
        <th>Автор</th>
        <th>Год выпуска</th>
        <th>Жанр</th>
        <th>ISBN</th>
    </tr>
    <tbody>
    <?php while ($data = mysqli_fetch_array($res)){ ?>
        <tr style="display: table-row">
            <td><?=$data['name']?></td>
            <td><?=$data['author']?></td>
            <td><?=$data['year']?></td>
            <td><?=$data['genre']?></td>
            <td><?=$data['isbn']?></td>
        </tr>
    <?php } ?>
    </tbody>
    </thead>
</table>
</body>
</html>