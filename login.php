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

            // get form data
            $email =  trim($_POST['email']);
            $password =  trim($_POST['password']);

            // verify input credentials
            $qry = "select * from tbl_user where email='$email' and password= '$password'";
            $raw = mysqli_query($conn, $qry);

            $count = mysqli_num_rows($raw);

            if($count > 0){
                echo 'Valid credentials';    // user inputted valid credentials
            }
                
            else{
                echo 'Invalid credentials';            
            }
        }

    }


?>