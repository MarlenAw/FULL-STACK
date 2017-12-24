<? $i=5; ?>
<? // short open tags ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Hello PHP</title>
</head>
<body>

    <h1><?php echo "Hello World" ?></h1>
    
    <ul>
        <li><?= $i++ ?></li>
        <li><?php echo $i++ ?></li>
        <li><?php echo $i++ ?></li>
        <li><?php echo $i++ ?></li>
        <li><?php echo $i++ ?></li>
        <li><?php echo $i++ ?></li>
    </ul>

</body>
</html>