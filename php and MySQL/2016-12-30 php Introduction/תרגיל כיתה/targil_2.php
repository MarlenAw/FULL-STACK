<?php $i=1; ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

    <ul>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
        <li><?= $i++ ?></li>
    </ul>
    
    
    <ul>
    <?php
        for($i=1; $i <= 10; $i++) {
            echo "<li>$i</li>";
        }
            
    ?>
    </ul>

</body>
</html>