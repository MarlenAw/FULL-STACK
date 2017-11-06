<?php 

class Product {
    
    var $id,
        $name,
        $price;
    
    function __construct( $id ) {
        
        
        global $con;
        
        $this->id = $id;
        
        if($this->id) {
            
            //  Read data from database
            
            $SQL = "SELECT * FROM products WHERE id='$this->id';";
            
            $result = mysqli_query($con, $SQL);
            
            if($row = mysqli_fetch_assoc($result)) {            
                
                foreach($row as $key=>$value) {
                    $this->$key = $value;
                }
            }
            
        }
    }
    
    function sayHi() {
        echo "Hi";
    }
    
}

?>