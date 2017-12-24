<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>My LAMP App</title>
    <link href="/css/style.css" rel="stylesheet" >
</head>
<body>

    <table id="wrapper">
        <tr>
            <td colspan="2" class="header">
                <?php include_once 'header.php' ?>
            </td>
        </tr>
        <tr>
            <td class="sideMenu"> <?php include_once 'sideMenu.php' ?> </td>
            <td class="content"> <?php include_once 'content.php' ?></td>
        </tr>
        <tr>
            <td colspan="2" class="footer">
            <?php include_once 'footer.php' ?>
            </td>
        </tr>
    </table>


</body>
</html>