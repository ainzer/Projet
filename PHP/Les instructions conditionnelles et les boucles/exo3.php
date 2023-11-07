<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Table de multiplication</title>
</head>
<body>

<table border="1">
    <tr>
        <th>&nbsp;</th>
        <?php for ($i = 1; $i <= 9; $i++) : ?>
            <th><?= $i ?></th>
        <?php endfor; ?>
    </tr>

    <?php for ($i = 1; $i <= 9; $i++) : ?>
        <tr>
            <th><?= $i ?></th>
            <?php for ($j = 1; $j <= 9; $j++) : ?>
                <td><?= $i * $j ?></td>
            <?php endfor; ?>
        </tr>
    <?php endfor; ?>
</table>

</body>
</html>
