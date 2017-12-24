<?php

    require_once 'functions.php';
    require_once 'classes/product.php';



    //  parse config.ini into an assoc array
    $_config = parse_ini_file('config.ini', true);

    

    //  create a db connection

    $con = mysqli_connect(
        $_config['db']['host'],
        $_config['db']['user'],
        $_config['db']['password'],
        $_config['db']['dbname']
    );
        
    if(!$con) {
        
        echo 'There was an error connecting to the database';
        
        die();  //  exit
    }


?>