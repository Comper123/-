<?php
$result = require __DIR__ . '/calc.php';
?>
<html>
<head>
    <title>Калькулятор</title>
    <link rel="stylesheet" href="style/style1.css">
</head>
<body>
    <b>Результат вычислений:</b>
    <br>
    <?= $result ?>
</body>
</html>