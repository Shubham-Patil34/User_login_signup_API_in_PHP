<?php
    
    //variables for database connection
    $sname = "localhost";
    $uname = "root";
    $pass = "";
    $db = "Mydatabase";

    if($_SERVER['REQUEST_METHOD'] == "POST"){

        //Database connection
        $conn = new mysqli($sname, $uname, $pass, $db);

        //check connection
        if($conn->connect_error){
            echo "database connection failed....!!";
        }
        else{
            echo "database connection successful....";
        }

    }


?>