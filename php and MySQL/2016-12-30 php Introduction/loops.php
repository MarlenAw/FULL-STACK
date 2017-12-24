<?

    $aNumbers = array(90,80,100,70,65);

    
    //  For is good for indexd arrays
    $lengthOfArray = count( $aNumbers );
    for($i=0; $i < $lengthOfArray; $i++)
        echo $aNumbers[ $i ] . " ";  //  a dot is used for string chainning        

?>
<br>    
<?    

    //  Associative Arays
    $aGrades = array("alex"=>98,"dana"=>100);

    //  Add values
    $aGrades["moshe"] = 88;

    foreach($aGrades as $key=>$value) {
        echo $key . "'s grade in JavaScript is " . $value;
        echo "<br>";
    }


    $name = "Maor";

    foreach($aGrades as $name=>$grade) {
        echo $name . "'s grade in JavaScript is " . $grade;
        echo "<br>";
    }


    echo "<br> $name <br>"; //  will print moshe and not Maor


    foreach($aGrades as $grade) {
        echo $grade;
        echo "<br>";
    }
        
?>