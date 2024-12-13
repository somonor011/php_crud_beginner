<?php 

    /* Database connection with mySQL */

    define("HOSTNAME" , "localhost");
    define("USERNAME" , "root");
    define("PASSWORD" , "Smn@31012006");
    define("DATABASE" , "db_crud_beginner");

    $connection = mysqli_connect(HOSTNAME,USERNAME,PASSWORD,DATABASE);

    if(!$connection){
        die("connection failed : " . mysqli_connect_error());
    }
?>