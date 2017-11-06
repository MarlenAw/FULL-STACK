<?php

    $url = "http://www.boi.org.il/currency.xml";
    $usdRate = 0;

    //  Get XML as a string from Bank of Israel
    $response = file_get_contents($url);

    //  Convert XML string to an Object
    $obj = simplexml_load_string( $response );

    //  Get the USD rate 
    //  According to the XML structure
    $usdRate = $obj->CURRENCY[0]->RATE;
?>

<h1>1 ILS = <?= $usdRate ?> USD</h1>