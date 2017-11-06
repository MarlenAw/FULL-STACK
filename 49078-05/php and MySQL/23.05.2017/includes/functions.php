<?php

    function getProducts() {
        
        global $con;
        
        $aProducts = array();
        
        $SQL = "SELECT id FROM products";
        
        $result = mysqli_query($con, $SQL);
        
        while($row = mysqli_fetch_assoc($result)) {
            $aProducts[] = $row['id'];
        }
        
        return $aProducts;        
    }

?>