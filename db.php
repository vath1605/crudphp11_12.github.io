<?php 
    $db_server = 'localhost';
    $db_user = 'root';
    $db_pass = '';
    $db_name = 'crud11_12';

    try{   
        $conn = mysqli_connect(
            $db_server,
            $db_user,
            $db_pass,
            $db_name
        );
    }catch(mysqli_sql_exception $e){
        echo $e->getMessage();
    }
?>