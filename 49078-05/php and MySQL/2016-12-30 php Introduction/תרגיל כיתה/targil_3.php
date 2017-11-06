<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Untitled Document</title>
</head>
<body>

    <table border=1>
       <?php
        for($i=1; $i <= 10; $i++) {
            echo "<tr>";
            echo "    <td>" . $i . "x3=" . $i*3 . "</td>";        
            echo "</tr>";        
        }
       ?>

    </table>

</body>
</html>