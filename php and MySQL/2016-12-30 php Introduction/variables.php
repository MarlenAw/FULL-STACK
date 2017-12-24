<?

    $i = 3;
    $st = "This is a string";
    $price = 3.5;
    $bHappy = true; //  or false
    

    //  Array of colors
    $aColors = array();
    $aColors[] = "Blue";
    $aColors[] = "red";
    $aColors[] = "green";


    //  Array of fruits

    $aFruits = array("apple","peach","grape");

    //  Associative Arays
    $aGrades = array("alex"=>98,"dana"=>100);

    //  Add values
    $aGrades["moshe"] = 88;
    $aGrades[] = 75;    //  index will be 0
    $aGrades[] = 60;    //  index will be 1, and so on
    //  Avoid working with mixed arrays - Choose:
    //  Assoc OR Indexed
    

    //  Print content of array 
    //  print_r($aColors);
    //  print_r($aFruits);
    print_r($aGrades);
    

?>
<h1><?= $aFruits[0] ?></h1>

<h2>JavaScript grades</h2>
<p>
    Alex <?= $aGrades["alex"] ?> <br>
    Dana <?= $aGrades["dana"] ?> <br>
</p>
